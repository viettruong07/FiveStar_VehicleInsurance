<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'Product1';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function  productCategory() {
        return $this->belongsTo(ProductCategory::class, 'product_category1_id', 'id');
    }

    public function  productDetails() {
        return $this->hasMany(ProductDetail::class, 'product_details1_id', 'id');
    }

    public function  orderDetails() {
        return $this->hasMany(OrderDetail::class, 'product_id1', 'id');
    }
}
