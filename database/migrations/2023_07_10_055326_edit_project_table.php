<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {

            $table->string('facilities')->nullable();
            $table->string('commercial')->nullable();
            $table->string('investment')->nullable();
            $table->string('government')->nullable();
            $table->string('educational')->nullable();
            $table->string('trade')->nullable();
            $table->string('gardens')->nullable();
            $table->string('mosque')->nullable();
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
};
