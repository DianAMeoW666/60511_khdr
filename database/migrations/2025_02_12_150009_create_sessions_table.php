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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('id_cosmetologist')->references('id')->on('cosmetologists')->onDelete('cascade');
            $table->dateTime('start_date_and_time');
            $table->dateTime('end_date_and_time');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
