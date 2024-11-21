<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id');                 // ID đơn hàng (liên kết tới bảng `orders`)
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('variant_id')->nullable();   // ID biến thể (liên kết tới bảng `variants`)
            $table->decimal('price', 30, 2);  // Giá bán sản phẩm
            $table->integer('size');                        // Size sản phẩm
            $table->string('color');                        // Size sản phẩm
            $table->integer('quantity');                    // Số lượng sản phẩm
            $table->decimal('total', 30, 2);   // Tổng tiền của sản phẩm (price * quantity)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
