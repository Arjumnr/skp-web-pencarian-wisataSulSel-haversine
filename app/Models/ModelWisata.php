<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function tourguide ()
    {
        return $this->belongsTo(ModelTourGuide::class, 'wisata_tg_id', 'id');
    }
}
