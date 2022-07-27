<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Create table products
     * PHP Version 8.1
     *
     * @category Migration
     * @package  practice
     * @author   José Luis Martínez <jose_martinezri@hotmail.com>
     * @license  proprietary software
     * @link     ***
     * @since    1.1.0
     */

    public function up()
    {
        Schema::Create('user_domicilios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index(); 
            $table->string('domicilio');
            $table->integer('numero_exterior');
            $table->string('colonia');
            $table->integer('CP');
            $table->string('ciudad');
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
        Schema::dropIfExists('user_domicilios');
    }

};
