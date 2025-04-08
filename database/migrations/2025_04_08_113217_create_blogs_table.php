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
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id_blog');
            $table->string('titre_blog');
            $table->string('image_blog');
            $table->string('contenu_blog', 260);
            $table->date('datePublication_blog');
            $table->unsignedInteger('id_employee');
            $table->unsignedInteger('id_categorie');
            $table->foreign('id_employee')->references('id_employee')->on('employees');
            $table->foreign('id_categorie')->references('id_categorie')->on('categories');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
