<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->longText('descripition')->nullable();
            $table->longText('content')->nullable();
            $table->string('image')->nullable();
            $table->string('city_name')->nullable();
            $table->string('location')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('number_of_bedrooms')->nullable();
            $table->string('number_of_bathrooms')->nullable();
            $table->string('number_of_floors')->nullable();
            $table->string('square')->nullable();
            $table->string('marala')->nullable();
            $table->string('currency')->nullable();
            $table->string('price')->nullable();
            $table->string('feature')->nullable();
            $table->string('property_status')->nullable();
            $table->string('moderation_status')->nullable();
            $table->string('category')->nullable();
            $table->string('project_id')->nullable();
            $table->string('agent_id')->nullable();
            $table->string('agency_id')->nullable();
            $table->string('property_map')->nullable();
            $table->string('price_plan')->nullable();
            $table->string('video')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
