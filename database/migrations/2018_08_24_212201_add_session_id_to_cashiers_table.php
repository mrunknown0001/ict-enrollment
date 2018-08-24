<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSessionIdToCashiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cashiers', function (Blueprint $table) {
            $table->text('session_id')
                ->after('remember_token')
                ->nullable()
                ->default(null)
                ->comment('Stores the id of the user session');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cashiers', function (Blueprint $table) {
            $table->dropColumn('session_id');
        });
    }
}