<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Transaction;
use App\Models\Purchase;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'code' => "PC001",
            'name' => "Pensil Stadler 2B",
            'price' => 4500,
        ]);

        Item::create([
            'code' => "PC002",
            'name' => "Pensil Faber Castell 2B",
            'price' => 5500,
        ]);

        Transaction::create([
            'note' => NOW()->format('YmdHis'),
        ]);

        Transaction::create([
            'note' => NOW()->subday(1)->format('YmdHis'),
        ]);

        Purchase::create([
            'transaction_note' => NOW()->format('YmdHis'),
            'item_code' => "PC001",
            'quantity' => 1,
            'total' => 4500
        ]);

        Purchase::create([
            'transaction_note' => NOW()->subday(1)->format('YmdHis'),
            'item_code' => "PC002",
            'quantity' => 2,
            'total' => 11000
        ]);

        Purchase::create([
            'transaction_note' => NOW()->format('YmdHis'),
            'item_code' => "PC001",
            'quantity' => 1,
            'total' => 4500
        ]);
    }
}
