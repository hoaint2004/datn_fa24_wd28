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
        Schema::create('discount', function (Blueprint $table) {
            $table->id();
            $table->string('discount_code', 255);
            $table->text('description');
            $table->datetime('start_date');
            $table->dateTime('end_date');
            $table->boolean('is_active')->default(true); // Trạng thái kích hoạt
            $table->enum('discount_type', ['percentage', 'fixed']); // Loại giảm giá
            $table->decimal('discount_value', 10, 2); // Giá trị giảm giá
            $table->decimal('min_order_value', 10, 2)->nullable(); // Giá trị đơn hàng tối thiểu
            $table->integer('usage_limit')->nullable(); // Giới hạn số lần sử dụng
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount');
    }
};
