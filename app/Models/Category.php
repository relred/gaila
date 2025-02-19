<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = [
        'id'
    ];

    public function menu(): BelongsTo {
        return $this->belongsTo(Menu::class);
    }

    public function items(): HasMany {
        return $this->hasMany(Item::class);
    }
}
