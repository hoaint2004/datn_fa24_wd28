<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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

            $table->string('shipping_fee', 255); // Phí vận chuyển

            // Trạng thái thanh toán
            $table->enum('payment_status', ['Chưa thanh toán', 'Đã thanh toán'])
                ->default('Chưa thanh toán');
            $table->timestamps();
        });

        // Thêm Trigger để ngăn cập nhật trạng thái khi đã hủy
        DB::unprepared('
            CREATE TRIGGER prevent_update_cancelled_order
            BEFORE UPDATE ON orders
            FOR EACH ROW
            BEGIN
                IF OLD.status = "Đã hủy" THEN
                    SIGNAL SQLSTATE "45000"
                    SET MESSAGE_TEXT = "Không thể thay đổi trạng thái của đơn đã bị hủy.";
                END IF;
            END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Xóa Trigger trước khi xóa bảng
        DB::unprepared('DROP TRIGGER IF EXISTS prevent_update_cancelled_order');

        Schema::dropIfExists('orders');
    }
};
