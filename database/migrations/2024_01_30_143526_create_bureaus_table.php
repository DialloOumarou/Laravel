<?php

use App\Models\Bureau;
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
        Schema::create('bureaus', function (Blueprint $table) {
            $table->id();
            $table->string('num_bureau')->unique();
            $table->timestamps();
        });

        Schema::table('resultats',function(Blueprint $table){
            $table->foreignIdfor(Bureau::class)->nullable()->constrained()->cascadeOrDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bureaus');
    }
};
