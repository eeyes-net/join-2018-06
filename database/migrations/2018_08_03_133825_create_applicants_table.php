<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->string('gender');
            $table->timestamp('birthday');
            $table->text('cellphone');
            $table->text('college');
            $table->text('class');
            $table->string('qq');
            $table->string('first');
            $table->string('second');
            $table->string('third');
            $table->text('method');
            $table->text('wanna_say');
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
        Schema::dropIfExists('applicants');
    }
}
