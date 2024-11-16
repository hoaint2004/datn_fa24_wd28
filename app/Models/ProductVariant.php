<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $table = 'variants'; // Tên của bảng trong cơ sở dữ liệu

    protected $fillable = [
        'product_id',
        'size',
        'color',
        'quantity',
        'created_at',
        'updated_at'
    ];

    // Định nghĩa quan hệ với model Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
