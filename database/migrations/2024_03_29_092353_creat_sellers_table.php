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
        Schema::create('tbl_sellers', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id')->unique();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('img')->nullable();
            $table->enum('sex', ['male', 'female', 'other']);
            $table->date('DOB');
            $table->text('address')->nullable();
            $table->string('name_company');
            $table->enum('type_business', ['individual', 'enterprise']);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_sellers');
    }
};
