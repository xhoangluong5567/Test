<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'images_feature',
        'price',
        'warranty',
        'accessories',
        'discount',
        'status',
        'images',
        'desc',
        'categories_id',
    ];

    public $timestamps = true;

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }


}
