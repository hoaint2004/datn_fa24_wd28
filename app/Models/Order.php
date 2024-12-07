<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'code',
        'name',
        'address',
        'phone',
        'total_price',
        'status',
        'payment_method',
        'shipping_fee',
        'payment_status',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
    public function review()
    {
        return $this->hasOne(Reviews::class, 'order_id', 'id');
    }
}
