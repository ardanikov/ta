<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'm_kelas';
    protected $primaryKey = 'id';
    protected $fillable = ["m_jurusan_id", "m_guru_id", "m_rombel_id"];
}
