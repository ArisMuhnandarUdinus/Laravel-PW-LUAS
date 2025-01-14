<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DetailPembelian extends Model
{
    protected $guarded = [];

    public function alattulis(): HasMany
    {
        return $this->hasMany(AlatTulis::class);
    }
}
