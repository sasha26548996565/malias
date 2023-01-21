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
            $table->string('email')->nullable()->unique();
            $table->unsignedInteger('phone')->nullable();
            $table->unsignedInteger('post_code')->nullable();
            $table->unsignedInteger('count')->default(1);
            $table->foreignId('region_id')->nullable()->constrained()->onDelete('CASCADE');
            $table->foreignId('country_id')->nullable()->constrained()->onDelete('CASCADE');
            $table->foreignId('promo_code_id')->nullable()->nullable()->constrained()->onDelete('CASCADE');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
