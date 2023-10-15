<div>
<div class="m-5">
    <h2 class="my-4">Basic Dermographics</h2>
  <div class="relative z-0 mb-6 w-full group">
      <input  type="text" name="idnumber" id="idnumber" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{$patientIDfromURL}}" disabled />
      <label for="idnumber" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Identification Number</label>
  </div>

    <label for="Registered Hospital" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Registered Hospital</label>
    <div class="grid md:grid-cols-3 md:gap-6  m-4">
    <div class="relative z-0 mb-6 w-full group">
    <input type="text" name="" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{$userlocationhospitaltext->userlocationhospitalid}}" disabled />
      <label for="" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hospital</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
    <input wire:model="healthInstitution_Number"  type="text" name="healthInstitution_Number" id="healthInstitution_Number" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="" disabled />
      <label for="healthInstitution_Number" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hospital Code</label>
      @error('description')
                <span class="text-red-600">{{ $message }}</span>
      @enderror
    </div>
    <div   class="relative z-0 mb-6 w-full group">
        <input wire:model.lazy="healthInstitution_Location" type="text" name="HospitalLocation" id="HospitalLocation" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " disabled  />
        <label for="HospitalLocation" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hospital Location</label>
    </div>
  </div>



        <label for="clinicbhtopdnumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clinic/BHT/OPD Number</label>
    <div class="flex  mb-6 md:grid-cols-2 md:gap-6">
      <div class="relative w-full p-2 rounded-lg @error('institution_ID_Type')
border-red-500	 border-2
@enderror
">
<select wire:model.lazy="institution_ID_Type" id="clinicbhtopdnumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected>Choose</option>
  <option value="BHT Number">BHT Number</option>
  <option value="Clinic Number">Clinic Number</option>
  <option value="OPD Number">OPD Number</option>
</select>
        </div>

<div class="relative w-full p-2 rounded-lg @error('institution_ID_Number')
border-red-500	 border-2
@enderror
">
            <input wire:model.lazy="institution_ID_Number" type="" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-100 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Number">
        </div>
    </div>



  <div class="relative z-0 mb-6 w-full group  p-2 rounded-lg @error('patient_birthday')
border-red-500	 border-2
@enderror">
        <label for="clinicbhtopdnumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthday</label>
      <input wire:model.lazy="patient_birthday"  value="" type="date" id="" onfocus="this.showPicker()" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
  </div>
         <div class="grid md:grid-cols-2 md:gap-6  my-4 p-2  rounded-lg @error('patient_gender')
border-red-500	 border-2
@enderror">
     
<label for="patient_gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
<select  wire:model.lazy="patient_gender"   id="patient_gender"   name="patient_gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  <option selected>Choose gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
  </div>

    <div class="grid md:grid-cols-2 md:gap-6 my-4 p-2  rounded-lg @error('patient_ethnicity')
border-red-500	 border-2
@enderror">

          <label for="ethnicity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ethnicity</label>
<select  wire:model.lazy="patient_ethnicity"   id="ethnicity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  <option selected>Choose ethnicity</option>
  <option value="Male">Sinhalese</option>
  <option value="Tamils">Tamil</option>
  <option value="Muslims">Muslim</option>
  <option value="Other">Other</option>
</select>
    </div>    

 <label for="Registered Hospital" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age of Primary Diagnosis</label>
    <div class="grid md:grid-cols-2 md:gap-6  m-4">
    <div class="relative z-0 mb-6 w-full group
     @error('patient_age_of_primary_diagnosis_years')
border-red-500	 border-2 rounded-lg p-2
@enderror
    ">
    <input wire:model.lazy="patient_age_of_primary_diagnosis_years" min="0" max="50"  type="number" name="patient_age_of_primary_diagnosis_years" id="patient_age_of_primary_diagnosis_years" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value=""  />
      <label for="" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Years</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
    <input wire:model.lazy="patient_age_of_primary_diagnosis_months" min="1" max="12"  type="number" name="patient_age_of_primary_diagnosis_months" id="patient_age_of_primary_diagnosis_months" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value=""  />
      <label for="" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Months</label>
    </div>

  </div>


<h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Primary Diagnosis</h3>
<ul class="
 @error('patient_primary_diagnosis')
border-red-500	 border-2
@enderror

my-4 items-center w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input readonly disabled  wire:model="patient_primary_diagnosis"   id="primary_dagnosis_ns" type="radio" value="NS" name="radio_diagnosis" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="primary_dagnosis_ns" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Nephrotic Syndrome</label>
        </div>
    </li>
    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input  readonly disabled    wire:model="patient_primary_diagnosis"   id="primary_dagnosis_cackut" type="radio" value="CAK" name="radio_diagnosis" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="primary_dagnosis_cackut" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">CAKUT</label>
        </div>
    </li>
    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input   readonly disabled   wire:model="patient_primary_diagnosis"  id="primary_dagnosis_ckd" type="radio" value="CKD" name="radio_diagnosis" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="primary_dagnosis_ckd" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Chronic Kidney Disease</label>
        </div>
    </li>
    <li class="w-full dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input   readonly disabled   wire:model="patient_primary_diagnosis"   id="primary_dagnosis_agn" type="radio" value="AGN" name="radio_diagnosis" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="primary_dagnosis_agn" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">AGN</label>
        </div>
    </li>
    <li class="w-full dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input  readonly disabled    wire:model="patient_primary_diagnosis"   id="primary_dagnosis_sle" type="radio" value="SLE" name="radio_diagnosis" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="primary_dagnosis_sle" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">SLE</label>
        </div>
    </li>
    <li class="w-full dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input   readonly disabled    wire:model="patient_primary_diagnosis"  id="primary_dagnosis_iga" type="radio" value="IGA" name="radio_diagnosis" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="primary_dagnosis_iga" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">IGA</label>
        </div>
    </li>
    <li class="w-full dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input   readonly disabled    wire:model="patient_primary_diagnosis"  id="primary_dagnosis_aki" type="radio" value="AKI" name="radio_diagnosis" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="primary_dagnosis_aki" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">AKI</label>
        </div>
    </li>
</ul >

  <label for="Dermograhics" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Geographics</label>
    <div class="grid md:grid-cols-2 md:gap-6  m-4">

    <div class="relative z-0 mb-6 w-full group
     @error('patientdistrict')
border-red-500	rounded-lg border-2 p-2
@enderror
    ">
        
                <select wire:model.lazy="patientdistrict" type="text" name="District" id="District"                 
                class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected>Choose</option>
  <option value="Ampara" >Ampara</option>
  <option value="Anuradhapura">Anuradhapura</option>
  <option value="Badulla">Badulla</option>
  <option value="Batticaola">Batticaola</option>
  <option value="Colombo">Colombo</option>
  <option value="Galle">Galle</option>
  <option value="Gampaha">Gampaha</option>
  <option value="Hambantota">Hambantota</option>
  <option value="Jaffna">Jaffna</option>
  <option value="Kalutara">Kalutara</option>
  <option value="Kandy">Kandy</option>
  <option value="Kegalle">Kegalle</option>
  <option value="Kilinochchi">Kilinochchi</option>
  <option value="Kurunegala">Kurunegala</option>
  <option value="Mannar">Mannar</option>
  <option value="Matale">Matale</option>
  <option value="Matara">Matara</option>
  <option value="Moneragala">Moneragala</option>
  <option value="Mullaithivu">Mullaithivu</option>
  <option value="Nuwara Eliya">Nuwara Eliya</option>
  <option value="Polonnaruwa">Polonnaruwa</option>
  <option value="Puttalam">Puttalam</option>
  <option value="Ratnapura">Ratnapura</option>
  <option value="Trincomalee">Trincomalee</option>
  <option value="Vavuniya">Vavuniya</option>
</select>
        <label for="District" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">District</label>
    </div>
      <div class="relative z-0 mb-6 w-full group"
           @error('patient_moh')
border-red-500	rounded-lg border-2 p-2
@enderror
      ><select wire:model.defer="patient_moh" type="text" name="District" id="MOHSelect"                 
                class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              @foreach ($mohlist as $mohlistsingle )
                  <option value="{{ucwords($mohlistsingle->moharea)}}">{{ucwords($mohlistsingle->moharea)}}</option>

              @endforeach
              </select>
        <label for="height" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">MOH</label>
         
    </div>
  </div>
  
      <div class="grid md:grid-cols-1 md:gap-6  m-4">

  <div class="relative z-0 mb-6 w-full group">
      <input wire:model.defer="patient_contact_number" type="tel" name="contactnumber" id="contactnumber" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="contactnumber" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contact Number</label>

   
  </div>
  </div>
    @if(count($errors)> 1)
 

  

  <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
  <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
   Kindly fill all required fields before submitting.
  </div>
  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert-2" aria-label="Close">
    <span class="sr-only">Close</span>
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </button>
</div>
   @endif

   

  <button wire:click="saveandaddnewchild()" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</div>

</div>
