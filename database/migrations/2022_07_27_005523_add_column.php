<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('user_domicilios', 'fecha_nacimiento')) {
            Schema::table('user_domicilios', function (Blueprint $table) {
                //Create fecha_nacimiento column
                $table->date('fecha_nacimiento')->after('ciudad');
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
        if (Schema::hasColumn('user_domicilios', 'fecha_nacimiento')) {
            Schema::table('user_domicilios', function (Blueprint $table) {
                // Delete column fecha_nacimiento
                $table->dropColumn(['fecha_nacimiento']);
            });
        }        
    }
}
