@extends('layouts.main')
@section('contents')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-xl-12 col-xxl-12 d-flex">
                <div class="w-100">

                    <div class="row">

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h4 class="">Barang</h4>
                                            <h3 class="mt-1 mb-3 text-primary">{{ $items->count() }}</h3>
                                        </div>

                                        <div class="col-auto mt-3 me-3">
                                            <div class="stat opacity-25">
                                                <i class="bi bi-box align-middle text-primary"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h4 class="">Transaksi</h4>
                                            <h3 class="mt-1 mb-3 text-primary">{{ $transactions->count() }}</h3>
                                        </div>

                                        <div class="col-auto mt-3 me-3">
                                            <div class="stat opacity-25">
                                                <i class="bi bi-journal-text align-middle text-primary"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h4 class="">Penjualan</h4>
                                            <h3 class="mt-1 mb-3 text-primary">Rp
                                                {{ number_format($purchases->sum('total'), 0, '.', '.') }}
                                            </h3>
                                        </div>

                                        <div class="col-auto mt-3 me-3">
                                            <div class="stat opacity-25">
                                                <i class="bi bi-cash-coin align-middle text-primary"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    @endsection
