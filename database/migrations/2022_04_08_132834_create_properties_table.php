<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('location_id');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->unsignedBigInteger('bedroom')->nullable();
            $table->unsignedBigInteger('bathroom')->nullable();
            $table->unsignedBigInteger('area')->nullable();
            $table->unsignedBigInteger('garage')->nullable();
            $table->longText('description')->nullable();
            $table->string('video')->nullable();
            $table->unsignedBigInteger('type')->default('1')->comment('3=apartment,1=villas,2=house');
             $table->unsignedBigInteger('sale_status')->default('1')->comment('1=sale,2=rent');
            $table->string('price')->nullable();
            $table->string('feature_image')->nullable();



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
        Schema::dropIfExists('properties');
    }
}
