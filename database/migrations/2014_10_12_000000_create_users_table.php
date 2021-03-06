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
            $table->id();
            /* $table->string('name', 50); */
            $table->string('last_name', 50);
            $table->string('first_name', 50);
            $table->string('middle_name', 50);
            $table->string('phone', 20);
            $table->string('user_type', 20);
            $table->string('email');
            $table->string('is_active', 1);
            $table->string('password');
            $table->string('last_edit_user_id');
            $table->rememberToken();
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
