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
        Schema::create('encaissers', function (Blueprint $table) {
            $table->id();
            $table->date('datedebut');
            $table->date('datefin');
            $table->integer('heureEncaisse');
            $table->timestamps();
            $table->foreignId('etudiants_id')->constrained('etudiants');
            $table->foreignId('caissiers_id')->constrained('caissiers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encaissers');
    }
};
