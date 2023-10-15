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
        Schema::create('keys_and_values', function (Blueprint $table) {
            $table->id();
            $table->char('keysofthekeygroup',50);
            $table->char('keysofthekey',100);
            $table->char('option',100);
            $table->text('valuesofthekey');
            $table->char('patientID_prefix',10);
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
        Schema::dropIfExists('keys_and_values');
    }

    
};