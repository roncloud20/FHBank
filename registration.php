<?php
    $pageTitle = "Account Registration";
    require_once("assets/header.php");
?>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<main>
   <h2 class="ms-2 p-2">Account Registration Page</h2>    
    <div class="container-fluid d-flex flex-row mb-3 gap-5">
        <div class="row mt-3">
        
            <div class="input-group-md mb-3 p-2 col-5 ms-2">
            <h4>Account Type</h4>
                <select class="form-select" id="inputGroupSelect02">
                    <option selected>Please select</option>
                    <option value="1">Savings</option>
                    <option value="2">Current</option>
                    <option value="3">Fixed</option>
               </select>
            </div>            
            <div class="input-group-md mb-3 p-2 col-5 ms-5">
            <h4>Currency Type</h4>
                <select class="form-select" id="inputGroupSelect02">
                    <option selected>Please select</option>
                    <option value="1">Naira</option>
                    <option value="2">Dollar</option>
                    <option value="3">Pounds</option>
               </select>
            </div>
            <div class=" col-5" >
            <input type="number" class="form-control" placeholder="Enter BVN" aria-label="Enter BVN">
            </div>
       </div>
    </div>
    <h3 class="mt-5 ms-3">Personal Information</h3>
    <p class="ms-3">The information given in this section is considered as the information of the primary account owner information. </p>
    <div class="row">
            <div class="input-group-md mb-3 col-1 ms-3 ">
                <select class="form-select" id="inputGroupSelect02">
                    <option selected>Prefix</option>
                    <option value="1">Mr.</option>
                    <option value="2">Mrs.</option>
                    <option value="3">Miss</option>
               </select>
            </div>
        <div class="col-3">
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col-3">
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
        <div class="col-auto">
            <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
        <div class="input-group-sm">
            <div class="input-group-text">@</div>
               <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username">
            </div>
        </div>  
        <div class="row g-2 ms-2">
        <div class="col-5 ms-2">
            <input type="number" class="form-control" placeholder="Phone" aria-label="Phone number">
        </div>
        <div class="col-5">
            <input type="date" class="form-control" placeholder="Date of Birth" aria-label="Date of birth">
        </div>
        </div> 
        <h6 class="ms-4 mb-3 mt-5" >Residential Address</h6>
        <div class="row ms-2">
            <div class="col-5">
                <input type="text" class="form-control" placeholder="Street Address" aria-label="Address">
            </div>
            <div class="col-5">
                <input type="text" class="form-control" placeholder="Street Address Line 2" aria-label="Address">
            </div>
        </div>
    <div class="row g-3 ms-3">
            <div class="col-3">
                 <input type="text" class="form-control" placeholder="City" aria-label="City">
            </div>
            <div class="col-3">
                 <input type="text" class="form-control" placeholder="State" aria-label="State">
            </div>
        <div class="col-3">
                 <input type="number" class="form-control" placeholder="Zip" aria-label="Zip">
        </div>
    </div>    
    <div class="row g-3 ms-3 d-flex">
    <h6 class="ms-1 mt-5">Citizenship</h6>
        <div class="form-check-sm">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">Nigerian</label>
        </div>
        <div class="form-check-sm">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2"> US Citizen</label>
        </div>
        <div class="form-check-sm">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2"> EU Citizen</label>
        </div>
        <div class="form-check-sm">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2"> Other</label>
        </div>
     </div> 
    <div class="mt-4 row g-3"></div>  
        <div class="input-group-md col-3 ms-3">
                <select class="form-select" id="inputGroupSelect02">
                    <option selected>Marital Status</option>
                    <option value="1">Married</option>
                    <option value="2">Single</option>
                </select>
        </div>
   
        <div class="col-3">
            <input type="text" class="form-control" placeholder="Occupation" aria-label="Occupation">
        </div>
        <div class="col-3">
            <input type="text" class="form-control" placeholder="Employer Name" aria-label="Employer Name">
        </div>
    </div>
    <hr class="mt-5 mb-5 ms-5 col-11 ">
    <p class="ms-4">Do you want to add joint owner to the bank account?</p>
    <div class="d-flex gap-5 ms-4" >
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Yes</label>
        </div>
        <div class="form-check form-check-inline ">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
    </div>
    <hr class="mt-5 mb-5 ms-5 ps-5 col-11">
    <h1 class="ms-4">Joint Owner Information</h1>
    <hr class=" mt-3 mb-5 ms-5 ps-5 col-11">
    <p class="fst-italic ms-4">By signing this form, i acknowledge that the information i've given in this form is accurate and i agree with the terms & conditions.</p>
    <div class="col-12 ms-4">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
       i agree to <a href="#">terms & conditions *</a>
      </label>
    </div>
    </div>   
    <div class="col-sm mt-5 mb-5 ms-4">
      <h5>Date</h5>
      <div class="col-sm col-5">
            <input type="date" class="form-control" placeholder="Date of Birth" aria-label="Date of registration">
        </div>
      </div>
        <h4 class="ms-4">Primary Owner Signature</h4>
    <div class="form-floating col-5 ms-4">
       <textarea class="form-control" placeholder="Sign here" id="floatingTextarea2" style="height: 35px width: 35px"></textarea>
      <label for="floatingTextarea2">Sign here</label>
    </div>    
    <hr class="mt-5 mb-5 col-11 ms-5">
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-danger mb-5" style="width: 25%;">Submit</button>
    </div>
</main> 
<?php
    require_once("assets/footers.php");
?>  
    


    
</body>
</html>