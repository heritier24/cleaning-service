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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clientID');
            $table->unsignedBigInteger('premiseID');
            $table->string('date_bills');
            $table->string('amount');
            $table->string('status');  // Unpaid , Paid 
            $table->timestamps();

            $table->foreign('clientID')->references('id')->on('clients')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('premiseID')->references('id')->on('premises')
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
        Schema::dropIfExists('bills');
    }
};
