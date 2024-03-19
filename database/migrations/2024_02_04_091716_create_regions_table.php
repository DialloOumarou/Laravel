<?php

use App\Models\Region;
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
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('nom_region')->unique();
            $table->timestamps();
        });

        Schema::table('departements',function(Blueprint $table){
            $table->foreignIdfor(Region::class)->nullable()->constrained()->cascadeOrDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regions');

        
        Schema::table('departements',function(Blueprint $table){
            $table->dropForeignIdfor(Region::class)->nullable()->constrained()->cascadeOrDelete();
        });
    }
};
