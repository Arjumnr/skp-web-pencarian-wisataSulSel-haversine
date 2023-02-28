<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class ModelWisata extends Model
{
    use HasFactory;
    protected $table = 'wisata';
    protected $fillable = [
        'wisata_tg_id',
        'kategori',
        'nama',
        'foto',
        'deskripsi',
    ];
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y ');
    }

    public function tourguide ()
    {
        return $this->belongsTo(ModelTourGuide::class, 'wisata_tg_id', 'id');
    }
}
