<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanningsTable extends Migration
{
    public function up()
    {
        Schema::create('plannings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->enum('type', ['jour de travail', 'jour de congé', 'jour de vacances', 'autre'])->default('jour de travail');
            // Ajoutez d'autres champs pertinents au besoin
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('plannings');
    }
}
