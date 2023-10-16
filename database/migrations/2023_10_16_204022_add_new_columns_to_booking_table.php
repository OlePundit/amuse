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
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('last_name');
            $table->string('child_last_name');
            $table->string('from')->nullable()->default('0');;
            $table->string('to')->nullable()->default('0');;
            $table->string('day2')->nullable()->default('0');;
            $table->string('day3')->nullable()->default('0');;
            $table->string('day4')->nullable()->default('0');;
            $table->string('day5')->nullable()->default('0');;
            $table->string('day6')->nullable()->default('0');;
            $table->string('day7')->nullable()->default('0');;
            $table->string('day8')->nullable()->default('0');;


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('child_last_name');
            $table->dropColumn('from');
            $table->dropColumn('to');
            $table->dropColumn('day2');
            $table->dropColumn('day3');
            $table->dropColumn('day4');
            $table->dropColumn('day5');
            $table->dropColumn('day6');
            $table->dropColumn('day7');
            $table->dropColumn('day8');
        });
    }
};
