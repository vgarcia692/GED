<?php require_once "includes/dbconn.php" ?>
<?php require_once "includes/functions.php" ?>

<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            // prepare sql and bind parameters
            $stmt = $dbConn->prepare("INSERT INTO ged_applications (entry_term, entry_term_year, l_name, f_name, m_name, suffix, dob, gender, ssn, civil_status, birth_country, ethnicity, sy_phone, sy_st_address, sy_island_atoll, sy_district_village, sy_zip, pr_st_address, pr_island_atoll, pr_district_village, pr_city, pr_state, pr_zip, father_l_name, father_f_name, father_m_name, father_is_living, father_address, father_atoll, father_district, father_city, father_state, father_zip, father_home_phone, father_cell_phone, father_highest_edu, father_occupation_title, father_company, father_work_address, father_work_phone, father_email, mother_l_name, mother_f_name, mother_m_name, mother_is_living, mother_address, mother_atoll, mother_district, mother_city, mother_state, mother_zip, mother_home_phone, mother_cell_phone, mother_highest_edu, mother_occupation_title, mother_company, mother_work_address, mother_work_phone, mother_email, eme_l_name, eme_f_name, eme_m_name, eme_relationship, eme_home_phone, eme_mobile_phone, eme_home_address, eme_atoll, eme_district, eme_city, eme_state, eme_zip, eme_occupation_title, eme_company, eme_email, cc1, cc2, cc3, cc4, cc5, cc6, is_agree) 
            VALUES (:entry_term, :entry_term_year, :l_name, :f_name, :m_name, :suffix, :dob, :gender, :ssn, :civil_status, :birth_country, :ethnicity, :sy_phone, :sy_st_address, :sy_island_atoll, :sy_district_village, :sy_zip, :pr_st_address, :pr_island_atoll, :pr_district_village, :pr_city, :pr_state, :pr_zip, :father_l_name, :father_f_name, :father_m_name, :father_is_living, :father_address, :father_atoll, :father_district, :father_city, :father_state, :father_zip, :father_home_phone, :father_cell_phone, :father_highest_edu, :father_occupation_title, :father_company, :father_work_address, :father_work_phone, :father_email, :mother_l_name, :mother_f_name, :mother_m_name, :mother_is_living, :mother_address, :mother_atoll, :mother_district, :mother_city, :mother_state, :mother_zip, :mother_home_phone, :mother_cell_phone, :mother_highest_edu, :mother_occupation_title, :mother_company, :mother_work_address, :mother_work_phone, :mother_email, :eme_l_name, :eme_f_name, :eme_m_name, :eme_relationship, :eme_home_phone, :eme_mobile_phone, :eme_home_address, :eme_atoll, :eme_district, :eme_city, :eme_state, :eme_zip, :eme_occupation_title, :eme_company, :eme_email, :cc1, :cc2, :cc3, :cc4, :cc5, :cc6, :is_agree)");
            $stmt->bindParam(':entry_term', $_POST['entry_term']);
            $stmt->bindParam(':entry_term_year', $_POST['entry_term_year']);
            $stmt->bindParam(':l_name', $_POST['l_name']);
            $stmt->bindParam(':f_name', $_POST['f_name']);
            $stmt->bindParam(':m_name', $_POST['m_name']);
            $stmt->bindParam(':suffix', $_POST['suffix']);
            $stmt->bindParam(':dob', $_POST['dob']);
            $stmt->bindParam(':gender', $_POST['gender']);
            $stmt->bindParam(':ssn', $_POST['ssn']);
            $stmt->bindParam(':civil_status', $_POST['civil_status']);
            $stmt->bindParam(':birth_country', $_POST['birth_country']);
            $stmt->bindParam(':ethnicity', $_POST['ethnicity']);
            $stmt->bindParam(':sy_phone', $_POST['sy_phone']);
            $stmt->bindParam(':sy_st_address', $_POST['sy_st_address']);
            $stmt->bindParam(':sy_island_atoll', $_POST['sy_island_atoll']);
            $stmt->bindParam(':sy_district_village', $_POST['sy_district_village']);
            $stmt->bindParam(':sy_zip', $_POST['sy_zip']);
            $stmt->bindParam(':pr_st_address', $_POST['pr_st_address']);
            $stmt->bindParam(':pr_island_atoll', $_POST['pr_island_atoll']);
            $stmt->bindParam(':pr_district_village', $_POST['pr_district_village']);
            $stmt->bindParam(':pr_city', $_POST['pr_city']);
            $stmt->bindParam(':pr_state', $_POST['pr_state']);
            $stmt->bindParam(':pr_zip', $_POST['pr_zip']);
            $stmt->bindParam(':father_l_name', $_POST['father_l_name']);
            $stmt->bindParam(':father_f_name', $_POST['father_f_name']);
            $stmt->bindParam(':father_m_name', $_POST['father_m_name']);
            $stmt->bindParam(':father_is_living', $_POST['father_is_living']);
            $stmt->bindParam(':father_address', $_POST['father_address']);
            $stmt->bindParam(':father_atoll', $_POST['father_atoll']);
            $stmt->bindParam(':father_district', $_POST['father_district']);
            $stmt->bindParam(':father_city', $_POST['father_city']);
            $stmt->bindParam(':father_state', $_POST['father_state']);
            $stmt->bindParam(':father_zip', $_POST['father_zip']);
            $stmt->bindParam(':father_home_phone', $_POST['father_home_phone']);
            $stmt->bindParam(':father_cell_phone', $_POST['father_cell_phone']);
            $stmt->bindParam(':father_highest_edu', $_POST['father_highest_edu']);
            $stmt->bindParam(':father_occupation_title', $_POST['father_occupation_title']);
            $stmt->bindParam(':father_company', $_POST['father_company']);
            $stmt->bindParam(':father_work_address', $_POST['father_work_address']);
            $stmt->bindParam(':father_work_phone', $_POST['father_work_phone']);
            $stmt->bindParam(':father_email', $_POST['father_email']);
            $stmt->bindParam(':mother_l_name', $_POST['mother_l_name']);
            $stmt->bindParam(':mother_f_name', $_POST['mother_f_name']);
            $stmt->bindParam(':mother_m_name', $_POST['mother_m_name']);
            $stmt->bindParam(':mother_is_living', $_POST['mother_is_living']);
            $stmt->bindParam(':mother_address', $_POST['mother_address']);
            $stmt->bindParam(':mother_atoll', $_POST['mother_atoll']);
            $stmt->bindParam(':mother_district', $_POST['mother_district']);
            $stmt->bindParam(':mother_city', $_POST['mother_city']);
            $stmt->bindParam(':mother_state', $_POST['mother_state']);
            $stmt->bindParam(':mother_zip', $_POST['mother_zip']);
            $stmt->bindParam(':mother_home_phone', $_POST['mother_home_phone']);
            $stmt->bindParam(':mother_cell_phone', $_POST['mother_cell_phone']);
            $stmt->bindParam(':mother_highest_edu', $_POST['mother_highest_edu']);
            $stmt->bindParam(':mother_occupation_title', $_POST['mother_occupation_title']);
            $stmt->bindParam(':mother_company', $_POST['mother_company']);
            $stmt->bindParam(':mother_work_address', $_POST['mother_work_address']);
            $stmt->bindParam(':mother_work_phone', $_POST['mother_work_phone']);
            $stmt->bindParam(':mother_email', $_POST['mother_email']);
            $stmt->bindParam(':eme_l_name', $_POST['eme_l_name']);
            $stmt->bindParam(':eme_f_name', $_POST['eme_f_name']);
            $stmt->bindParam(':eme_m_name', $_POST['eme_m_name']);
            $stmt->bindParam(':eme_relationship', $_POST['eme_relationship']);
            $stmt->bindParam(':eme_home_phone', $_POST['eme_home_phone']);
            $stmt->bindParam(':eme_mobile_phone', $_POST['eme_mobile_phone']);
            $stmt->bindParam(':eme_home_address', $_POST['eme_home_address']);
            $stmt->bindParam(':eme_atoll', $_POST['eme_atoll']);
            $stmt->bindParam(':eme_district', $_POST['eme_district']);
            $stmt->bindParam(':eme_city', $_POST['eme_city']);
            $stmt->bindParam(':eme_state', $_POST['eme_state']);
            $stmt->bindParam(':eme_zip', $_POST['eme_zip']);
            $stmt->bindParam(':eme_occupation_title', $_POST['eme_occupation_title']);
            $stmt->bindParam(':eme_company', $_POST['eme_company']);
            $stmt->bindParam(':eme_email', $_POST['eme_email']);
            $stmt->bindParam(':cc1', $_POST['cc1']);
            $stmt->bindParam(':cc2', $_POST['cc2']);
            $stmt->bindParam(':cc3', $_POST['cc3']);
            $stmt->bindParam(':cc4', $_POST['cc4']);
            $stmt->bindParam(':cc5', $_POST['cc5']);
            $stmt->bindParam(':cc6', $_POST['cc6']);
            $stmt->bindParam(':is_agree', $_POST['is_agree']);

            // do the insert
            $stmt->execute();

            // Go back to new applicant page with success message.
            redirect_to("http://localhost/ged/new_applicant.php?success=1");

        } catch(PDOException $err) {
            
            error_log($err);
            // Go back to new applicant page with error.
            redirect_to("http://localhost/ged/new_applicant.php?success=0");           
            
        }
    } else {

        redirect_to("http://localhost/ged");

    }
    
?>