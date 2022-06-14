<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubpackgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subpackges', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('packges_id');
            $table->foreign('packges_id')->references('id')->on('pakges')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->string('detail')->nullable();
            $table->string('image')->nullable();
            $table->string('vedio')->nullable();
            $table->string('status')->default(0);
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
        Schema::dropIfExists('subpackges');
    }
}
