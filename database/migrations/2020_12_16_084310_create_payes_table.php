<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payes', function (Blueprint $table) {
            $table->id();
            $table->string('period');
            $table->string('tin');
            $table->string('company_id');
            $table->string('tax_station_id');
            $table->decimal('monthly_amount');
            $table->decimal('amount');
           
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
        Schema::dropIfExists('payes');
    }
}
