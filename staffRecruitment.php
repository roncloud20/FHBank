<?php 
    $pageTitle = "Staff Registration";
    require_once("assets/header.php");
?>
<link rel="stylesheet" href="fhbCSS/staffRec.css">

<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<form>
    <h2> STAFF RECRUITMENT FORM</h2>
    <i> With Detailed Description</i>

    <div id="employ" class="pt-4">
        <div class="col-md-6" id="empi">
            <label class="form-label">Employer</label>
            <input type="text" class="form-control" >
        </div>
        <div class=row>
            <div class="col-3" id="jobT">
                <label>Job Title</label>
                <input type="text" class="form-control" aria-label="jobTitle">
            </div>
            <div class="col-3">
                <label>Job Order</label>
                <input type="text" class="form-control" placeholder="#" aria-label="jobOrder">
            </div>
        </div>
    </div>

    <!-- ******PERSONAL DATA****** -->
    <h4>PERSONAL DATA</h4>
    <div class="row">
        <p>Full Name</p>
        <div class="input-group-md mb-2 col-1">
                <select class="form-select" id="inputGroupSelect02">
                    <option selected>...</option>
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
        <div class="col-3">
            <input type="text" class="form-control" placeholder="Middle name" aria-label="Middle name">
        </div>

    </div>
        
        <div class="col-6" id="addy">
            <label for="inputAddress" class="form-label"> Present Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="row g-3">
            <div class="col-sm-3">
                <input type="text" class="form-control" placeholder="City" aria-label="City">
            </div>
            <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="State" aria-label="State">
            </div>
            <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
            </div>
        </div>

        <div class="col-2 pt-2">
            <p>Nationality</p>
            <label class="visually-hidden" for="autoSizingSelect">Preference</label>
            <select class="form-select" id="autoSizingSelect">
            <option selected>Choose...</option>
            <option value="1">Nigeria</option>
            <option value="2">Other</option>
            </select>
        </div>
         
        <div class="row" id="addy">
            <div class="col-5">
                <label for="colFormLabel" class="col-sm-1 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="tel" class="form-control" id="colFormLabel" placeholder="phone number">
                </div>
            </div>
            <div class="col-5">
                <label for="colFormLabel" class="col-sm-1 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="colFormLabel" placeholder="abc@email.com">
                </div>
            </div>
        </div>
    <br/>

    <!-- ********EDUCATION****** -->

    <h4>EDUCATION</h4>
        <div>
            <p>High School Diploma/GED/HiSET?</p>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Yes</label>
            </div>

            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">No</label>
            </div>
        </div>

        <div id="employ">
            <div class="row mb-3" id="addy">
                <label for="colFormLabel" class="col-sm-1 col-form-label">High School</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="colFormLabel" placeholder="Name - Location - Phone - Diploma/Degree/Specification">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-1 col-form-label">College / University</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="colFormLabel" placeholder="Name - Location - Phone - Diploma/Degree/Specification">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-1 col-form-label">Courses & Training</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="colFormLabel" placeholder="Name - Location - Phone - Diploma/Degree/Specification">
                </div>
            </div>
        </div>

        <!-- ******WORK****** -->

        <h4>WORK EXPERIENCE</h4>
        <i>(List most recent work experience first)</i>
        <div class="row" id="padyT">
        <div class="col-md-4" id="margR">
            <label class="form-label">Company Name</label>
            <input type="text" class="form-control" >
        </div>
        <div class="col-md-4">
            <label class="form-label">Immediate Supervisor</label>
            <input type="text" class="form-control" >
        </div>
        </div>
      
        <div class="row g-3" id="addy">
            <div class="col-sm-3">
                <input type="text" class="form-control" placeholder="Street/P.O Box" aria-label="street">
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control" placeholder="City" aria-label="City">
            </div>
            <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="State" aria-label="State">
            </div>
            <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
            </div>
        </div>
        <div class=row>
            <div class="col-3" id="jobT">
                <label>Job Title</label>
                <input type="text" class="form-control" aria-label="jobTitle" placeholder="Role">
            </div>
            <div class="col-3">
                <label>Phone</label>
                <input type="tel" class="form-control" aria-label="phone" placeholder="Phone Number">
            </div>
        </div>
        <div id="addy">
            <p>Job Description</p>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2"><i>Duties, Skills, Equipment Used</i></label>
            </div>
        </div>
        <div class="row">
            <p>Date</p>
            <div class="col-2">
                <input type="date" class="form-control" placeholder="date" aria-label="Date">
                <label>From</label>
            </div>
            <div class="col-2">
                <input type="date" class="form-control" placeholder="date" aria-label="Date">
                <label>To</label>
            </div>
        </div>

        <div class="col-md-4 pt-5">
            <label class="form-label">Reason For Leaving</label>
            <input type="text" class="form-control" >
        </div>

        <br/>

        <!-- ****WORK**** -->
        <h4>WORK EXPERIENCE</h4>
        <div class="row" id="padyT">
        <div class="col-md-4" id="margR">
            <label class="form-label">Company Name</label>
            <input type="text" class="form-control" >
        </div>
        <div class="col-md-4">
            <label class="form-label">Immediate Supervisor</label>
            <input type="text" class="form-control" >
        </div>
        </div>
      
        <div class="row g-3" id="addy">
            <div class="col-sm-3">
                <input type="text" class="form-control" placeholder="Street/P.O Box" aria-label="street">
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control" placeholder="City" aria-label="City">
            </div>
            <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="State" aria-label="State">
            </div>
            <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
            </div>
        </div>
        <div class=row>
            <div class="col-3" id="jobT">
                <label>Job Title</label>
                <input type="text" class="form-control" aria-label="jobTitle" placeholder="Role">
            </div>
            <div class="col-3">
                <label>Phone</label>
                <input type="tel" class="form-control" aria-label="phone" placeholder="Phone Number">
            </div>
        </div>
        <div id="addy">
            <p>Job Description</p>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2"><i>Duties, Skills, Equipment Used</i></label>
            </div>
        </div>
        <div class="row">
            <p>Date</p>
            <div class="col-2">
                <input type="date" class="form-control" placeholder="date" aria-label="Date">
                <label>From</label>
            </div>
            <div class="col-2">
                <input type="date" class="form-control" placeholder="date" aria-label="Date">
                <label>To</label>
            </div>
        </div>

        
        <div class="col-md-4" id="padyT">
            <label class="form-label">Reason For Leaving</label>
            <input type="text" class="form-control" >
        </div>

        <div id="addy">
            <h5 id="padyT">ATTESTATION</h5>
            <p>Attach a passport file</p>
            <div class="input-group">
                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                </select>
                <button class="btn btn-outline-secondary" type="button">Upload</button>
            </div>

            <p class="pt-2">Attach a copy of your CV</p>
            <div class="input-group">
                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                </select>
                <button class="btn btn-outline-secondary" type="button">Upload</button>
            </div>
            
            <p class="pt-2">Signature</p>
            <div class="form-floating col-5">
                <textarea class="form-control" placeholder="Sign here" id="floatingTextarea2" style="height: 35px width: 35px"></textarea>
                <label for="floatingTextarea2">Sign here</label>
            </div>
        </div>

        <div class="col-12 pt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>

<?php
    require_once("assets/footer.php");
?>