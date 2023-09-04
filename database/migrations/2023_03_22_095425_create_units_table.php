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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable() ;
            $table->string('price')->nullable() ;
            $table->string('area')->nullable() ;
            $table->string('beds')->nullable() ;
            $table->string('long')->nullable() ;
            $table->string('lat')->nullable() ;
            $table->string('location_in_project')->nullable() ;
            $table->string('state')->nullable() ;
            $table->string('delivery_date')->nullable() ;
            $table->string('construction_code')->nullable() ;
            $table->string('parking_code')->nullable() ;
            $table->string('tenant_id')->nullable() ;
            $table->unsignedBigInteger('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->unsignedBigInteger('phase_id')->references('id')->on('phases')->onDelete('cascade');
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
        Schema::dropIfExists('units');
    }
};
