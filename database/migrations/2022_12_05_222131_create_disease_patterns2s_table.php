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
        Schema::create('disease_patterns2s', function (Blueprint $table) {
            $table->id();
            $table->char('patient_id',20);
            $table->text('NS_DiseasePattern')->nullable();
            $table->text('NS_Second_line')->nullable();
            $table->text('NS_RenalBiopsy')->nullable();
            $table->text('NS_RenalBiopsy_Dx')->nullable();
            $table->text('NS_OtherComorbids')->nullable();
            $table->text('CAK_DiseasePattern')->nullable();
            $table->text('CAK_pyeloplasty')->nullable();
            $table->text('CAK_megaureter')->nullable();
            $table->text('CAK_VUR_type')->nullable();
            $table->text('CAK_VUR_grade')->nullable();
            $table->text('CAK_VUR_reimp')->nullable();
            $table->text('CAK_last_secreat')->nullable();
            $table->text('CAK_last_egfr')->nullable();
            $table->text('CAK_ckd')->nullable();
            $table->text('CKD_etiology')->nullable();
            $table->text('CKD_stage')->nullable();
            $table->text('CKD_last_secreat')->nullable();
            $table->text('CKD_last_egfr')->nullable();            
            $table->text('CKD_donor')->nullable();
            $table->text('CKD_rrt')->nullable();
            $table->text('CKD_transplant')->nullable();
            $table->text('AGN_history')->nullable();
            $table->text('AGN_asot')->nullable();
            $table->text('AGN_high_secreat')->nullable();
            $table->text('AGN_gfr')->nullable();            
            $table->text('AGN_micro_heamat')->nullable();            
            $table->text('AGN_macro_heamat')->nullable();            
            $table->text('AGN_c3')->nullable();            
            $table->text('AGN_c4')->nullable();            
            $table->text('AGN_bp')->nullable();            
            $table->text('AGN_uop')->nullable();            
            $table->text('AGN_max_proten')->nullable();            
            $table->text('SLE_diagnosis')->nullable();            
            $table->text('SLE_drugsused')->nullable();
            $table->text('SLE_last_secreat')->nullable();
            $table->text('SLE_last_egfr')->nullable();             
            $table->text('SLE_ckd')->nullable();            
            $table->text('SLE_biopsy')->nullable();            
            $table->text('IGA_presentation')->nullable();            
            $table->text('IGA_heamat')->nullable();
            $table->text('IGA_last_secreat')->nullable();
            $table->text('IGA_last_egfr')->nullable();             
            $table->text('IGA_biopsy')->nullable();            
            $table->text('IGA_hypertension')->nullable();            
            $table->text('IGA_drugs')->nullable();            
            $table->text('IGA_ckd')->nullable();            
            $table->text('AKI_etio')->nullable();            
            $table->text('AKI_rrt')->nullable();            
            $table->text('AKI_frusemide')->nullable();            
            $table->text('AKI_biopsy')->nullable();            
            $table->text('notes')->nullable();            
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
        Schema::dropIfExists('disease_patterns2s');
    }
};