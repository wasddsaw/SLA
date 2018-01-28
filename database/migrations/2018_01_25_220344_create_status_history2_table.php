<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusHistory2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_history', function (Blueprint $table) {
            $table->integer('id');
            $table->string('remarks_hauler')->nullable();
            $table->string('remarks_foe')->nullable();
            $table->integer('status');
            $table->string('time');
            $table->integer('roadtanker_id');
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
        Schema::dropIfExists('status_history2');
    }
}
