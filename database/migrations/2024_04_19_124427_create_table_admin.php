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
        Schema::create('table_admin', function (Blueprint $table) {
            $table->increments('admin_id'); // ID ADMIN, khóa chính, tự động tăng dần
            $table->string('admin_name');
            $table->string('email')->unique();
            $table->string('username');
            $table->string('password');
            $table->string('address');
            $table->string('phone');
            $table->enum('permission', ['admin', 'moderator', 'user'])->default('user'); // ENUM hoặc VARCHAR
            $table->dateTime('account_time_create'); // Thời gian tham gia
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_admin');
    }
};
