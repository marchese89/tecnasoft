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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('point_id')->constrained()->cascadeOnDelete();
            $table->integer('price');//prezzo
            $table->integer('effort');//costo
            $table->boolean('purchasable')->default(true);
            $table->integer('type');// 0 = esami di laboratorio, 1 = attività ambulatoriali, 2 = consulenze specialistiche
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
