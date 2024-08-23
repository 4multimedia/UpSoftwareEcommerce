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
        Schema::create('ecommerce_categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->integer('_lft')->default(0);
            $table->integer('_rgt')->default(0);
            $table->json('name');
            $table->json('slug');
            $table->json('excerpt')->nullable();
            $table->json('description')->nullable();
            $table->json('data')->nullable();

            $table->foreign('parent_id')->references('id')->on('ecommerce_categories');
            $table->index(['parent_id', '_lft', '_rgt'], 'ecommerce_category_nested_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecommerce_categories');
    }
};
