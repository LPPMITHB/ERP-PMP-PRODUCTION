<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_activity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('name');
            $table->text('description');
            $table->string('type')->nullable();
            $table->integer('status')->default(1);
            $table->string('document_number')->nullable();
            $table->string('drawing')->nullable();
            $table->unsignedInteger('wbs_id')->nullable();
            $table->unsignedInteger('service_id')->nullable();
            $table->unsignedInteger('service_detail_id')->nullable();
            $table->unsignedInteger('vendor_id')->nullable();
            $table->float('area')->nullable();            
            $table->unsignedInteger('wbs_material_id')->nullable();
            $table->integer('planned_duration')->nullable();
            $table->date('planned_start_date')->nullable();
            $table->date('planned_end_date')->nullable();
            $table->integer('actual_duration')->nullable();
            $table->date('actual_start_date')->nullable();
            $table->date('actual_end_date')->nullable();
            $table->float('progress')->default(0);
            $table->float('weight')->nullable();
            $table->text('predecessor')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('branch_id');  
            $table->timestamps();

            $table->foreign('vendor_id')->references('id')->on('mst_vendor');
            $table->foreign('service_id')->references('id')->on('mst_service');
            $table->foreign('service_detail_id')->references('id')->on('mst_service_detail');
            $table->foreign('wbs_material_id')->references('id')->on('pro_wbs_material');
            $table->foreign('wbs_id')->references('id')->on('pro_wbs');
            $table->foreign('branch_id')->references('id')->on('mst_branch');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pro_activity');
    }
}
