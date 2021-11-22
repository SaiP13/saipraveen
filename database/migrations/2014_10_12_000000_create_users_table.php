<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name');
            $table->string('email')->unique();
            $table->bigInteger('mobile')->unique();
            $table->string('password');
            $table->text('photo')->nullable($value = true);
            $table->smallInteger('role'); //1-super admin , 2- noraml users
            $table->smallInteger('status')->default(1); // 1- active, 0- in active
            $table->smallInteger('is_deleted')->default(0); // 1-deleted , 0-not deleted
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
        Schema::dropIfExists('users');
    }
}
