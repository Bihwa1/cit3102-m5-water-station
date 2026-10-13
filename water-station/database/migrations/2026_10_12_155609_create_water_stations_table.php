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
        Schema::create('water_stations', function (Blueprint $table) {
            $table->id();
            $table->integer('Customer_id');
            $table->string('Customer_name');
            $table->string('Water_type');
            $table->integer('Total_volume_delivered');
            $table->string('Payment');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('water_stations');
    }
};
