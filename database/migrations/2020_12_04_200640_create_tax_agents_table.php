<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_agents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('tax_identification_id')->unsigned();
            //rest of fields then...
            $table->foreign('tax_identification_id')->references('id')->on('tax_identification_numbers')->onDelete('cascade');

            
            $table->string('office_address');
            $table->string('company_reg_number');
            $table->string('registration_date');
            $table->string('phone_number');
            $table->string('business_type_id');
            $table->string('business_category');
            
            $table->string('email');
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
        Schema::dropIfExists('tax_agents');
    }
}
