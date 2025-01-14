<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AlatTulis extends Model
{
    protected $guarded = [];

    public function detailpembelian(): BelongsTo
    {
        return $this->belongsTo(DetailPembelian::class);
    }

    public function pembelians(): HasMany
    {
        return $this->hasMany(Pembelian::class);
    }
}
