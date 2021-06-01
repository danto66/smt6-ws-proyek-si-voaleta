<?php

namespace App\Models;

use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipping_cost',
        'product_total_amount',
        'grand_total_amount',
        'quantity_total',
        'payment_agent',
        'payment_type',
        'shipping_agent',
        'shipping_service',
        'user_id',
        'expired_at',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_details');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}