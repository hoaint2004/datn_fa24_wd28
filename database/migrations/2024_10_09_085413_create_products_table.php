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
    
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('image', 255);
            $table->decimal('price', 30, 2);
            $table->decimal('price_old', 20, 2);
            $table->string('code')->unique();
            $table->text('description')->nullable();
            $table->bigInteger('category_id');
            $table->tinyInteger('status')->default(1); // Thêm trường is_hidden vào bảng products và mặc định là false (không ẩn)
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
