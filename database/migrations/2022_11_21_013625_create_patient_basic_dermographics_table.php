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
        Schema::create('patient_basic_dermographics', function (Blueprint $table) {
            $table->id();
            $table->char('patient_id', 11 )->unique();
            $table->char('healthInstitution_Number', 10 );
            $table->char('healthInstitution_Location', 50 )->nullable();
            $table->char('institution_ID_Type', 30 );
            $table->char('institution_ID_Number', 40 );
            $table->date('patient_birthday' );
            $table->char('patient_gender', 11);
            $table->char('patient_ethnicity', 11)->nullable();
            $table->char('patient_age_of_primary_diagnosis', 20);
            $table->char('patient_primary_diagnosis', 11);
            $table->char('patient_geographics_moh', 50)->nullable();
            $table->char('patient_geographics_district', 50);
            $table->char('patient_contact_number', 20)->nullable();
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
        Schema::dropIfExists('patient_basic_dermographics');
    }
};