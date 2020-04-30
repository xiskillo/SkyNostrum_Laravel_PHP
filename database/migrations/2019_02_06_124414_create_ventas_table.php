<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->unsignedInteger('clientes_id')->nullable();
            $table->foreign('clientes_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->unsignedInteger('productos_id')->nullable();
            $table->foreign('productos_id')->references('id')->on('productos')->onDelete('cascade');         
            $table->unsignedInteger('cantidad')->nullable();
            $table->text('observaciones')->nullable();
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
        Schema::dropIfExists('ventas');
    }
}
