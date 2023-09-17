<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kendaraan extends Model
{
    use HasFactory, SoftDeletes;

    private $fillable = ['merk', 'jenis', 'nama', 'nopol'];
}
