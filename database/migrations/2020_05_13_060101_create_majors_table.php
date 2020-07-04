<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('majors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('route_map');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('faculty_id')->nullable();
            // $table->foreign('faculty_id')->references('id')->on('faculties');
            $table->timestamps();
        });

        // Schema::table('majors', function (Blueprint $table) {

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('majors');
    }
}
