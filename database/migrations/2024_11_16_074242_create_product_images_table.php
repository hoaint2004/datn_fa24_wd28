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
        Schema::create('product_images', function (Blueprint $table) {
            $table->id(); // Khóa chính
            $table->bigInteger('product_id')->unsigned(); // Khóa ngoại liên kết bảng products
            $table->string('image_url'); // Đường dẫn ảnh
            $table->integer('image_order')->default(0); // Thứ tự của ảnh
            $table->timestamps(); // Tự động tạo created_at và updated_at

            // Khóa ngoại
            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};
