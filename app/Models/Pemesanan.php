<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';

    protected $fillable = [
        'user_id',
        'service_name', 
        'service_price', 
        'delivery_method', 
        'process_date', 
        'session_time', 
        'first_name', 
        'last_name', 
        'phone_number', 
        'email', 
        'address',
        'city', 
        'postal_code', 
        'status', 
        'transaction_id',
        'bank',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function verifikasi()
    {
        return $this->hasOne(Verifikasi::class, 'order_id', 'id');
    }
}
