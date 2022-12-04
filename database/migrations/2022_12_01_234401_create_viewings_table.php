<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // message:text
        // type: string
        // location _link: text null
        // assigned: bool
        // date: date
        // FK property_id:int null
        // FK type_id:int null
        // FK client_id:int
        // FK agent_id:int
        Schema::create('viewings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('type_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('client_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('agent_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->text('message')->nullable();
            $table->string('type')->nullable();
            $table->text('location_link')->nullable();
            $table->boolean('assigned');
            $table->date('date');
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
        Schema::dropIfExists('viewings');
    }
}
