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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 100);
            $table->string('stazione_di_partenza', 250);
            $table->string('stazione_di_arrivo', 250);
            $table->date('data_di_partenza');
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->string('codice_treno', 100);
            $table->integer('numero_carrozze')->nullable(true);
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
