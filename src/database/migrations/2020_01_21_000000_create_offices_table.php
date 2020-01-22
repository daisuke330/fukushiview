<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('office_number', 30)->nullable();
            $table->string('office_name', 30);
            $table->char('category_id', 3);
            $table->string('address', 255);
            $table->string('phone_number', 20)->nullable();
            $table->string('fax_number', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('url', 100)->nullable();
            $table->string('photo_path', 100)->nullable();
            $table->unsignedInteger('votes')->default(0);
            $table->datetime('created_at');
            $table->datetime('updated_at');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
}
