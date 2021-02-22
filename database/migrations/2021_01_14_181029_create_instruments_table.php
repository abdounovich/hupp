<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instruments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("nom");
            $table->text("ref");
            $table->text("date_proch");
            $table->text("date_dernier");
            $table->text("perio_actu");
            $table->text("perio_calcul");
            $table->unsignedBigInteger("category_id");
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade'); 
            $table->text("c1");
            $table->text("c2");
            $table->text("c3");
            $table->text("c4");
            $table->text("c5");
            $table->text("c6");
            $table->text("c7");
            $table->text("c8");
            $table->text("c9");
            $table->text("type");
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
        Schema::dropIfExists('instruments');
    }
}
