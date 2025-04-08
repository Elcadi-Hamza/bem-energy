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
        Schema::create('appartenir', function (Blueprint $table) {
            $table->unsignedInteger('id_projet');
            $table->unsignedInteger('id_service');
            $table->primary(['id_projet', 'id_service']);
            $table->foreign('id_projet')->references('id_projet')->on('projets');
            $table->foreign('id_service')->references('id_service')->on('services');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartenir');
    }
};
