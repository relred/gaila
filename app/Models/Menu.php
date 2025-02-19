<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasUuids;
    
    protected $guarded = [
        'id'
    ];

    public function categories(): HasMany {
        return $this->hasMany(Category::class);
    }
}
