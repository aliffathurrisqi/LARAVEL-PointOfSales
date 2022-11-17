<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        return view(
            'item',
            [
                'title' => "Barang",
                'active' => "Barang",
                "items" => Item::with(["purchases"])->orderBy('name', 'asc')->paginate(20),
            ]
        );
    }

    public function create(Request $request)
    {
        Item::create([
            'code' => $request->code,
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return redirect('/item');
    }

    public function edit(Request $request)
    {
        Item::find($request->id)->update(['code' => $request->code,'name' => $request->name, 'price' => $request->price, 'updated_at' => NOW()]);

        return redirect('/item');
    }

    public function destroy(Request $request)
    {
        Item::find($request->id)->delete();

        return redirect('/item');
    }
}
