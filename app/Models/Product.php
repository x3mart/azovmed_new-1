<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alias',
        'title',
        'meta_description',
        'body',
        'position',
        'is_visible',
        'is_sale',
        'category_id'
    ];

    /**
     * Get the Category that owns the Product.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

     /**
     * Get the Images for the Product.
     */
    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }

    /**
     * Get the only visible Products.
     */
    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }

    /**
     * Get the Products on sales .
     */
    public function scopeSales($query)
    {
        return $query->where('is_sale', true);
    }
}
