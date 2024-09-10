<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verifikasi extends Model
{
    use HasFactory;

    protected $table = 'verifikasi';

    protected $fillable = ['order_id', 'transaction_id', 'bank'];

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'order_id');
    }
}
