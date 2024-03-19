<?php

use App\Models\Departement;
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
        Schema::create('departements', function (Blueprint $table) {
            $table->id();
            $table->string('nom_depart')->unique();
            //$table->unsignedBigInteger('code_region');
            $table->timestamps();
            //$table->foreign('code_region')->references('id')->on('regions');
        });

        Schema::table('communes',function(Blueprint $table){
            $table->foreignIdfor(Departement::class)->nullable()->constrained()->cascadeOrDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departements');
    }
};
