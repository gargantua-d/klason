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
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('nisn')->unique()->nullable();
            $table->integer('nis')->unique()->nullable();
            $table->integer('nip')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('no_hp');
            $table->integer('no_hp_ortu')->nullable();
            $table->string('address');
            $table->integer('cash');
            $table->string('role')->nullable();
            $table->string('level');

            $table->integer('status');
            $table->string('created_by');
            $table->string('updated_by');
            $table->boolean('deleted');
            $table->text('notes');
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
