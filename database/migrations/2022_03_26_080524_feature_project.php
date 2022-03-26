<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FeatureProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features_projects', function (Blueprint $table) {
            $table->integer('features_id')->unsigned();
            $table->integer('projects_id')->unsigned();
            $table->primary(['features_id', 'projects_id']);
            $table->foreign('features_id')->references('id')->on('features')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('projects_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('features_projects');
    }
}
