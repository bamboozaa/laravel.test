<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caticon extends Model
{
    use HasFactory;
    protected $table = 'caticons';
    protected $fillable = ['icon'];

    public function category(): BelongsTo {
        return $this->belongTo(Category::class, 'icon_id', 'id');
    }
}
