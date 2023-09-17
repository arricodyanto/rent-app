<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class trans_sewa extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['tgl_awal', 'tgl_akhir'];

    /**
     * Get the user that owns the trans_sewa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trans_titip(): BelongsTo
    {
        return $this->belongsTo(trans_titip::class, 'foreign_key', 'other_key');
    }
}
