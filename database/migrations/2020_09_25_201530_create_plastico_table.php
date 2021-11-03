<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlasticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plastico', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('texto', 200);
            $table->double('precio');
            $table->string('clave', 10);
           // $table->string('empresa', 50);
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
        Schema::dropIfExists('plastico');
    }
}
