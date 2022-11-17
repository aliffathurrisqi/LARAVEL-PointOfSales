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

                                    <table class="mb-3">
                                        <tr>
                                            <td class="w-25"><strong>Nota</strong></td>
                                            <td><strong>:</strong></td>
                                            <td>{{ $transactions->note }}</td>
                                        </tr>
                                        <tr>
                                            <td class="w-25"><strong>Waktu</strong></td>
                                            <td><strong>:</strong></td>
                                            <td>{{ $transactions->created_at->format('d M Y H:i:s') }}
                                                WIB</td>
                                        </tr>
                                    </table>


                                    <table class="table table-bordered table-hover">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Nama Barang</th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($purchases as $purchase)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $purchase->item_code }}</td>
                                                    <td>{{ $purchase->items->name }}</td>
                                                    <td>Rp {{ number_format($purchase->items->price, 0, '.', '.') }}</td>
                                                    <td>{{ $purchase->quantity }}</td>
                                                    <td>Rp {{ number_format($purchase->total, 0, '.', '.') }}</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <th colspan="5" class="text-end">Total Harga</th>
                                                <th>Rp {{ number_format($purchases->sum('total'), 0, '.', '.') }}</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
