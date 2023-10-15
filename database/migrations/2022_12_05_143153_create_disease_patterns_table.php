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
        Schema::create('disease_patterns', function (Blueprint $table) {
            $table->id();
            $table->char('primary_disease_short', 5);
            $table->char('primary_disease');
            $table->char('Level1')->nullable();
            $table->char('Level2')->nullable();
            $table->char('Level3')->nullable();
            $table->char('Level4')->nullable();
            $table->char('Level5')->nullable();
            $table->char('name')->nullable();
            $table->char('value')->nullable();
            $table->char('type')->nullable();
            $table->char('options')->nullable();
            $table->char('parameter_id')->nullable();
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
        Schema::dropIfExists('disease_patterns');
    }
};