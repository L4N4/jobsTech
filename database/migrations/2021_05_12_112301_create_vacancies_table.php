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

            // $table->increments('idVacancy');
            $table->id();
            $table->string('title');
            $table->integer('experienceRequired');
            $table->double('salary');
            $table->string('currency');
            $table->mediumText('descriptionVacancy');
            $table->string('state');
            $table->date('endDate');

            $table->unsignedBigInteger('recruiter_id');
            $table->foreign('recruiter_id')->references('id')->on('recruiters');
            
            $table->unsignedBigInteger('categoryvacancy_id');
            $table->foreign('categoryvacancy_id')->references('id')->on('category_vacancies');

            $table->unsignedBigInteger('countryvacancy_id');
            $table->foreign('countryvacancy_id')->references('id')->on('country_vacancies');
            

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
