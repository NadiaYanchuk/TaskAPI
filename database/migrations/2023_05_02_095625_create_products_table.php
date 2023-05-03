<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->text('description')->nullable();
            $table->string('image', 255);
            $table->decimal('price', 6, 2);
            $table->smallInteger('quantity');
            $table->string('brand', 30)->nullable();
            $table->enum('mark', ['popular', 'top'])->nullable();
            $table->unsignedTinyInteger('category_id');
            $table->boolean('status')->default(0)->nullable();
            $table->decimal('discount', 2, 2)->nullable();
            $table->string('material', 255)->nullable();
            $table->string('model', 30)->nullable();
            $table->string('color', 30)->nullable();
            $table->string('meta_title', 50);
            $table->string('meta_description', 50);
            $table->boolean('noindex')->default(0)->nullable();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};