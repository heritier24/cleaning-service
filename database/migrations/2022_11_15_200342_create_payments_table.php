<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clientID');
            $table->unsignedBigInteger('billsID');
            $table->string('amount');
            $table->string('remaining');
            $table->string('date_paid');
            $table->string('status');
            $table->timestamps();

            $table->foreign('clientID')->references('id')->on('clients')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('billsID')->references('id')->on('bills')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
