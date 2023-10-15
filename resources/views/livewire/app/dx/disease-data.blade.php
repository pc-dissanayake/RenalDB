                   


<section class="bg-white dark:bg-gray-900 m-5">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">Primary Diagnosis : {{$diseasesshort[$patientprimarydx] ?? ''}}
@if($patientprimarydx == "NS")

<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Disease Data</h2>
      <div action="#">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">


              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nephrotic Syndrome Disease Pattern</label>
                  <select wire:model="NS_DiseasePattern" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Infrequent Relapsing NS">Infrequent Relapsing NS</option>
                      <option value="Frequent Relapsing NS">Frequent Relapsing NS</option>
                      <option value="SDNS">SDNS</option>
                      <option value="FRSDNS">FRSDNS</option>
                      <option value="SRNS">SRNS</option>
                      </select>
              </div><div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Second Line Medications ( Select all the current Medications )</label>
                  <select  wire:model="NS_Second_line"  multiple  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <option value="Levimasole">Levimasole</option>
                      <option value="Cyclophosphamide">Cyclophosphamide</option>
                      <option value="Oral Cyclophosphamide">Oral Cyclophosphamide</option>
                      <option value="IV Cyclophosphamide">IV Cyclophosphamide</option>
                      <option value="Cyclosporin">Cyclosporin</option>
                      <option value="Tacrolimus">Tacrolimus</option>
                      <option value="MMF">MMF</option>
                      <option value="Rituximab">Rituximab</option>
                      </select>
              </div><div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Renal Bipsy</label>
                  <select  wire:model="NS_RenalBiopsy"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>

                      </select>
              </div><div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">If Renal Biopsy, Diagnosis</label>
                  <select  wire:model="NS_RenalBiopsy_Dx"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="MCD">MCD</option>
                      <option value="MPGN">MPGN</option>
                      <option value="FSGS">FSGS</option>
                      </select>
              </div>
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other Cormorbids  ( Select all the Co Morbids )</label>
                  <select multiple wire:model="NS_OtherComorbids"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="Cateract">Cateract</option>
                      <option value="Hypertension">Hypertension</option>
                      </select>
              </div>
                 <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Notes</label>
                  <textarea multiple wire:model="Dx_notes"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
       
                      </textarea>
              </div>             
<button wire:click='saveNS' type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Add Data</button>

        </div>
  </div>

</section>
@endif


@if($patientprimarydx == "CAK")
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Disease Data</h2>
      <div action="#">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">


              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Disease Pattern</label>
                  <select wire:model="CAK_DiseasePattern" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Renal Hypodysplasia">Renal Hypodysplasia</option>
                      <option value="Renal Agenesis">Renal Agenesis</option>
                      <option value="Multicystic Dysplastic Kideney">Multicystic Dysplastic Kideney</option>
                      <option value="Hydronephrosis - Mild">Hydronephrosis - Mild</option>
                      <option value="Hydronephrosis - Moderate">Hydronephrosis - Moderate</option>
                      <option value="Hydronephrosis - Severe">Hydronephrosis - Severe</option>
                      <option value="Duplex Kidneys">Duplex Kidneys</option>
                      <option value="Duplicated Collecting System - Partial">Duplicated Collecting System - Partial</option>
                      <option value="Duplicated Collecting System - Complete">Duplicated Collecting System - Complete</option>
                      <option value="Duplicated Collecting System - Simple">Duplicated Collecting System - Simple</option>
                      <option value="Duplicated Collecting System - Complex">Duplicated Collecting System - Complex</option>
                      <option value="Ureteropelvic Junction Obstruction">Ureteropelvic Junction Obstruction</option>
                      <option value="Vesico-Ureteric Junction Obstruction">Vesico-Ureteric Junction Obstruction</option>
                      </select>
              </div>
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pyeloplasty</label>
                  <select  wire:model="CAK_pyeloplasty"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>

                      </select>
              </div><div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Megaureter</label>
                  <select  wire:model="CAK_megaureter"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>

                      </select>
              </div><div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vesicourethral Reflux Type</label>
                  <select  wire:model="CAK_VUR_type"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Unilateral">Unilateral</option>
                      <option value="Bilateral">Bilateral</option>

                      </select>
              </div>
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vesicourethral Reflux Grade</label>
                  <input  wire:model="CAK_VUR_grade"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>              
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ureteric Implant</label>
                  <select  wire:model="CAK_VUR_reimp"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>

                      </select>
              </div>
                            <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Serum creatinine</label>
                  <input  wire:model="CAK_last_secreat"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>   
                            <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last EGFR</label>
                  <input  wire:model="CAK_last_egfr"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>   
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CKD Stage</label>
                  <select  wire:model="CAK_ckd"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="Grade I">Grade I</option>
                      <option value="Grade II">Grade II</option>
                      <option value="Grade III">Grade III</option>
                      <option value="Grade IV">Grade IV</option>
                      <option value="Grade V">Grade V</option>
                      </select>
              </div>


                <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Notes</label>
                  <textarea multiple wire:model="Dx_notes"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
       
                      </textarea>
                      

        </div><button wire:click='saveCAK' type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Add Data</button>
  </div>
              </div>
</section>
@endif


@if($patientprimarydx == "CKD")
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Disease Data</h2>
      <div action="#">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">


              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Disease Etiology</label>
                  <select wire:model="CKD_etiology" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Hypoplastic">Hypoplastic</option>
                      <option value="Dysplastic Kidneys">Dysplastic Kidneys</option>
                      <option value="Neurogenic Bladder">Neurogenic Bladder</option>
                      <option value="SRNS">SRNS</option>
                      <option value="RPGN">RPGN</option>
                      <option value="Iga Nephroathy">Iga Nephroathy</option>
                      <option value="Other">Other</option>
                      <option value="Unknown">Unknown</option>
                      </select>
              </div>
                            <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CKD Stage</label>
                  <select  wire:model="CKD_stage"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="Grade I">Grade I</option>
                      <option value="Grade II">Grade II</option>
                      <option value="Grade III">Grade III</option>
                      <option value="Grade IV">Grade IV</option>
                      <option value="Grade V">Grade V</option>
                      </select>
              </div>
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Serum creatinine</label>
                  <input  wire:model="CKD_last_secreat"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>   
                            <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">EGFR</label>
                  <input  wire:model="CKD_last_egfr"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>   

              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Donor Availability</label>
                  <select  wire:model="CKD_donor"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>

                      </select>
              </div><div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Renal Replacement Therapy / CIC</label>
                  <select  wire:model="CKD_rrt"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>

                      </select>
              </div><div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Renal Transplant Plan</label>
                  <select  wire:model="CKD_transplant"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>

                      </select>
              </div>
                                



                <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Notes</label>
                  <textarea multiple wire:model="Dx_notes"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
       
                      </textarea>
                      

        </div><button wire:click='saveCKD' type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Add Data</button>
  </div>
              </div>
</section>
@endif



@if($patientprimarydx == "AGN")
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Disease Data</h2>
      <div action="#">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">


              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preceding History</label>
                  <select wire:model="AGN_history" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Skin Sepsis">Skin Sepsis</option>
                      <option value="Sore Throat">Sore Throat</option>
                      <option value="Other">Other</option>
                      <option value="Unknown">Unknown</option>
                      </select>
              </div>
                            <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ASOT Titre</label>
                  <select  wire:model="AGN_asot"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="" selected>Select</option>
                      <option value="High">High</option>
                      <option value="Normal">Normal</option>
                      <option value="Not Done">Not Done</option>
                      </select>
              </div>
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Highest Serum Creatinine</label>
                  <input  wire:model="AGN_high_secreat"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>   
                            <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GFR</label>
                  <input  wire:model="AGN_gfr"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div> 

              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Microscopic Haematuria</label>
                  <select  wire:model="AGN_micro_heamat"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Present">Present</option>
                      <option value="Not Present">Not Present</option>

                      </select>
              </div>              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Macroscopic Haematuria</label>
                  <select  wire:model="AGN_macro_heamat"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Present">Present</option>
                      <option value="Not Present">Not Present</option>

                      </select>
              </div>
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">C3 Level</label>
                  <select  wire:model="AGN_c3"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Low">Low</option>
                      <option value="Normal">Normal</option>
                      <option value="High">High</option>
                      <option value="Not Done">Not Done</option>
                      </select>
              </div>
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">C4 Level</label>
                  <select  wire:model="AGN_c4"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Low">Low</option>
                      <option value="Normal">Normal</option>
                      <option value="High">High</option>
                      <option value="Not Done">Not Done</option>
                      </select>
              </div>
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">BP</label>
                  <select  wire:model="AGN_bp"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Low">Low</option>
                      <option value="Normal">Normal</option>
                      <option value="High">High</option>
                      </select>
              </div>
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">UOP</label>
                  <select  wire:model="AGN_uop"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="Oligouria">Oligouria</option>
                      <option value="Normal">Normal</option>
                      </select>
              </div>

              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maximum Protenuria</label>
                  <select  wire:model="AGN_max_proten"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                          <option value="No Protenuria">No Protenuria</option>
                      <option value="+">+</option>
                      <option value="++">++</option>
                      <option value="+++">+++</option>
                      <option value="++++">++++</option>
                      </select>
              </div>
                                



                <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Notes</label>
                  <textarea multiple wire:model="Dx_notes"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
       
                      </textarea>
                      

        </div><button wire:click='saveAGN' type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Add Data</button>
  </div>
              </div>
</section>
@endif



@if($patientprimarydx == "SLE")
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Disease Data</h2>
      <div action="#">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">


              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnosis Criteria  </label>
                  <select  wire:model="SLE_diagnosis"  multiple  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="ANA">ANA</option>
                      <option value="C3">C3</option>
                      <option value="C4">C4</option>
                      <option value="DsDNA">DsDNA</option>
                      </select>
              </div>
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medications  ( Select all the current Medications )</label>
                  <select  wire:model="SLE_drugsused"  multiple  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="Methyl Prednisolone Pulses">Methyl Prednisolone Pulses</option>
                      <option value="IV Cyclophosphamide">IV Cyclophosphamide</option>
                      <option value="MMF">MMF</option>
                      <option value="Cyclosporin">Cyclosporin</option>
                      <option value="Tacrolimus">Tacrolimus</option>
                      <option value="Rituximab">Rituximab</option>
                      </select>
              </div>
             <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Serum creatinine</label>
                  <input  wire:model="SLE_last_secreat"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>   
                            <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">EGFR</label>
                  <input  wire:model="SLE_last_egfr"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>   
                            <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CKD Stage</label>
                  <select  wire:model="SLE_ckd"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="">Choose Grade</option>
                      <option value="Grade I">Grade I</option>
                      <option value="Grade II">Grade II</option>
                      <option value="Grade III">Grade III</option>
                      <option value="Grade IV">Grade IV</option>
                      <option value="Grade V">Grade V</option>
                      </select>
              </div>
 <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Renal Biopsy</label>
                  <select  wire:model="SLE_biopsy"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="">Choose Class</option>
                      <option value="Class I">Class I</option>
                      <option value="Class II">Class II</option>
                      <option value="Class III">Class III</option>
                      <option value="Class IV">Class IV</option>
                      <option value="Class V">Class V</option>
                      <option value="Immunoflorescence">Immunoflorescence</option>
                      </select>
              </div>
 

                <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Notes</label>
                  <textarea multiple wire:model="Dx_notes"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
       
                      </textarea>
                      

        </div><button wire:click='saveSLE' type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Add Data</button>
  </div>
              </div>
</section>
@endif



@if($patientprimarydx == "IGA")
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Disease Data</h2>
      <div action="#">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">


              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Presentation</label>
                  <select  wire:model="IGA_presentation"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value=""></option>
                      <option value="Microscopic Haematuria">Microscopic Haematuria</option>
                      <option value="Macroscopic Haematuria">Macroscopic Haematuria</option>
                      </select>
              </div>

                            <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Haematuria</label>
                  <select  wire:model="IGA_heamat"   id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="AGN">AGN</option>
                      <option value="NS">NS</option>
                      <option value="CKD">CKD</option>
                      </select>
              </div>

 <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Serum creatinine</label>
                  <input  wire:model="IGA_last_secreat"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>   
                            <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">EGFR</label>
                  <input  wire:model="IGA_last_egfr"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>   

                            <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Biopsy</label>
                  <select  wire:model="IGA_biopsy"   id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="Histology">Histology</option>
                      <option value="Immunoflorence">Immunoflorence</option>
                      </select>
              </div>                            <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hypertension</label>
                  <select  wire:model="IGA_hypertension"   id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      </select>
              </div>
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medications</label>
                  <select  wire:model="IGA_drugs"  multiple  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="Steroids">Steroids</option>
                      <option value="MMF">MMF</option>
                      <option value="Cyclosporin">Cyclosporin</option>
                      <option value="Tacrolimus">Tacrolimus</option>
                      </select>
              </div>
            
                            <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CKD Stage</label>
                  <select  wire:model="IGA_ckd"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="Grade I">Grade I</option>
                      <option value="Grade II">Grade II</option>
                      <option value="Grade III">Grade III</option>
                      <option value="Grade IV">Grade IV</option>
                      <option value="Grade V">Grade V</option>
                      </select>
              </div>

                <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Notes</label>
                  <textarea multiple wire:model="Dx_notes"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
       
                      </textarea>
                      

        </div><button wire:click='saveIGA' type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Add Data</button>
  </div>
              </div>
</section>

@endif



@if($patientprimarydx == "AKI")
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Disease Data</h2>
      <div action="#">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">


              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Etiology</label>
                  <select  wire:model="AKI_etio"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value=""></option>
                      <option value="Diarrhea">Diarrhea</option>
                      <option value="Sepsis">Sepsis</option>
                      <option value="RPGN">RPGN</option>
                      <option value="Snake Bite">Snake Bite</option>
                      <option value="Nephrotoxic Drugs">Nephrotoxic Drugs</option>
                      <option value="Leptospirosis">Leptospirosis</option>
                      <option value="HUS">HUS</option>
                      <option value="Other">Other</option>
                    </select>
              </div>

                            <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RRT Needed</label>
                  <select  wire:model="AKI_rrt"   id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="" readonly></option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="HD">HD</option>
                      <option value="PD">PD</option>
                      <option value="CRRT">CRRT</option>
                      </select>
              </div>

                     <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IV Frusemide Used</label>
                  <select  wire:model="AKI_frusemide"   id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value=""></option>
                      <option value="Used">Used</option>
                      <option value="Not used">Not used</option>
                      </select>
              </div>
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Biopsy</label>
                  <select  wire:model="AKI_biopsy"   id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value=""></option>
                      <option value="Done">Done</option>
                      <option value="Not Done">Not Done</option>
                      </select>
              </div>
            
                          

                <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Notes</label>
                  <textarea multiple wire:model="Dx_notes"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
       
                      </textarea>
                      

        </div><button wire:click='saveAKI' type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Add Data</button>
  </div>
              </div>
</section>
@endif



@if($patientprimarydx == "UTI")
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Disease Data</h2>
      <div action="#">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">


              <div class="sm:col-span-2">
                  <label for="UTI_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                  <select  wire:model="UTI_type"  id="UTI_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="" ></option>
                <option value="Upper Tract Infection">Upper Tract Infection</option>
                      <option value="Febrile UTI">Febrile UTI</option>
                      <option value="Pyelonephritis">Pyelonephritis</option>
                      <option value="Lower Tract Infection">Lower Tract Infection</option>
                      <option value="Afebrile UTI">Afebrile UTI</option>
                      <option value="Cystitis">Cystitis</option>

                    </select>
              </div>
                        <div class="sm:col-span-2">
                  <label for="UTI_total_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Number of UTIs</label>
                  <input  wire:model="UTI_total_number"  id="UTI_total_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>    
<div class="sm:col-span-2">
                  <label for="UTI_totaladmissions" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number of Hospital Admissions</label>
                  <input  wire:model="UTI_totaladmissions"  id="UTI_totaladmissions" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>    
<div class="sm:col-span-2">
                  <label for="UTI_numberlastyear" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number of UTI's Last Year</label>
                  <input  wire:model="UTI_numberlastyear"  id="UTI_numberlastyear" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>    

<div class="sm:col-span-2">
                  <label for="UTI_organisms" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Organisms causing UTI’s in Descending Order</label>
                  <textarea multiple wire:model="UTI_organisms"  id="UTI_organisms" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
       
                      </textarea>
                      

        </div><div class="sm:col-span-2">
                  <label for="UTI_structureabnormalities" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Underlying Structural Abnormalities</label>
                  <select  wire:model="UTI_structureabnormalities"   id="UTI_structureabnormalities" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" multiple>
                      <option value="VUR" >VUR</option>
                      <option value="PUJ VUJ Obstructions" >PUJ VUJ Obstructions</option>
                      <option value="Duplex System" >Duplex System</option>
                      <option value="PUV" >PUV</option>
                      <option value="Bladder Dysfunction" >Bladder Dysfunction</option>
                     
                      </select>
              </div>
<div class="sm:col-span-2">
                  <label for="UTI_riskfactors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Risk factors</label>
                  <select  wire:model="UTI_riskfactors"   id="UTI_riskfactors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" multiple>
                      <option value="Constipation" >Constipation</option>
                      <option value="Improper Voiding Habits" >Improper Voiding Habits</option>
                      <option value="Phymosis" >Phymosis</option>
                      <option value="Labial Adhesions" >Labial Adhesions</option>
                      </select>
              </div>

<div class="sm:col-span-2">
                  <label for="UTI_imaging_and_defects" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imaging and defects</label>
                  <select  wire:model="UTI_imaging_and_defects"   id="UTI_imaging_and_defects" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" multiple>
                      <option value="USS" >USS</option>
                      <option value="MCUG" >MCUG</option>
                      <option value="DMSA" >DMSA</option>
                      <option value="DTPA" >DTPA</option>
                      <option value="Other" >Other</option>
                      
                      </select>
              </div>

<div class="sm:col-span-2">
                  <label for="UTI_Surgical_interventions" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Surgical Interventions</label>
                  <select  wire:model="UTI_Surgical_interventions"   id="UTI_Surgical_interventions" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" multiple>
                      <option value="Circumcision" >Circumcision</option>
                      <option value="Reimplantation" >Reimplantation</option>
                      <option value="Pyeloplasty" >Pyeloplasty</option>
                      <option value="Other" >Other</option>
                      </select>
              </div>

                     <div class="sm:col-span-2">
                  <label for="UTI_Surgical_reduced_frequency" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Whether frequency of UTI’s reduced with surgical intervention</label>
                  <select  wire:model="UTI_Surgical_reduced_frequency"   id="UTI_Surgical_reduced_frequency" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value=""></option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      </select>
              </div>
<div class="sm:col-span-2">
                  <label for="UTI_Prophylaxis_drug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prophylaxis - Drug</label>
                  <input  wire:model="UTI_Prophylaxis_drug"  id="UTI_Prophylaxis_drug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>   
<div class="sm:col-span-2">
                  <label for="UTI_Prophylaxis_duration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prophylaxis - Duration</label>
                  <input  wire:model="UTI_Prophylaxis_duration"  id="UTI_Prophylaxis_duration" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>   



                     <div class="sm:col-span-2">
                  <label for="UTI_Prophylaxis_reduced_frequency" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Whether frequency of UTI’s reduced with Prophylaxis</label>
                  <select  wire:model="UTI_Prophylaxis_reduced_frequency"   id="UTI_Prophylaxis_reduced_frequency" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value=""></option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      </select>
              </div>
                          

                <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Notes</label>
                  <textarea multiple wire:model="Dx_notes"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
       
                      </textarea>
        </div><button wire:click='saveUTI' type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Add Data</button>
  </div>
              </div>
</section>
@endif


@if($patientprimarydx == "RCD")
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Disease Data</h2>
      <div action="#">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">


              <div class="sm:col-span-2">
                  <label for="RCD_presentation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                  <select  wire:model="RCD_presentation"  id="RCD_presentation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="" ></option>
                        <option value="Painful Haematuria" >Painful Haematuria</option>
                        <option value="Painless Haematuria" >Painless Haematuria</option>
                        <option value="Incidental Finding" >Incidental Finding</option>
                        <option value="Nonspecific Abdominal Pain" >Nonspecific Abdominal Pain</option>
                        <option value="Renal Colic" >Renal Colic</option>
                

                    </select>
              </div>
 <div class="sm:col-span-2">
                  <label for="RCD_diagnosis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnosis</label>
                  <select  wire:model="RCD_diagnosis"  id="RCD_diagnosis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="" ></option>
                        <option value="Familial Hypercalciuria" >Familial Hypercalciuria</option>
                        <option value="Dent Disease" >Dent Disease</option>
                        <option value="Distal RTA" >Distal RTA</option>
                        <option value="Any other condition" >Any other condition</option>
                    </select>
              </div>
 <div class="sm:col-span-2">
                  <label for="RCD_renal_calculi_side" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Renal calculi Side</label>
                  <select  wire:model="RCD_renal_calculi_side"  id="RCD_renal_calculi_side" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="" ></option>
                        <option value="Unilateral" >Unilateral</option>
                        <option value="Bilateral" >Bilateral</option>
                    </select>
              </div><div class="sm:col-span-2">
                  <label for="RCD_renal_calculi_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number of calculi</label>
                  <input  wire:model="RCD_renal_calculi_number"  id="RCD_renal_calculi_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
<div class="sm:col-span-2">
                  <label for="RCD_renal_calculi_sizes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sizes of Calculi</label>
                  <textarea  wire:model="RCD_renal_calculi_sizes"  id="RCD_renal_calculi_sizes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </textarea>
              </div><div class="sm:col-span-2">
                  <label for="RCD_renal_calculi_composition" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Composition of Calculi</label>
                  <textarea  wire:model="RCD_renal_calculi_composition"  id="RCD_renal_calculi_composition" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </textarea>
              </div><div class="sm:col-span-2">
                  <label for="RCD_renal_calculi_structuraldefects" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Underlying Structural Defects</label>
                  <textarea  wire:model="RCD_renal_calculi_structuraldefects"  id="RCD_renal_calculi_structuraldefects" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </textarea>
              </div>  
              <div class="sm:col-span-2">
                  <label for="RCD_riskfactors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Risk factors</label>
                  <select  wire:model="RCD_riskfactors"   id="RCD_riskfactors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" multiple>
                      <option value="Family history" >Family history</option>
                      <option value="Increased Salt Intake" >Increased Salt Intake</option>
                      <option value="Reduced Water Intake" >Reduced Water Intake</option>
                      <option value="Obesity /Overweight" >Obesity / Overweight</option>
                      <option value="Hypercalciuria / Hyper Phosphaturia" >Hypercalciuria / Hyper Phosphaturia</option>
                      </select>
              </div>
<div class="sm:col-span-2">
                  <label for="RCD_positiveinx" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Positive investigations</label>
                  <textarea  wire:model="RCD_positiveinx"  id="RCD_positiveinx" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </textarea>
              </div><div class="sm:col-span-2">
                  <label for="RCD_urine_calcium_creatinine" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Urine Calcium / Creatinine Ratio</label>
                  <input  wire:model="RCD_urine_calcium_creatinine"  id="RCD_urine_calcium_creatinine" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>   <div class="sm:col-span-2">
                  <label for="RCD_urine_uricacid_creatinine" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Urine Uric Acid/ Creatinine Ratio</label>
                  <input  wire:model="RCD_urine_uricacid_creatinine"  id="RCD_urine_uricacid_creatinine" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div>   
<div class="sm:col-span-2">
                  <label for="RCD_treatment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">treatment</label>
                  <select  wire:model="RCD_treatment"   id="RCD_treatment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="" ></option>
                      <option value="Non-medical" >Non-medical – increased water intake/ dietary modifications</option>
                      <option value="HCT" >HCT</option>
                      <option value="K Citrate" >K Citrate</option>
                      <option value="Surgical Intervenntions" >Surgical Intervenntions</option>
                      </select>
              </div>

<div class="sm:col-span-2">
                  <label for="RCD_treatment_duration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Treatment Duration</label>
                  <input  wire:model="RCD_treatment_duration"  id="RCD_treatment_duration" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </input>
              </div> 
@if ($RCD_treatment=='Surgical Intervenntions')
              <div class="sm:col-span-2">
                  <label for="RCD_treatment_surgical" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Surgical Interventions</label>
                                    <textarea  wire:model="RCD_treatment_surgical"  id="RCD_treatment_surgical" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      </textarea>
              </div> 
@endif
<div class="sm:col-span-2">
                  <label for="RCD_outcome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Outcome</label>
                  <select  wire:model="RCD_outcome"   id="RCD_outcome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                      <option value="" ></option>
                      <option value="No stones" >No stones</option>
                      <option value="Reduced number, size or both" >Reduced number, size or both</option>
                      <option value="Increased number size or both" >Increased number size oy both</option>
                      <option value="Remained same" >Remained same</option>
                      <option value="" ></option>
                      </select>
              </div>

                          

                <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Notes</label>
                  <textarea  wire:model="Dx_notes"  id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
       
                      </textarea>
        </div><button wire:click='saveRCD' type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Add Data</button>
  </div>
              </div>
</section>
@endif


</h2>





</section>
