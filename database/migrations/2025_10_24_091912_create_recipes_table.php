<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('title'); // اسم recipe
            $table->string('description')->nullable(); // توضیح کلی
            $table->string('prep_time'); // زمان آماده‌سازی
            $table->string('cook_time'); // زمان پخت
            $table->string('servings'); // تعداد سرو
            $table->string('images')->nullable(); // عکس‌ها
            $table->string('difficulty'); // سختی
            $table->string('dish_type'); // نوع غذا
            $table->string('daily_target')->nullable(); // هدف روزانه
            $table->string('hashtags')->nullable(); // هشتگ‌ها
            $table->string('user_id'); // ربط به کاربر
            $table->string('created_at'); // زمان ساخت
            $table->string('updated_at'); // زمان به‌روزرسانی
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('recipes');
    }
};