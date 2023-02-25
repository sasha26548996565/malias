<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->unsignedBigInteger('price');
            $table->unsignedTinyInteger('discount')->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('CASCADE');
            $table->string('preview');
            $table->unsignedTinyInteger('rate')->default(1);
            $table->unsignedInteger('count')->default(1);
            $table->boolean('is_new')->default(true);
            $table->json('json_properties')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
