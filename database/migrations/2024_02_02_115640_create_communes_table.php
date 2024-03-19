<?php

use App\Models\Commune;
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
        Schema::create('communes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_commune')->unique();
            // $table->integer('code_commune')->unique();
            // $table->unsignedBigInteger('code_depart');
            // $table->unsignedBigInteger('code_depart');
            $table->timestamps();
        });

        Schema::table('centres',function(Blueprint $table){
            $table->foreignIdfor(Commune::class)->nullable()->constrained()->cascadeOrDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communes');
    }
};
