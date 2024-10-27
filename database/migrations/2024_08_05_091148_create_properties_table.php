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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->string('status')->default('rent');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('size');
            $table->double('price');
            $table->text('address');
            $table->string('state');
            $table->string('zipcode');
            $table->string('country');
            $table->string('agent')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
