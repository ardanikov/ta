<?php

namespace App\Models;

use App\Models\Kurikulum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mapel extends Model
{
    use HasFactory;
    protected $table = 'm_mapel';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_pelajaran',
        'ringkas',
        'm_kurikulum',
    ];

    // public function kurikulum(): BelongsTo
    // {
    //     return $this->belongsTo(Kurikulum::class);
    // }
}
