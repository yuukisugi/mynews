<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); // プロフィールを保存するカラム
            $table->string('gender')->nullable();  //プロフィールの本文を保存するカラム
            $table->string('hobby')->nullable();
            $table->string('introduction')->nullable();
            //$table->string('image_path')->nullable();  // ->nullableは空のコメントを許可するもの
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
        Schema::dropIfExists('profiles');
    }
}
