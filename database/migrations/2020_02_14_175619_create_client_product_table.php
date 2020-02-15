<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_product', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('product_id');
            
            $table->integer('cantidad');
            $table->integer('total');
            $table->integer('precio');

            //Relaciones 
            $table->foreign('client_id')->references('id')->on('clients')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
        Schema::dropIfExists('client_product');
    }
}
