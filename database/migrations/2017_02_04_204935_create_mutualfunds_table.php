<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMutualfundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutual_funds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('scheme');
            $table->string('nominee');
            $table->string('relationship_with_nominee');
            $table->double('balance_amount');
            $table->date('acquired_date');
            $table->double('investment_amount');
            $table->double('current_value');
            $table->integer('customer_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('mutual_funds', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mutual_funds');
    }
}
