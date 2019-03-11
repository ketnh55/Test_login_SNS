<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToSns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sns_accounts', function (Blueprint $table) {
            //
            $table->string('profile_image')->nullable();
            $table->string('description')->nullable();
//            $table->integer('user_id')->primary()->change();
//            $table->integer('user_id')->autoIncrement()->change();
            $table->string('followers')->nullable();
            $table->string('friends')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sns_accounts', function (Blueprint $table) {
            //
        });
    }
}
