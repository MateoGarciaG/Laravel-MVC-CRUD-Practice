<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("nombre");
            $table->string("raza");
            $table->boolean("isVacunado");
            $table->date("fecha_nacimiento");
            $table->integer("edad");
            $table->double("price", 8, 2);
            $table->enum('tamanyo', ['little', 'big']);
            $table->text("descripcion");
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->useCurrent();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dogs');
    }
}
