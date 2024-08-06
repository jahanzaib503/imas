<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->date('dob')->nullable();
            $table->string('authority_apply')->nullable();
            $table->text('health_condition')->nullable();
            $table->string('taxi_medical')->nullable();
            $table->string('assessment')->nullable();
            $table->string('location')->nullable();
            $table->date('date')->nullable();
            $table->string('time')->nullable();
            $table->integer('price')->nullable();
            $table->string('status')->default('pending')->nullable(); // Example statuses: pending, confirmed, cancelled
            $table->string('payment_method')->nullable(); // Example methods: cash, card, online
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
