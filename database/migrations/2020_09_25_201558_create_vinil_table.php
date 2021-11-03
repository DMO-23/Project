<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinil', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('texto', 200);
            $table->double('precio');
            $table->string('clave', 10);
            $table->date('expiracion');
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
        Schema::dropIfExists('vinil');
    }
}
