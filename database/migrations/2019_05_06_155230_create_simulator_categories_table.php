<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimulatorCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simulator_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class')->nullable();
            $table->string('title')->nullable();
            $table->text("image")->nullable();
            $table->boolean('active')->default(true);
            $table->integer("simulator_discipline_id")->nullable();
            $table->integer("created_by")->nullable();;
            $table->integer("modified_by")->nullable();;
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
        Schema::dropIfExists('simulator_categories');
    }
}
