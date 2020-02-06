<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkelbimuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skelbimu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->decimal('cost', 5, 2);
            $table->string('img')->nullable();
            $table->longText('info');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('location');
            $table->integer('cat_id');
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
        Schema::dropIfExists('skelbimu');
    }
}
