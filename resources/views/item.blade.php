@extends('layouts.main')
@section('contents')
    <div class="container-fluid p-0">

        <div class="row">
            <div class="col-xl-12 col-xxl-12 d-flex">
                <div class="w-100">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="mb-3">
                                        <button class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#addItem">Tambah Barang</button>
                                    </div>

                                    <div class="modal fade" id="addItem" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    Tambah Barang
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/item" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" name="code" class="form-control"
                                                                id="floatingInput" placeholder="Kode Barang" maxlength="5"
                                                                minlength="3" required>
                                                            <label for="floatingInput">Kode Barang</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input type="text" name="name" class="form-control"
                                                                id="floatingInput" placeholder="Nama Barang" required>
                                                            <label for="floatingInput">Nama Barang</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input type="number" name="price" class="form-control"
                                                                id="floatingInput" placeholder="Harga (Rp)" min="1"
                                                                required>
                                                            <label for="floatingInput">Harga (Rp)</label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <table class="table table-bordered table-hover">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th class="w-50">Nama Barang</th>
                                                <th>Harga</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $key => $item)
                                                <tr>
                                                    <td>{{ $items->firstItem() + $key }}</td>
                                                    <td>{{ $item->code }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>Rp {{ number_format($item->price, 0, '.', '.') }}</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-warning" data-bs-toggle="modal"
                                                            data-bs-target="#editItem{{ $item->id }}"><i
                                                                class="bi bi-pencil align-middle"></i></button>
                                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#deleteItem{{ $item->id }}"><i
                                                                class="bi bi-trash align-middle"></i></button>
                                                    </td>
                                                </tr>

                                                <div class="modal fade" id="editItem{{ $item->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                Edit Barang
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="/item/edit" method="POST">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $item->id }}" required>
                                                                    <div class="form-floating mb-3">
                                                                        <input type="text" name="code"
                                                                            class="form-control" id="floatingInput"
                                                                            placeholder="Kode Barang"
                                                                            value="{{ $item->code }}" maxlength="5"
                                                                            minlength="3" required>
                                                                        <label for="floatingInput">Kode
                                                                            Barang</label>
                                                                    </div>
                                                                    <div class="form-floating mb-3">
                                                                        <input type="text" name="name"
                                                                            class="form-control" id="floatingInput"
                                                                            placeholder="Nama Barang"
                                                                            value="{{ $item->name }}" required>
                                                                        <label for="floatingInput">Nama
                                                                            Barang</label>
                                                                    </div>
                                                                    <div class="form-floating mb-3">
                                                                        <input type="number" name="price"
                                                                            class="form-control" id="floatingInput"
                                                                            placeholder="Harga (Rp)"
                                                                            value="{{ $item->price }}" min="1"
                                                                            required>
                                                                        <label for="floatingInput">Harga (Rp)</label>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit" class="btn btn-primary">Ubah
                                                                        Data</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="deleteItem{{ $item->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                Hapus Barang
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="/item/delete" method="POST">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $item->id }}">
                                                                    Anda yakin ingin menghapus
                                                                    <strong>{{ $item->name }}</strong> ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="float-start">
                                        Menampilkan {{ $items->firstItem() }} ke {{ $items->lastItem() }} dari
                                        {{ $items->total() }}
                                    </div>
                                    <div class="float-end"> {{ $items->links() }}</div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
