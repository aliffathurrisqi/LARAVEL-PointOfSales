<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        return view(
            'item',
            [
                'title' => "Barang",
                'items' => Item::all(),
            ]
        );
    }
}
