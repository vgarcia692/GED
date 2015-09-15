<?php require_once "includes/dbconn.php" ?>
<?php require_once "includes/functions.php" ?>
<?php include "includes/layouts/header.php" ?>

  <body>
    <!-- Navigation -->
    <?php include "includes/layouts/nav.php" ?>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">

        <?php if (isset($_GET["success"])) { ?>
            <?php if ($_GET["success"] == 1) { ?>
                <h3><label class="label label-success">GED Applicant Added Successfully</label></h3>
            <?php } elseif ($_GET["success"] == 0) { ?>
                <h3><label class="label label-danger">GED Applicant Was NOT Added. Please try again.</label></h3>
            <?php } ?>
        <?php } ?>

        <form action="add_applicant.php" method="POST" role="form">
            <h1>New GED Applicant</h2>
            <p>Instructions: ALL SECTIONS MUST BE COMPLETED.</p>
            <P>Write NA on the space when an item is not applicalbe.  Do not leave any item unanswered. Failure to do so can delay processing of your application. The status of application cannot be determined without the required records</P>

            <div class="form-group">
                <label for="entry_term">Entry Term</label>
                <select class="form-control" id="entry_term" name="entry_term"required>
                    <option>Fall</option>
                    <option>Spring</option>
                    <option>Summer</option>
                </select>
            </div>

            <div class="form-group">
                <label for="entry_term_year">Entry Term Year</label>
                <input type="number" class="form-control" id="entry_term_year" name="entry_term_year"r equired>
            </div>

            <h2>Personal Information</h2>

            <legend>Legal Name</legend>
            
            <div class="form-group">
                <label for="l_name">Last Name</label>
                <input type="text" class="form-control" id="l_name"  name="l_name" required>
            </div>

            <div class="form-group">
                <label for="f_name">Given Name</label>
                <input type="text" class="form-control" id="f_name" name="f_name" required>
            </div>

            <div class="form-group">
                <label for="m_name">Middle Name</label>
                <input type="text" class="form-control" id="m_name" name="m_name" required>
            </div>

            <div class="form-group">
                <label for="suffix">Suffix</label>
                <input type="text" class="form-control" id="suffix" name="suffix" required>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="ssn">Social Security Number</label>
                <input type="text" class="form-control" id="ssn" name="ssn" required>
            </div>

            <div class="form-group">
                <label for="civil_status">Civil Status</label>
                <select class="form-control" id="civil_status" name="civil_status" required>
                    <option>Single</option>
                    <option>Married</option>
                    <option>Separated</option>
                    <option>Widowed</option>
                    <option>Divorced</option>
                </select>
            </div>

            <legend>Place of Birth</legend>

            <div class="form-group">
                <label for="birth_country">Country of Birth</label>
                <input type="text" class="form-control" id="birth_country" name="birth_country" required>
            </div>

            <div class="form-group">
                <label for="ethnicity">Ethnicity/Race</label>
                <input type="text" class="form-control" id="ethnicity" name="ethnicity" required>
            </div>

            <legend>School Year Residential Address of Student</legend>
            <div class="form-group">
                <label for="sy_phone">Telephone/Cell number</label>
                <input type="text" class="form-control" id="sy_phone" name="sy_phone" required>
            </div>

            <div class="form-group">
                <label for="sy_st_address">Street Address</label>
                <input type="text" class="form-control" id="sy_st_address" name="sy_st_address" required>
            </div>

            <div class="form-group">
                <label for="sy_island_atoll">Island/Atoll</label>
                <input type="text" class="form-control" id="sy_island_atoll" name="sy_island_atoll" required>
            </div>

            <div class="form-group">
                <label for="sy_district_village">District/Village</label>
                <input type="text" class="form-control" id="sy_district_village" name="sy_district_village" required>
            </div>

            <div class="form-group">
                <label for="sy_zip">Postal/Zip Code</label>
                <input type="text" class="form-control" id="sy_zip" name="sy_zip" required>
            </div>

            <legend>Permanant Family Address of Student</legend>

            <div class="form-group">
                <label for="pr_st_address">Street Address</label>
                <input type="text" class="form-control" id="pr_st_address" name="pr_st_address" required>
            </div>

            <div class="form-group">
                <label for="pr_island_atoll">Island/Atoll</label>
                <input type="text" class="form-control" id="pr_island_atoll" name="pr_island_atoll" required>
            </div>

            <div class="form-group">
                <label for="pr_district_village">District/Village</label>
                <input type="text" class="form-control" id="pr_district_village" name="pr_district_village" required>
            </div>

            <div class="form-group">
                <label for="pr_city">City/Province</label>
                <input type="text" class="form-control" id="pr_city" name="pr_city" required>
            </div>

            <div class="form-group">
                <label for="pr_state">State, if in U.S.</label>
                <input type="text" class="form-control" id="pr_state" name="pr_state" required>
            </div>

            <div class="form-group">
                <label for="pr_zip">Postal/Zip Code</label>
                <input type="text" class="form-control" id="pr_zip" name="pr_zip" required>
            </div>

            <h2>Family Background</h2>
            <legend>Name of Father</legend>

            <div class="form-group">
                <label for="father_l_name">Last Name</label>
                <input type="text" class="form-control" id="father_l_name" name="father_l_name" required>
            </div>

            <div class="form-group">
                <label for="father_f_name">First Name</label>
                <input type="text" class="form-control" id="father_f_name" name="father_f_name" required>
            </div>

            <div class="form-group">
                <label for="father_m_name">Middle Name</label>
                <input type="text" class="form-control" id="father_m_name" name="father_m_name" required>
            </div>

            <div class="form-group">
                <label for="father_is_living">Living?</label>
                <select class="form-control" id="father_is_living" name="father_is_living" required>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="father_address">Home Address</label>
                <input type="text" class="form-control" id="father_address" name="father_address" required>
            </div>

            <div class="form-group">
                <label for="father_atoll">Island/Atoll</label>
                <input type="text" class="form-control" id="father_atoll" name="father_atoll" required>
            </div>

            <div class="form-group">
                <label for="father_district">District/Village</label>
                <input type="text" class="form-control" id="father_district"  name="father_district" required>
            </div>

            <div class="form-group">
                <label for="father_city">City/Province</label>
                <input type="text" class="form-control" id="father_city" name="father_city" required>
            </div>

            <div class="form-group">
                <label for="father_state">State, if in U.S.</label>
                <input type="text" class="form-control" id="father_state" name="father_state" required>
            </div>

            <div class="form-group">
                <label for="father_zip">Postal/Zip Code</label>
                <input type="text" class="form-control" id="father_zip" name="father_zip" required>
            </div>

            <div class="form-group">
                <label for="father_home_phone">Home Phone No.</label>
                <input type="text" class="form-control" id="father_home_phone" name="father_home_phone" required>
            </div>

            <div class="form-group">
                <label for="father_cell_phone">Mobile Phone No.</label>
                <input type="text" class="form-control" id="father_cell_phone" name="father_cell_phone" required>
            </div>

            <div class="form-group">
                <label for="father_highest_edu">Highest Education Attainment</label>
                <input type="text" class="form-control" id="father_highest_edu" name="father_highest_edu" required>
            </div>

            <div class="form-group">
                <label for="father_occupation_title">Occupation/Title</label>
                <input type="text" class="form-control" id="father_occupation_title" name="father_occupation_title" required>
            </div>

            <div class="form-group">
                <label for="father_company">Company Name</label>
                <input type="text" class="form-control" id="father_company" name="father_company" required>
            </div>

            <div class="form-group">
                <label for="father_work_address">Work Address</label>
                <input type="text" class="form-control" id="father_work_address" name="father_work_address" required>
            </div>

            <div class="form-group">
                <label for="father_work_phone">Work Phone No.</label>
                <input type="text" class="form-control" id="father_work_phone" name="father_work_phone" required>
            </div>

            <div class="form-group">
                <label for="father_email">Email</label>
                <input type="email" class="form-control" id="father_email" name="father_email" required>
            </div>

            <legend>Name of Mother</legend>

            <div class="form-group">
                <label for="mother_l_name">Last Name</label>
                <input type="text" class="form-control" id="mother_l_name" name="mother_l_name" required>
            </div>

            <div class="form-group">
                <label for="mother_f_name">First Name</label>
                <input type="text" class="form-control" id="mother_f_name" name="mother_f_name" required>
            </div>

            <div class="form-group">
                <label for="mother_m_name">Middle Name</label>
                <input type="text" class="form-control" id="mother_m_name" name="mother_m_name" required>
            </div>

            <div class="form-group">
                <label for="mother_is_living">Living?</label>
                <select class="form-control" id="mother_is_living" name="mother_is_living" required>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="mother_address">Home Address</label>
                <input type="text" class="form-control" id="mother_address" name="mother_address" required>
            </div>

            <div class="form-group">
                <label for="mother_atoll">Island/Atoll</label>
                <input type="text" class="form-control" id="mother_atoll" name="mother_atoll" required>
            </div>

            <div class="form-group">
                <label for="mother_district">District/Village</label>
                <input type="text" class="form-control" id="mother_district" name="mother_district" required>
            </div>

            <div class="form-group">
                <label for="mother_city">City/Province</label>
                <input type="text" class="form-control" id="mother_city" name="mother_city" required>
            </div>

            <div class="form-group">
                <label for="mother_state">State, if in U.S.</label>
                <input type="text" class="form-control" id="mother_state" name="mother_state" required>
            </div>

            <div class="form-group">
                <label for="mother_zip">Postal/Zip Code</label>
                <input type="text" class="form-control" id="mother_zip" name="mother_zip" required>
            </div>

            <div class="form-group">
                <label for="mother_home_phone">Home Phone No.</label>
                <input type="text" class="form-control" id="mother_home_phone" name="mother_home_phone" required>
            </div>

            <div class="form-group">
                <label for="mother_cell_phone">Mobile Phone No.</label>
                <input type="text" class="form-control" id="mother_cell_phone" name="mother_cell_phone" required>
            </div>

            <div class="form-group">
                <label for="mother_highest_edu">Highest Education Attainment</label>
                <input type="text" class="form-control" id="mother_highest_edu" name="mother_highest_edu" required>
            </div>

            <div class="form-group">
                <label for="mother_occupation_title">Occupation/Title</label>
                <input type="text" class="form-control" id="mother_occupation_title" name="mother_occupation_title" required>
            </div>

            <div class="form-group">
                <label for="mother_company">Company Name</label>
                <input type="text" class="form-control" id="mother_company" name="mother_company" required>
            </div>

            <div class="form-group">
                <label for="mother_work_address">Work Address</label>
                <input type="text" class="form-control" id="mother_work_address" name="mother_work_address" required>
            </div>

            <div class="form-group">
                <label for="mother_work_phone">Work Phone No.</label>
                <input type="text" class="form-control" id="mother_work_phone" name="mother_work_phone" required>
            </div>

            <div class="form-group">
                <label for="mother_email">Email</label>
                <input type="email" class="form-control" id="mother_email" name="mother_email" required>
            </div>

            <h2>Emergency Contact</h2>
            <p>Please provide the name of a contact person other than your parents whom the Admissions Office can call.</p>

            <div class="form-group">
                <label for="eme_l_name">Last Name</label>
                <input type="text" class="form-control" id="eme_l_name" name="eme_l_name" required>
            </div>

            <div class="form-group">
                <label for="eme_f_name">First Name</label>
                <input type="text" class="form-control" id="eme_f_name" name="eme_f_name" required>
            </div>

            <div class="form-group">
                <label for="eme_m_name">Middle Name</label>
                <input type="text" class="form-control" id="eme_m_name" name="eme_m_name" required>
            </div>

            <div class="form-group">
                <label for="eme_relationship">Relationship</label>
                <input type="text" class="form-control" id="eme_relationship" name="eme_relationship" required>
            </div>

            <div class="form-group">
                <label for="eme_home_phone">Home Phone No.</label>
                <input type="text" class="form-control" id="eme_home_phone" name="eme_home_phone" required>
            </div>

            <div class="form-group">
                <label for="eme_mobile_phone">Mobile Phone</label>
                <input type="text" class="form-control" id="eme_mobile_phone" name="eme_mobile_phone" required>
            </div>

            <div class="form-group">
                <label for="eme_home_address">Home Address</label>
                <input type="text" class="form-control" id="eme_home_address" name="eme_home_address" required>
            </div>

            <div class="form-group">
                <label for="eme_atoll">Island/Atoll</label>
                <input type="text" class="form-control" id="eme_atoll" name="eme_atoll" required>
            </div>

            <div class="form-group">
                <label for="eme_district">District/Village</label>
                <input type="text" class="form-control" id="eme_district" name="eme_district" required>
            </div>

            <div class="form-group">
                <label for="eme_city">City/Province</label>
                <input type="text" class="form-control" id="eme_city" name="eme_city" required>
            </div>

            <div class="form-group">
                <label for="eme_state">State, if in U.S.</label>
                <input type="text" class="form-control" id="eme_state" name="eme_state" required>
            </div>

            <div class="form-group">
                <label for="eme_zip">Postal/Zip Code</label>
                <input type="text" class="form-control" id="eme_zip" name="eme_zip" required>
            </div>

            <div class="form-group">
                <label for="eme_occupation_title">Occupation/Title</label>
                <input type="text" class="form-control" id="eme_occupation_title" name="eme_occupation_title" required>
            </div>

            <div class="form-group">
                <label for="eme_company">Company Name</label>
                <input type="text" class="form-control" id="eme_company" name="eme_company" required>
            </div>

            <div class="form-group">
                <label for="eme_email">Email</label>
                <input type="email" class="form-control" id="eme_email" name="eme_email" required>
            </div>

            <h2>Character And Conduct</h2>
            <p>The College of the Marshall Island strives to provide a safe campus and learning environment. The College thus asks questions about an applicant's criminal history. An affirmative response to any of these question will not result in an automatic denial of admission or enrollment. All relevant circumstances will be considered. The College reserves the right to request further information from the applicant to verify the information disclosed. In addition, applicants who are admitted may be required, as a condition of participation in certain programs, to complete a criminal history consent form, and agree to a criminal background check.</p>

            <div class="form-group">
                <label for="cc1">You are obliged to notify the Office of Admission and Records at the College of the Marshall Islands/GED if there are any changes to the responses below between submission of the application and enrollment at the College</label>
               <select class="form-control" id="cc1" name="cc1" required>
                   <option value="1">Yes</option>
                   <option value="0">No</option>
               </select>
            </div>

            <div class="form-group">
                <label for="cc2">Has disciplinary action has been initiated or taken against you at any of the institutions attended, including the College of the Marshall Islands?</label>
               <select class="form-control" id="cc2" name="cc2" required>
                   <option value="1">Yes</option>
                   <option value="0">No</option>
               </select>
            </div>

            <div class="form-group">
                <label for="cc3">Have you ever been charged with, pleaded guilty to, or been found guilty of any criminal offense, other than minor traffic violation, for which charges have not been expunged?</label>
               <select class="form-control" id="cc3" name="cc3" required>
                   <option value="1">Yes</option>
                   <option value="0">No</option>
               </select>
            </div>

            <div class="form-group">
                <label for="cc4">Do you currently have criminal charges pending against you, excluding minor traffic violations?</label>
               <select class="form-control" id="cc4" name="cc4" required>
                   <option value="1">Yes</option>
                   <option value="0">No</option>
               </select>
            </div>

            <div class="form-group">
                <label for="cc5">Have you ever received formal desiplinary action or a dishonorable discharge from any branch of the military</label>
               <select class="form-control" id="cc5" name="cc5" required>
                   <option value="1">Yes</option>
                   <option value="0">No</option>
               </select>
            </div>

            <div class="form-group">
                <label for="cc6">If you answered yes to any of the questions above, please provide a detailed statement describing the situation and its resolution.</label>
               <textarea class="form-control" id="cc6" name="cc6" required></textarea>
            </div>

            <h2>Agreement</h2>

            <p>I certify that the information on this application is complete and correct. I understand providing false information to any of the question will result in referral through the student disciplinary process. It may also result in my application being canceled or my admission being rescinded.</p>
            <br>
            <p>By signing this document I agree to submit the application and pay the nonrefundable application fee unless the fee has been waived. Submission of the application indicates a serious interest in applying to the College of Marshall Islands. The fee will not be refunded if I choose not to submit all application materials, cancel my application or disagree with the college's admission decision.</p>
            <br>
            <p>I agree to abide by the rules policies and regulations of the College of the Marshall Islands, including the following Honor Statement:</p>
            <br>
            <p>All documents received are the property of College of the Marshall Islands and will not be released or reproduced for students. I understand that I will make duplicate copies of all documents for my record before submitting to Admission's Office.</p>
            <br>

            <div>
                <label for="is_agree">Agree to Conditions Above: </label>
                <input id="is_agree" type="checkbox" value="1" name="is_agree" required>
            </div>
            <br>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

    </div> <!-- /container -->

  </body>

<?php include "includes/layouts/footer.php" ?>

