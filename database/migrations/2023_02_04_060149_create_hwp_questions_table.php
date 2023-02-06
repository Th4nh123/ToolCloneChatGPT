<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHwpQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hwp_questions', function (Blueprint $table) {
            $table->id();
            $table->string("tien_to",245)->nullable()->default('');
            $table->string("key_cha",255)->default('');
            $table->string("hau_to",245)->nullable()->default('');
            $table->integer("id_cam")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hwp_questions');
    }
}
