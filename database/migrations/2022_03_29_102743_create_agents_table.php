<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('office_address')->nullable();
            $table->string('office_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('fax_number')->nullable();
            $table->longText('descripition')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->string('agency')->nullable();
            $table->string('city_name')->nullable();
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
        Schema::dropIfExists('agents');
    }
}
