<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    public function items()
    {
        return $this->belongsTo(Item::class, 'item_code', 'code');
    }

    public function transactions()
    {
        return $this->belongsTo(Transaction::class, 'transaction_note', 'note');
    }
}
