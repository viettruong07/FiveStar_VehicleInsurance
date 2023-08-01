<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_details1';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function  Order1() {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function  Product1() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
