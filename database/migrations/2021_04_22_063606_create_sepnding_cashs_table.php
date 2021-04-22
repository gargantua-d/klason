<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSepndingCashsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spending_cashs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_user');
            $table->string('name');
            $table->timestamps('date');
            $table->integer('total_cash');
            $table->string('product');
            $table->integer('qty');
            $table->integer('price');
            $table->integer('total_price');

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
        Schema::dropIfExists('spending_cashs');
    }
}
