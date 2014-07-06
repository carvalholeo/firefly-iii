<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreferencesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'preferences', function (Blueprint $table) {
                $table->increments('id');
                $table->timestamps();
                $table->integer('user_id')->unsigned();
                $table->string('name');
                $table->text('data');

                // connect preferences to users
                $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('preferences');
    }

}