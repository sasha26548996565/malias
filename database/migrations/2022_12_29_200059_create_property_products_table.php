<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('product_id')->constrained()->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_products');
    }
};
