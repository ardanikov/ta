<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
