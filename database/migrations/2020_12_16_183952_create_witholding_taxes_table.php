<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWitholdingTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('witholding_taxes', function (Blueprint $table) {
            $table->id();
            $table->string('contractor_name');
            $table->string('business_outfit');
            $table->string('nature_of_business');
            $table->decimal('contarct_sum');
            $table->decimal('wht_percent');
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
        Schema::dropIfExists('witholding_taxes');
    }
}
