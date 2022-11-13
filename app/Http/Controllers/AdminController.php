<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Transaction;
use App\Models\Purchase;

class AdminController extends Controller
{
    public function index()
    {
        return view(
            'dashboard',
            [
                'title' => "Dashboard",
                'items' => Item::with(['purchases']),
                'transactions' => Transaction::with(['purchases']),
                'purchases' => Purchase::with(['items','transactions']),
            ]
        );
    }
}
