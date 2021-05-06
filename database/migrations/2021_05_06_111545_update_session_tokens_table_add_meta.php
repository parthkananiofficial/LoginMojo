<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSessionTokensTableAddMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('session_tokens', 'meta')) {
            Schema::table('session_tokens', function (Blueprint $table) {
                $table->string('meta',1000)->after("name")->nullable();
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
        if (Schema::hasColumn('session_tokens', 'meta')) {
            Schema::table('session_tokens', function (Blueprint $table) {
                $table->dropColumn('meta');
            });
        }
    }
}
