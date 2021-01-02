<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('users_id');
            $table->string('tittle');
            $table->string('slug');
            $table->string('sdescription');
            $table->string('description');
            $table->string('status');
            $table->string('city');
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('ads');
    }
}
