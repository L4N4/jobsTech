<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->increments('idVacancy');
            $table->string('title');
            $table->integer('experienceRequired');
            $table->double('salary');
            $table->string('location');
            $table->string('currency');
            $table->mediumText('descriptionVacancy');
            $table->string('state');
            $table->date('endDate');
            
            $table->unsignedInteger('idCategoryVacancy');
            $table->foreign('idCategoryVacancy')->references('idCategoryVacancy')->on('category_vacancies');
            
            $table->unsignedInteger('idRecruiter');
            $table->foreign('idRecruiter')->references('idRecruiter')->on('recruiters');

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
        Schema::dropIfExists('vacancies');
    }
}
