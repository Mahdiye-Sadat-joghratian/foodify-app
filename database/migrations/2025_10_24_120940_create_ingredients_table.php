<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->string('unit')->nullable();
            $table->string('created_at');
            $table->string('updated_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
};