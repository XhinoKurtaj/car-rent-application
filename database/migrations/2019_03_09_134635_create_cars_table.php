<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('model',255);
            $table->string('type',255);
            $table->string('engine_size',255);
            $table->string('fuel_economy',255);
            $table->decimal('rent_price');
            $table->string('condition_check',255);
            $table->boolean('availability');
            $table->unsignedInteger('photo_id')->nullable();
            $table->date('created_at');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('photo_id')
                ->references('id')
                ->on('images')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
