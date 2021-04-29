<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_user');
            $table->string('course');
            $table->string('name');
            $table->string('assignment');
            $table->string('description');
            $table->date('assignment_created_at');
            $table->string('deadline');
            $table->string('question_file')->nullable();

            $table->integer('status');
            $table->string('created_by');
            $table->string('updated_by');
            $table->boolean('deleted');
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
        Schema::dropIfExists('assignments');
    }
}
