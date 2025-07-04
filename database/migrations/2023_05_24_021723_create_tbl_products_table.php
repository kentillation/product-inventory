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
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8 ,2);
            $table->string('description');
            $table->foreignId('unit_id')->contrained('tbl_units');
            $table->boolean('availability');
            $table->integer('quantity');
            $table->foreignId('category_id')->contrained('tbl_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_products');
    }
};
