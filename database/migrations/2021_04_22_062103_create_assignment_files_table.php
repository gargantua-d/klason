<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_user');
            $table->integer('id_assignment');
            // $table->string('name');
            // $table->string('assignment');
            // $table->string('course');
            // $table->string('assignment_description');
            $table->string('assignment_file');
            $table->timestamps('send_at');

            $table->integer('status');
            $table->string('created_by');
            $table->string('updated_by');
            $table->bool('deleted');
            $table->text('notes');
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
        Schema::dropIfExists('assignment_files');
    }
}
