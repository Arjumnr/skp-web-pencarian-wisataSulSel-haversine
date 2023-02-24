<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTourGuide extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'users_id',
        'nama_wisata',
        'no_telp',
        'alamat',
        'email',
        'deskripsi',
        'latitude',
        'longitude',
        'jam_buka',
        'jam_tutup',
    ];

    //ambil data user
    public function user()
    {
        return $this->belongsTo(ModelUser::class, 'users_id', 'id');
    }
}
