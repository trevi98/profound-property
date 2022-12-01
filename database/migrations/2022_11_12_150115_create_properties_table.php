<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->text('description');
            $table->text('cover');
            $table->text('location_link')->nullable();
            $table->text('video')->nullable();
            $table->integer('bathrooms')->default(0);
            $table->integer('bedrooms')->default(0);
            $table->string('permit_number')->nullable();
            $table->string('property_name')->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('sold')->default(false);
            $table->string('area');
            $table->string('category')->default('rent');
            $table->foreignId('user_id')->nullOnDelete();
            $table->foreignId('location_id')->nullOnDelete();
            $table->foreignId('type_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('size_id')->constrained()->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
