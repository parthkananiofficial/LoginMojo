<?php

use App\Models\SessionToken;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_tokens', function (Blueprint $table) {
            $table->id();
            $table->string("token",50);
            $table->string("user_id");
            $table->string("website_session",64);
            $table->string("mobile",15)->nullable();
            $table->string("status",15)->default(SessionToken::STATUS_CREATED)->nullable();
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
        Schema::dropIfExists('session_tokens');
    }
}
