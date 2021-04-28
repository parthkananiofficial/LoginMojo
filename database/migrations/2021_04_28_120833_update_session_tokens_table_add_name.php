<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSessionTokensTableAddName extends Migration
{
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('session_tokens', 'name')) {
            Schema::table('session_tokens', function (Blueprint $table) {
                $table->string('name',25)->after("mobile")->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('session_tokens', 'name')) {
            Schema::table('session_tokens', function (Blueprint $table) {
                $table->dropColumn('name');
            });
        }
    }
}
