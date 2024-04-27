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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); 
            $table->string('username')->unique()->nullable();
            $table->string('password');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->enum('sex', ['male', 'female', 'other'])->nullable();
            $table->date('DOB')->nullable();
            $table->string('img')->nullable();
            $table->text('address')->nullable();
            $table->string('bank_Account')->nullable();
            $table->text('notification')->nullable();
            $table->integer('coin')->nullable();  
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
