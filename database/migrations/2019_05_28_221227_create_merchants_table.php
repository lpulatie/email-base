<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64)->unique();
            $table->string('slug', 64)->unique();
            $table->string('description', 512)->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }
}
