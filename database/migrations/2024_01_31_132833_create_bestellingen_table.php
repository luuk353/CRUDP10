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
        Schema::create('bestellingens', function (Blueprint $table) {
            $table->id();
            $table->string('itemName');
            $table->integer('user_id');
            $table->double('price', 6,2);
            $table->integer('amount');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bestellingen');
    }
};
