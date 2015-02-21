<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectCategoriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('category_id')->unsigned();
            $table->text('description');
            $table->date('started_at');
            $table->date('ended_at');
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('project_categories')
                ->onDelete('cascade');
        });

        Schema::create('project_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('is_active');
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
        Schema::drop('project_categories');

        Schema::drop('projects');
    }

}
