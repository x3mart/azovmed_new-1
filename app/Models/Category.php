<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alias',
        'title',
        'meta_description',
        'body',
        'position',
        'is_visible'
    ];

    /**
     * Get the Products for the Category.
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product')->orderBy('position', 'asc');
    }

    /**
     * Get the only visible Categories.
     */
    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }
}
