<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlyReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_returns', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('staff_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('othername');
            $table->string('designation');
            $table->string('location_status');
            $table->string('subsidiary');
            $table->decimal('total_monthly_earning');
            $table->decimal('total_tax_deducted');
            $table->decimal('total_tax_remitted');

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
        Schema::dropIfExists('monthly_returns');
    }
}
