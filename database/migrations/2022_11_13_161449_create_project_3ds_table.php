<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProject3dsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_3ds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_size_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->text('file');
            $table->boolean('pdf')->default(false);
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
        Schema::dropIfExists('project_3ds');
    }
}
