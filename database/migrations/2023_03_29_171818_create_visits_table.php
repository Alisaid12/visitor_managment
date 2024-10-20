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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->unsignedBigInteger('id_visiteur');
            $table->unsignedBigInteger('responsable_id');
            $table->string('objet_visite');
            $table->text('description')->nullable();
            $table->text('plan_visit_prochaine')->nullable();
            $table->dateTime('date_visit_prochaine')->nullable();

            $table->foreign('id_visiteur')->references('id')->on('visiteurs')->onDelete('cascade');
            $table->foreign('responsable_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();

            
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};