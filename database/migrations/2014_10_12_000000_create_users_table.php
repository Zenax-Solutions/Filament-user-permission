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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('remember_token', 100)->nullable();
            $table->string('invoice_logo')->nullable();
            $table->string('phone_numer')->nullable();
            $table->string('working_number')->nullable();
            $table->string('nic_front')->nullable();
            $table->string('nic_back')->nullable();
            $table->string('address')->nullable();
            $table->string('fb_page')->nullable();
            $table->string('ig_page')->nullable();
            $table->string('whatsapp_link')->nullable();

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
