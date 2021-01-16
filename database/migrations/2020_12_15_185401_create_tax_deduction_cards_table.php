<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxDeductionCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_deduction_cards', function (Blueprint $table) {
            $table->id();
            $table->string('staff_tin_number');
            $table->string('staff_id');
            $table->string('surname');
            $table->string('othername');
            $table->decimal('basic');
            $table->decimal('housing');
            $table->decimal('transport');
            $table->decimal('other_allowances');
            $table->decimal('total_income');
            $table->decimal('pension');
            $table->decimal('nhf');
            $table->decimal('nhis');
            $table->decimal('annual_tax_payable');
            $table->decimal('tax_prorated');

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
        Schema::dropIfExists('tax_deduction_cards');
    }
}
