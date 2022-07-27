<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Foreignkeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table(
            'user_domicilios',
            function ($table) {
                $table
                    ->foreign('user_id')
                    ->references('id')
                    ->on('users')->onDelete('cascade');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'user_domicilios',
            function (Blueprint $table) {
                $table->dropForeign(['user_id']);
            }
        );
    }
}
