<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class m_kendaraan extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id_kendaraan';
    protected $fillable = ['merk', 'jenis', 'nama', 'nopol'];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
