<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHwpAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hwp_answers', function (Blueprint $table) {
            $table->id();
            $table->string("answer",245)->nullable()->default('');
            $table->integer("id_key")->nullable();
            $table->integer("id_cam")->nullable();
            $table->boolean("check")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hwp_answers');
    }
}
