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
            Schema::create('suivie_visiteurs', function (Blueprint $table) {
                $table->id();
                $table->text('compte_rendue');
                $table->text('plan_visit_prochaine');
                $table->dateTime('date_visit_prochaine');
                $table->foreignId('visiteur_id')->constrained()->onDelete('cascade');
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->foreignId('visit_id')->nullable()->constrained()->onDelete('cascade');

                $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('suivie_visiteurs', function (Blueprint $table) {
            $table->dropForeign(['visiteur_id']);
            $table->dropForeign(['user_id']);
            $table->dropForeign(['visit_id']);
        });
    
        Schema::dropIfExists('suivie_visiteurs');
    }
};