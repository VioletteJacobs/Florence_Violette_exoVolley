<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string("name", 50);
            $table->string("firstname", 50);
            $table->integer("age");
            $table->string("phone", 50);
            $table->string("email", 50);
            $table->string("gender", 50);
            $table->string("country", 50);
            $table->string("role", 50);
            $table->unsignedBigInteger("team_id")->nullable();
            $table->foreign("team_id")->references("id")->on("teams")->nullable();
            $table->unsignedBigInteger("photo_id");
            $table->foreign("photo_id")->references("id")->on("photos");
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
        Schema::dropIfExists('players');
    }
}
