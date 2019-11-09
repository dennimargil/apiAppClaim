<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('Status',['approved','pending','rejected']);
            $table->unsignedBigInteger('people_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('period_id');
            $table->unsignedBigInteger('claim_type_id');

            $table->foreign('people_id')->references('id')
                  ->on('people')->onDelete('cascade');

            $table->foreign('user_id')->references('id')
                  ->on('users')->onDelete('cascade');

            $table->foreign('subject_id')->references('id')
                  ->on('subjects')->onDelete('cascade');

            $table->foreign('section_id')->references('id')
                  ->on('sections')->onDelete('cascade');

            $table->foreign('period_id')->references('id')
                  ->on('periods')->onDelete('cascade');

            $table->foreign('claim_type_id')->references('id')
                  ->on('claim_types')->onDelete('cascade');  

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
        Schema::dropIfExists('claims');
    }
}
