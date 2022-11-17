<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Transaction;
use App\Models\Purchase;

class TransactionController extends Controller
{
    public function index()
    {
        return view(
            'sale',
            [
                'title' => "Penjualan",
                'active' => "Penjualan",
                'transactions' => Transaction::with(['purchases'])->paginate(20),
            ]
        );
    }

    public function show(Transaction $transaction)
    {
        return view(
            'sale_detail',
            [
                'title' => "Detail ".$transaction->note,
                'active' => "Penjualan",
                'transactions' => $transaction,
                'purchases' => Purchase::where('transaction_note', $transaction->note)->with(['items'])->get(),
            ]
        );
    }
}
