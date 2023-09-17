<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class trans_titip extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['tgl_titip', 'harga_sewa', 'tgl_berakhir'];

    /**
     * Get the user that owns the trans_titip
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function m_kendaraan(): BelongsTo
    {
        return $this->belongsTo(m_kendaraan::class, 'id_kendaraan');
    }
}
