<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailtransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailtrans', function (Blueprint $table) {
            $table->string('transaction_id');
            $table->string('ProdName');
            $table->integer('ProdQuantity');
            $table->float('ProdPrice');
            $table->float('SubTot');
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
        Schema::dropIfExists('detailtrans');
    }
}
