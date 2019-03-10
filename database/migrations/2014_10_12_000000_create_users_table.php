<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name', 255);
            $table->string('email')->unique();
            $table->string('password', 255);
            $table->unsignedInteger('photo_id')->nullable();
            $table->string('type')->default('default');
            $table->rememberToken();
            $table->timestamps();

//            $table->foreign('photo_id')
//                ->references('id')
//                ->on('images')
//                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
