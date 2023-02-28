<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class ModelTourguide extends Model
{
    use HasFactory;
    protected $table = 'tourguide';
    protected $fillable = [
        'users_id',
        'nama_wisata',
        'fp_wisata',
        'no_telp',
        'alamat',
        'email',
        'deskripsi',
        'latitude',
        'longitude',
        'jam_buka',
        'jam_tutup',
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y ');
    }

    //ambil data user
    public function user()
    {
        return $this->belongsTo(ModelUser::class, 'users_id', 'id');
    }
}
