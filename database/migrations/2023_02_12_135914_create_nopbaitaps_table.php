<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNopbaitapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nopbaitaps', function (Blueprint $table) {
            $table->id();
            $table->string('id_giaobaitap');
            $table->string('ten_giaobaitap');
            $table->string('filebaitap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nopbaitaps');
    }
}
