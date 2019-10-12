<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableParcelles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcelles', function (Blueprint $table) {
            $table->increments('id');
            $table->double('superficie');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('image');
            $table->integer('cooperation_id')->unsigned();
            $table->foreign('cooperation_id')
                ->references('id')
                ->on('cooperations')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
        Schema::dropIfExists('parcelles');
    }
}
