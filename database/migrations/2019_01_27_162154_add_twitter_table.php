<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTwitterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('twitter_sns_accounts', function (Blueprint $table) {
            //
            $table->integer('id')->autoIncrement()->primary();
            $table->string('profile_image')->nullable();
            $table->string('description')->nullable();
            $table->string('follower_count')->nullable();
            $table->string('friend_count')->nullable();
            $table->string('name')->nullable();
            $table->string('screen_name')->nullable();
            $table->string('status_count')->nullable();
            $table->string('listed_count')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
