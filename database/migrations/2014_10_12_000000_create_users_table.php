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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phone')->nullable();
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->date('dob')->nullable();
            $table->string('course')->nullable();
            $table->string('dept')->nullable();
            $table->text('permadd')->nullable();
            $table->text('tempadd')->nullable();
            $table->integer('tenpassyear')->unsigned()->nullable();;
            $table->float('tenpercentage')->unsigned()->nullable();;
            $table->integer('twelvepassyear')->unsigned()->nullable();
            $table->float('twelvepercentage')->unsigned()->nullable();
            $table->integer('lateralpassyear')->unsigned()->nullable();
            $table->float('lateralpercentage')->unsigned()->nullable();
            $table->float('cgpa',2,1)->nullable();
            $table->boolean('currarrear')->nullable();
            $table->boolean('histarrear')->nullable();
            $table->boolean('allclear')->nullable();
            $table->boolean('status')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
