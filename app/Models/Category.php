<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['name', 'detail', 'status', 'icon_id'];

    public function caticon() {
        return $this->hasOne(Caticon::class, 'id', 'icon_id');
    }
}
