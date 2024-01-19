<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'bank',
        'nama_rekening',
        'bukti_pembayaran',
        'payment_id',
        'user_id',
    ];

    public function user(){
        return $this->hasOne(User::class, 'user_id', 'user_id');
    }
}
