<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxPayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_payers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('othername');
            $table->string('sex');
            $table->string('dob');
            $table->string('marital_status');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('occupation');
            $table->string('reg_type_code');
            $table->string('phone_number');
           ;
            $table->integer('tax_agent_id')->unsigned();
            //rest of fields then...
            $table->foreign('tax_agent_id')->references('id')->on('tax_agents')->onDelete('cascade');
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
        Schema::dropIfExists('tax_payers');
    }
}
