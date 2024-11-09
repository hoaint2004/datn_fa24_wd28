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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();  
            $table->bigInteger('user_id');
            $table->bigInteger('product_id'); 
            $table->bigInteger('variant_id')->nullable(); 
            $table->integer('size');    // Size sản phẩm
            $table->string('color');                        
            $table->integer('quantity'); // Số lượng sản phẩm
            $table->decimal('price', 30, 2); // Giá của sản phẩm hoặc biến thể
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
