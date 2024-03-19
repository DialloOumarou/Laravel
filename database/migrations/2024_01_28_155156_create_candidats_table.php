<?php

use App\Models\Candidat;
use App\Models\Resultat;
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
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->String('nom');
            $table->String('parti');
            $table->timestamps();
        });

        Schema::table('resultats',function(Blueprint $table){
            $table->foreignIdfor(Candidat::class)->nullable()->constrained()->cascadeOrDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidats');
    }
};
