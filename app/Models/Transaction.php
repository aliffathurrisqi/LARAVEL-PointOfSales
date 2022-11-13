<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'transaction_note', 'note');
    }
}
