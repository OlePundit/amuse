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
            $table->unsignedBigInteger('user_id')->nullable()->default('0');
            $table->index('user_id')->nullable()->default('0');
            $table->string('name_of_parent');
            $table->string('name_of_child');
            $table->string('email');
            $table->string('phone');
            $table->string('school');
            $table->string('dob');
            $table->string('booking_date')->nullable()->default('0');
            $table->string('payment');
            $table->string('contact_person');
            $table->string('allergies')->nullable()->default('0');
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
