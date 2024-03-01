<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('main_image')->nullable();
            $table->string('images')->nullable();
            $table->text('description')->nullable();
            $table->string('warranty')->nullable();
            $table->string('price')->nullable();
            $table->string('commission')->nullable();
            $table->boolean('status')->nullable();
            $table->string('order_by')->nullable();
            $table->string('link')->nullable();
            $table->bigInteger('qty')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
