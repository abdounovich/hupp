<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicaments', function (Blueprint $table) {
            $table->id();
            $table->text('nom');
            $table->text('dci');
            $table->text("dosage");
            $table->text("nett");
            $table->text("sol");
            $table->text("tox");
            $table->text("dose_min");
            $table->text("dose_max");
            $table->text("classe");
            $table->text("dose_ther");
            $table->text("total");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicaments');
    }
}
