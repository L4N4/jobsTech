<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechsVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techs_vacancies', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('technology_id');
            $table->foreign('technology_id')->references('id')->on('technologies');
            
            $table->unsignedBigInteger('vacancy_id');
            $table->foreign('vacancy_id')->references('id')->on('vacancies');

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
        Schema::dropIfExists('techs_vacancies');
    }
}
