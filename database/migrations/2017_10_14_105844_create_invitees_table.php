<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInviteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->index()->nullable();
            $table->string('hash', 8);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->nullable();
            $table->boolean('invited_reception');
            $table->boolean('at_reception')->nullable();
            $table->boolean('invited_dinner');
            $table->boolean('at_dinner')->nullable();
            $table->integer('dinner_choice')->index()->nullable();
            $table->boolean('invited_party');
            $table->boolean('at_party')->nullable();
            $table->text('comments')->nullable();
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
        Schema::drop('invitees');
    }
}
