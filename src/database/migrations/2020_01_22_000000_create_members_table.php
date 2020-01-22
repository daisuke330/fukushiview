<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('member_id', 30);
            $table->string('email', 100);
            $table->string('nickname', 20);
            $table->string('last_name', 20)->nullable();
            $table->string('first_name', 20)->nullable();
            $table->char('gender_code', 2);
            $table->char('age_code')->references('id')->on('offices');
            $table->string('password', 100);
            $table->datetime('created_at');
            $table->datetime('updated_at');
            $table->foreign('member_id')->references('member_id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
