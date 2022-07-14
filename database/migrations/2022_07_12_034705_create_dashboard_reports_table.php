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
        Schema::create('dashboard_reports', function (Blueprint $table) {
            $table->id();
            $table->string('name_institusi');
            $table->string('name_project');
            $table->string('name_am');
            $table->integer('hps');
            $table->string('status_approve')->comment("y:Approve,n:Reject");
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
        Schema::dropIfExists('dashboard_reports');
    }
};
