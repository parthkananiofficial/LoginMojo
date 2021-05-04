<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMojoSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mojo_sessions', function (Blueprint $table) {
            $table->id();
            $table->string("website_session",64)->nullable();
            $table->string("token",50)->nullable();
            $table->string("mobile",20)->nullable();
            $table->string("name",25)->nullable();
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
        Schema::dropIfExists('mojo_sessions');
    }
}
