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
        Schema::create('patient__basic__params', function (Blueprint $table) {
            $table->id();
            $table->char('patient_id', 11);
            $table->date('date_of_parameters');
            $table->float('patient_height', 8, 2)->nullable();
            $table->float('patient_weight', 8, 2)->nullable();
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
        Schema::dropIfExists('patient__basic__pparams');
    }
};