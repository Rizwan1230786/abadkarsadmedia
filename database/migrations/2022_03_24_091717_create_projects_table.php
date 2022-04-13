<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
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
            $table->string('title')->nullable();
            $table->string('url_slug')->nullable();
            $table->longtext('detail')->nullable();
            $table->longText('page_content')->nullable();
            $table->string('image')->nullable();
            $table->string('city_name')->nullable();
            $table->string('location')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('num_of_blocks')->nullable();
            $table->string('num_of_floors')->nullable();
            $table->string('num_of_flats')->nullable();
            $table->string('lowest_price')->nullable();
            $table->string('max_price')->nullable();
            $table->string('currency_name')->nullable();
            $table->string('commercial_area_min')->nullable();
            $table->string('commercial_area_max')->nullable();
            $table->string('residential_area_min')->nullable();
            $table->string('residential_area_max')->nullable();
            $table->string('feature')->nullable();
            $table->string('category')->nullable();
            $table->string('investor_name')->nullable();
            $table->string('status')->nullable();
            $table->string('expire_date')->nullable();
            $table->string('Open_sell_date')->nullable();
            $table->string('agent_id')->nullable();
            $table->string('agency_id')->nullable();
            $table->string('project_map')->nullable();
            $table->string('price_plan')->nullable();
            $table->string('video')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('head_title')->nullable();
            $table->string('meta_description')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
