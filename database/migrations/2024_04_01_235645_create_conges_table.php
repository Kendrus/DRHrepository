<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongesTable extends Migration
{
    public function up()
    {
        Schema::create('conges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('type');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('statut')->default('En attente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('conges');
    }
}
