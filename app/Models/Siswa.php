<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'm_siswa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'nisn',
        'nis',
        'm_rombel',
        'birthdate',
        'gender',
        'm_detail_siswa'
    ];
}
