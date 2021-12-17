<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\wallet;

class Transaction extends Model
{
    use HasFactory;

    public function wallet()
    {
        return $this->belongsTo(wallet::class , 'foreign_key', 'wallet_id');
    }

}
