<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelKomentar extends Model
{
    use HasFactory;
    protected $table = 'komentar';
    protected $fillable = [
        'komentar_wisata_id',
        'komentar',
        'komentar_tg_id',
    ];

    public function wisata ()
    {
        return $this->belongsTo(ModelWisata::class, 'komentar_wisata_id', 'id');
    }
}
