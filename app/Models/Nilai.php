<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 't_nilai';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'nisn', 'nilai'];
}
