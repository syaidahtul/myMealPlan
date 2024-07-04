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
        Schema::create('recipe_ingredients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('recipe_id')->references('id')->on('recipes');
            $table->foreignUuid('ingredient_id')->references('id')->on('ingredients');
            $table->string('name');
            $table->decimal('quantity',8,2);
            $table->string('unit');
            $table->string('part')->comment('Contoh Bahan Kisar/Perapan/Sambal');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['recipe_id','ingredient_id','part'],'uq_recipe_ingredient');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe_ingredients');
    }
};
