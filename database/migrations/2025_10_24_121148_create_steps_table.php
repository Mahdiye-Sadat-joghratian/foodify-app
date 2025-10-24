<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('steps', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('description');
            $table->string('image_url')->nullable();
            $table->string('step_order');
            $table->string('recipe_id');
            $table->string('created_at');
            $table->string('updated_at');
            $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('steps');
    }
};