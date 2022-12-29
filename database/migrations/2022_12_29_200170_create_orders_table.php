<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->unsignedInteger('phone')->nullable();
            $table->unsignedInteger('post_code');
            $table->unsignedInteger('count');
            $table->foreignId('currency_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('region_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('country_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('promo_code_id')->constrained()->onDelete('CASCADE');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
