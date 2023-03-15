<?php

use App\Models\Product;
use App\Models\ProductPropertyOption;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('product_property_option', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_option_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('product_id')->constrained()->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_property_option');
    }
};
