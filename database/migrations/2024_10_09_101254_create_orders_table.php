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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('code');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->decimal('total_price', 30, 2);

            $table->enum('status', [
                'Chờ xác nhận',         // Chờ xác nhận
                'Đã xác nhận',       // Đã xác nhận
                'Đang giao',        // Đang giao
                'Giao hàng thành công',      // Giao hàng thành công
                'Giao hàng thất bại',          // Giao hàng thất bại
                'Đã hủy',       // Đã hủy
                'Hoàn thành'        // Hoàn thành
            ])->default('Chờ xác nhận');

            // Hình thức thanh toán
            $table->enum('payment_method', ['Thanh toán khi nhận hàng', 'vnpay'])
                ->default('Thanh toán khi nhận hàng');
            //  cod: Thanh toán khi nhận,
            //  vnpay: Thanh toan vnpay,

            $table->string('shipping_fee', 255); // Phí vận chuyển

            // Trạng thái thanh toán
            $table->enum('payment_status', ['Chưa thanh toán', 'Đã thanh toán'])
                ->default('Chưa thanh toán');
            //  unpaid: Đơn hàng chưa được thanh toán.
            //  paid: Đơn hàng đã được thanh toán thành công.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
