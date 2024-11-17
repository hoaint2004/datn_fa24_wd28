<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $table = 'discount';
    // protected $fillable = ['discount_code', 'description', 'start_date', 'end_date'];
    protected $guarded = [];

    // public function product()
    // {
    //     return $this->belongsTo(Product::class);
    // }
}
