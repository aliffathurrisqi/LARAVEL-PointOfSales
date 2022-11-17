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

                                    <table class="table table-bordered table-hover">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Total</th>
                                                <th>Tanggal</th>
                                                <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transactions as $key => $transaction)
                                                <tr>
                                                    <td>{{ $transactions->firstItem() + $key }}</td>
                                                    <td>{{ $transaction->note }}</td>
                                                    <td>Rp
                                                        {{ number_format($transaction->purchases->sum('total'), 0, '.', '.') }}
                                                    </td>
                                                    <td>{{ $transaction->created_at->format('d M Y H:i:s') }} WIB</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-success" href="/sale/{{ $transaction->note }}"><i
                                                                class="bi bi-basket2"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="float-start">
                                        Menampilkan {{ $transactions->firstItem() }} ke {{ $transactions->lastItem() }} dari
                                        {{ $transactions->total() }}
                                    </div>
                                    <div class="float-end"> {{ $transactions->links() }}</div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
