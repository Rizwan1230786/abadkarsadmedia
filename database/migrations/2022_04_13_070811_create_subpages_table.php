<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subpages', function (Blueprint $table) {
            $table->id();
            $table->char('page_title', 100)->nullable();
            $table->string('head_title', 100)->nullable();
            $table->string('website_title', 100)->nullable();
            $table->string('meta_title', 100)->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description', 1000)->nullable();
            $table->char('url_slug', 150)->nullable();
            $table->longText('page_content')->nullable();
            $table->smallInteger('page_rank')->default(0);
            $table->boolean('is_publish')->nullable()->default(false);
            $table->boolean('is_home')->nullable()->default(false);
            $table->integer('parent_id')->nullable()->index('parent_id');
            $table->boolean('show_in_toppanel')->default(false);
            $table->boolean('show_in_footer')->default(false);
            $table->string('short_description', 1000)->nullable();
            $table->string('icon', 1000)->nullable();
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
        Schema::dropIfExists('subpages');
    }
}
