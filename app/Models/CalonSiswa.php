<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonSiswa extends Model
{
    use HasFactory;
    protected $table = "calon_siswa";
    protected $fillable = [
        'nisn',
        'jenis_kelamin',
        'nama_lengkap',
        'asal_sekolah',
        'email',
        'no_hp',
        'no_hp_ayah',
        'no_hp_ibu',
        'referensi',
        'status_pembayaran',
        'pdf_file',
        'password',
        'user_id',
        'payment_id',
    ];

    public function payment(){
        return $this->hasOne(Payment::class, 'payment_id', 'payment_id');
    }

    public function all_payment(){
        return $this->hasMany(Payment::class, 'user_id', 'user_id');
    }
}
