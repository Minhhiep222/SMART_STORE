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
        Schema::create('tbl_invoices-detail', function (Blueprint $table) {
            $table->id(); // Tạo cột id với kiểu dữ liệu bigint auto-increment và làm khóa chính
            $table->integer("invoice_id");
            $table->integer("product_id");
            $table->date("invoice_date");
            $table->decimal("price");
            $table->decimal("total");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_invoices-detail');
    }
};
