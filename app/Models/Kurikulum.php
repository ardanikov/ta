<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;
    protected $table = 'm_kurikulum';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_kurikulum'
    ];
}
