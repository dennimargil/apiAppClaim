<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claim_departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('Status',['approved','pending','rejected']);
            $table->unsignedBigInteger('claim_id');
            $table->unsignedBigInteger('department_id');
            $table->foreign('claim_id')->references('id')
                  ->on('claims')->onDelete('cascade');
            $table->foreign('department_id')->references('id')
                  ->on('departments')->onDelete('cascade');
                  
            $table->softDeletes();
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
        Schema::dropIfExists('claim_departments');
    }
}
