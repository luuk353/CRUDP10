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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_naam');
            $table->text('event_beschrijving');
            $table->text('event_locatie');
            $table->date('begin_datum')->nullable();
            $table->date('eind_datum')->nullable();
            $table->time('begin_tijd')->nullable()->format('H:i');
            $table->time('eind_tijd')->nullable()->format('H:i');
            $table->string('event_foto')->nullable();
            $table->integer('event_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
