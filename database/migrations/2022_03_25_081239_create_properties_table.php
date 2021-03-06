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
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('url_slug')->nullable();
            $table->string('type')->nullable();
            $table->longText('descripition')->nullable();
            $table->longText('content')->nullable();
            $table->string('image')->nullable();
            $table->string('city_name')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('number_of_bedrooms')->nullable();
            $table->string('number_of_bathrooms')->nullable();
            $table->string('number_of_floors')->nullable();
            $table->string('area_size')->nullable();
            $table->string('unit')->nullable();
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
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('head_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('status')->nullable();
            $table->string('occupency')->nullable();
            $table->string('rental_contact_period')->nullable();
            $table->string('rental_contact_period_length')->nullable();
            $table->string('monthly_rent')->nullable();
            $table->string('security_deposit')->nullable();
            $table->string('security_deposit_number_of_month')->nullable();
            $table->string('advance_rent')->nullable();
            $table->string('advance_rent_number_of_month')->nullable();
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
