<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->string('service_name');
            $table->integer('service_price');
            $table->string('delivery_method');
            $table->date('process_date');
            $table->string('session_time');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number');
            $table->string('email');
            $table->text('address');
            $table->string('city');
            $table->string('postal_code');
            $table->string('status')->default('Selesaikan Pembayaran Dahulu');
            $table->string('transaction_id')->nullable();
            $table->string('bank')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
