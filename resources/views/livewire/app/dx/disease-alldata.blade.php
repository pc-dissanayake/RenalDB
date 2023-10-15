<div class="m-1 lg:m-5">
    <div>
        <div>
<style>




</style>
            <h2 class=" text-3xl text-center font-extrabold dark:text-white inline-block w-full p-2 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600  ">

                @if($patientbasics->patient_primary_diagnosis == "NS")
                    Nephrotic Syndrome
                @endif
                @if($patientbasics->patient_primary_diagnosis == "CKD")
                    Chronic Kidney Disease
                @endif
                @if($patientbasics->patient_primary_diagnosis == "AKI")
                   Acute Kidney Injury
                @endif
                @if($patientbasics->patient_primary_diagnosis == "AGN")
                    Acute Glomerulonephritis
                @endif
                @if($patientbasics->patient_primary_diagnosis == "SLE")
                    Systemic Lupus Erythematosus
                @endif
                @if($patientbasics->patient_primary_diagnosis == "IGA")
                    IgA nephropathy
                @endif
                @if($patientbasics->patient_primary_diagnosis == "CAK")
                    Congenital Anomalies of the Kidney and Urinary Tract
                @endif
                @if($patientbasics->patient_primary_diagnosis == "UTI")
                    Urinary Tract Infections
                @endif

</h2>
            
<div class="relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 my-2 ">
        <tbody>
            {{-- Table Heads --}}
                    <thead class="text-lg text-gray-700 capitalize bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

@if($patientbasics->patient_primary_diagnosis == "NS")
                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-2 px-2">
                Updated at
                </td>
                <td class="py-2 px-2">
                Disease Pattern
                </td>
                <td class="py-2 px-2">
                Second Line Medication
                </td>
                <td class="py-2 px-2">
                    Renal Biopsy & Findings
                </td>
                <td class="py-2 px-2">
                Other Co-morbids
                </td>
                <td class="py-2 px-2">
                Notes
                </td>
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <td class="py-2 px-2">
                Created User ID
                </td> @endif
                
              
            </tr>
                @endif
                                {{-- CKD --}}
                @if($patientbasics->patient_primary_diagnosis == "CKD")
                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-2 px-2">
                Updated at
                </td>
                <td class="py-2 px-2">
              Etiology
                </td>
                <td class="py-2 px-2">
                Stage
                </td>
                <td class="py-2 px-2">
                Serum Creatinine
                </td>
                <td class="py-2 px-2">
                EGFR
                </td>
                <td class="py-2 px-2">
                Donor Availability
                </td>
                <td class="py-2 px-2">
                RRT/CIC
                </td>
                <td class="py-2 px-2">
                Renal Transplant Plan
                </td>
                <td class="py-2 px-2">
                Notes
                </td>
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <td class="py-2 px-2">
                Created User ID
                </td> @endif
                
            </tr>
                @endif
                {{-- AKI --}}
                @if($patientbasics->patient_primary_diagnosis == "AKI")
                                       <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-2 px-2">
                Updated at
                </td>
                <td class="py-2 px-2">
              Disease Etiology
                </td>
                <td class="py-2 px-2">
                Disease Etiology
                </td>
                <td class="py-2 px-2">
IV Frusemide Infusion
                </td>
                <td class="py-2 px-2">
                Biopsy Done
                </td>
                <td class="py-2 px-2">
                Notes
                </td>
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <td class="py-2 px-2">
                Created User ID
                </td> @endif
                
            </tr>
                @endif                
                {{-- AGN --}}
                @if($patientbasics->patient_primary_diagnosis == "AGN")
               <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-2 px-2">
                Updated at
                </td>
                <td class="py-2 px-2"> Preceding History
                </td>
                <td class="py-2 px-2">ASOT Titre
                </td>
                <td class="py-2 px-2">Serum Creatinine
                </td>
                <td class="py-2 px-2">GFR
                </td>
                <td class="py-2 px-2">Microscopic Haematauria
                </td>
                <td class="py-2 px-2">Macroscopic Haematauria
                </td>
                <td class="py-2 px-2">C3
                </td>
                <td class="py-2 px-2">C4
                </td>
                <td class="py-2 px-2">Blood Preasure
                </td>
                <td class="py-2 px-2">UOP
                </td>
                <td class="py-2 px-2">Maximum Protenuria
                </td>
                <td class="py-2 px-2">
                Notes
                </td>
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <td class="py-2 px-2">
                Created User ID
                </td> @endif
                
            </tr>

                @endif
                {{-- SLE --}} 
                @if($patientbasics->patient_primary_diagnosis == "SLE")
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-2 px-2">
                Updated at
                </td>
                <td class="py-2 px-2">Diagnosis Using
                </td>
                <td class="py-2 px-2"> Current Medications
                </td>
                <td class="py-2 px-2">Serum Creatinine levels
                </td>
                <td class="py-2 px-2">EGFR
                </td>
                <td class="py-2 px-2">CKD Stage
                </td>
                <td class="py-2 px-2">Renal Biopsy
                </td>
                <td class="py-2 px-2">
                Notes
                </td>
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <td class="py-2 px-2">
                Created User ID
                </td> @endif
                
            </tr>                @endif
                {{-- IGA --}}
                @if($patientbasics->patient_primary_diagnosis == "IGA")

                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-2 px-2">
                Updated at
                </td>
                <td class="py-2 px-2">
                Disease Etiology
                </td>
                <td class="py-2 px-2">
                Haematuria
                </td>
                <td class="py-2 px-2">
                Serum Creatinine
                </td>
                <td class="py-2 px-2">
                EGFR
                </td>
                <td class="py-2 px-2">
                Biopsy
                </td>
                <td class="py-2 px-2">
                Hypertension
                </td>
                <td class="py-2 px-2">
                Current Medications
                </td>
                <td class="py-2 px-2">
                CKD
                </td>
                <td class="py-2 px-2">
                Notes
                </td>
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <td class="py-2 px-2">
                Created User ID
                </td> @endif
                
            </tr>
                    
                @endif
                                {{-- CAKUT --}}
                @if($patientbasics->patient_primary_diagnosis == "CAK")
<tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-2 px-2">
                Updated at
                </td><td class="py-2 px-2">Disease Etiology
                </td>
                <td class="py-2 px-2">Pyloplasty
                </td>
                <td class="py-2 px-2">Megaureter
                </td>
                <td class="py-2 px-2">Vesicourethral Refux Type
                </td>
                <td class="py-2 px-2">Vesicourethral Reflux Grade
                </td>
                <td class="py-2 px-2">Ureteric Implantation
                </td>
                <td class="py-2 px-2">Serum Creatinine Levels
                </td>
                <td class="py-2 px-2">EGFRs
                </td>
                <td class="py-2 px-2">CKD Stage
                </td>
                <td class="py-2 px-2">
                Notes
                </td>
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <td class="py-2 px-2">
                Created User ID
                </td> @endif

                
            </tr>                @endif
</thead>
            {{-- end of Table Heads --}}
            {{--Table Data --}}
                               {{-- NS --}}

                @if($patientbasics->patient_primary_diagnosis == "NS")
                  @foreach ($patientalldiseasedata as $datans )

                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-2 px-2">{{ ($datans->created_at) }}
                </td>
              <td class="py-2 px-2">                                  
                {{ ($datans->NS_DiseasePattern) }}
                </td>
                <td class="py-2 px-2">
                {{ implode(', ', json_decode($datans->NS_Second_line)) }}
                </td>
                <td class="py-2 px-2">
                {{ ($datans->NS_RenalBiopsy) }}
                @if ($datans->NS_RenalBiopsy=="Yes")
                <br />
                {{ ($datans->NS_RenalBiopsy_Dx) }}

                @endif
                </td>
                <td class="py-2 px-2">
                {{ implode(', ', json_decode($datans->NS_OtherComorbids)) }}
                </td>
                <td class="py-2 px-2">
                {{ ($datans->notes) }}
                </td>
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <td class="py-2 px-2">
                {{ ($datacak->created_user) }}
                </td> @endif
     
            </tr>
                @endforeach
                @endif
                                {{-- CKD --}}
                @if($patientbasics->patient_primary_diagnosis == "CKD")
                            @foreach ($patientalldiseasedata as $datackd )

                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                 <td class="py-2 px-2">{{ ($datackd->created_at) }}
                </td>
                <td class="py-2 px-2">                                  
                {{ ($datackd->CKD_etiology) }}
                </td>
                <td class="py-2 px-2">                                  
                {{ ($datackd->CKD_stage) }}
                </td>
                <td class="py-2 px-2">                                  
                {{ ($datackd->CKD_last_secreat) }}
                </td>
                <td class="py-2 px-2">                                  
                {{ ($datackd->CKD_last_egfr) }}
                </td>
                <td class="py-2 px-2">                                  
                {{ ($datackd->CKD_donor) }}
                </td>
                <td class="py-2 px-2">                                  
                {{ ($datackd->CKD_rrt) }}
                </td>
                <td class="py-2 px-2">
                {{ ($datackd->CKD_transplant) }}
                </td>
              
                <td class="py-2 px-2">
                {{ ($datackd->notes) }}
                </td>
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <td class="py-2 px-2">
                {{ ($datacak->created_user) }}
                </td> @endif
               
            </tr>
                @endforeach   
                
                @endif
                {{-- AKI --}}
                @if($patientbasics->patient_primary_diagnosis == "AKI")
                   @foreach ($patientalldiseasedata as $dataaki )

                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                       <td class="py-2 px-2">{{ ($dataaki->created_at) }}
                </td>
                <td class="py-2 px-2">                                  
                {{ ($dataaki->AKI_etio) }}
                </td>
               <td class="py-2 px-2">                                  
                {{ ($dataaki->AKI_rrt) }}
                </td>
               <td class="py-2 px-2">                                  
                {{ ($dataaki->AKI_frusemide) }}
                </td>
               <td class="py-2 px-2">                                  
                {{ ($dataaki->AKI_biopsy) }}
                </td>
                <td class="py-2 px-2">
                {{ ($dataaki->notes) }}
                </td>
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <td class="py-2 px-2">
                {{ ($datacak->created_user) }}
                </td> @endif
         
              
            </tr>
                @endforeach
                @endif                
                {{-- AGN --}}
                @if($patientbasics->patient_primary_diagnosis == "AGN")
                   @foreach ($patientalldiseasedata as $dataagn )
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-2 px-2">{{ ($dataagn->created_at) }}
                </td>
                <td class="py-2 px-2">{{ ($dataagn->AGN_history) }}
                </td>
                <td class="py-2 px-2">{{ ($dataagn->AGN_asot) }}
                </td>
                <td class="py-2 px-2">{{ ($dataagn->AGN_high_secreat) }}
                </td>
                <td class="py-2 px-2">{{ ($dataagn->AGN_gfr) }}
                </td>
                <td class="py-2 px-2">{{ ($dataagn->AGN_micro_heamat) }}
                </td>
                <td class="py-2 px-2">{{ ($dataagn->AGN_macro_heamat) }}
                </td>
                <td class="py-2 px-2">{{ ($dataagn->AGN_c3) }}
                </td>
                <td class="py-2 px-2">{{ ($dataagn->AGN_c4) }}
                </td>
                <td class="py-2 px-2">{{ ($dataagn->AGN_bp) }}
                </td>
                <td class="py-2 px-2">{{ ($dataagn->AGN_uop) }}
                </td>
                <td class="py-2 px-2">{{ ($dataagn->AGN_max_proten) }}
                </td>
                <td class="py-2 px-2">
                {{ ($dataagn->notes) }}
                </td>
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <td class="py-2 px-2">
                {{ ($datacak->created_user) }}
                </td> @endif
                
              
            </tr>
                @endforeach
                @endif
                {{-- SLE --}}
                @if($patientbasics->patient_primary_diagnosis == "SLE")
 @foreach ($patientalldiseasedata as $datasle )
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <td class="py-2 px-2">{{ ($datasle->created_at) }}
                </td>
                <td class="py-2 px-2">{{ implode(', ', json_decode($datasle->SLE_diagnosis)) }}
                </td>
                <td class="py-2 px-2">{{ implode(', ', json_decode($datasle->SLE_drugsused)) }}
                </td>
                <td class="py-2 px-2">{{ ($datasle->SLE_last_secreat) }}
                </td>
                <td class="py-2 px-2">{{ ($datasle->SLE_last_egfr) }}
                </td>
                <td class="py-2 px-2">{{ ($datasle->SLE_ckd) }}
                </td>
                <td class="py-2 px-2">{{ ($datasle->SLE_biopsy) }}
                </td>
                <td class="py-2 px-2">
                {{ ($datasle->notes) }}
                </td>
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <td class="py-2 px-2">
                {{ ($datacak->created_user) }}
                </td> @endif
            </tr>
                @endforeach                @endif
                {{-- IGA --}}
                @if($patientbasics->patient_primary_diagnosis == "IGA")
                @foreach ($patientalldiseasedata as $dataiga )
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-2 px-2">{{ ($dataiga->created_at) }}
                </td>
                <td class="py-2 px-2">
                {{ ($dataiga->IGA_presentation) }}
                </td>
                <td class="py-2 px-2">
                {{ ($dataiga->IGA_heamat) }}
                </td>
                <td class="py-2 px-2">
                {{ ($dataiga->IGA_last_secreat) }}
                </td>
                <td class="py-2 px-2">
                {{ ($dataiga->IGA_last_egfr) }}
                </td>
                <td class="py-2 px-2">
                {{ ($dataiga->IGA_biopsy) }}
                </td>
                <td class="py-2 px-2">
                {{ ($dataiga->IGA_hypertension) }}
                </td>
                <td class="py-2 px-2">
                {{ implode(', ', json_decode($dataiga->IGA_drugs)) }}
                </td>
                <td class="py-2 px-2">
                {{ ($dataiga->IGA_ckd) }}
                </td>
                <td class="py-2 px-2">
                {{ ($dataiga->notes) }}
                </td>
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <td class="py-2 px-2">
                {{ ($datacak->created_user) }}
                </td> @endif
            </tr>
                @endforeach
                    
                @endif
                                {{-- CAKUT --}}
                @if($patientbasics->patient_primary_diagnosis == "CAK")
@foreach ($patientalldiseasedata as $datacak )
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-2 px-2">{{ ($datacak->created_at) }}
                </td>
                <td class="py-2 px-2">{{ ($datacak->CAK_DiseasePattern) }}
                </td>
                <td class="py-2 px-2">{{ ($datacak->CAK_pyeloplasty) }}
                </td>
                <td class="py-2 px-2">{{ ($datacak->CAK_megaureter) }}
                </td>
                <td class="py-2 px-2">{{ ($datacak->CAK_VUR_type) }}
                </td>
                <td class="py-2 px-2">{{ ($datacak->CAK_VUR_grade) }}
                </td>
                <td class="py-2 px-2">{{ ($datacak->CAK_VUR_reimp) }}
                </td>
                <td class="py-2 px-2">{{ ($datacak->CAK_last_secreat) }}
                </td>
                <td class="py-2 px-2">{{ ($datacak->CAK_last_egfr) }}
                </td>
                <td class="py-2 px-2">{{ ($datacak->CAK_ckd) }}
                </td>
                <td class="py-2 px-2">
                {{ ($datacak->notes) }}
                </td>
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <td class="py-2 px-2">
                {{ ($datacak->created_user) }}
                </td> @endif
            </tr>
                @endforeach                @endif
        </tbody>
    </table>
</div>





        </div>
    </div>
</div>
