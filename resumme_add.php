<?php
        include_once("config.php");

        if(isset($_POST['submit'])){
            $last_name = mysqli_real_escape_string($mysqli, $_POST['last_name']);
            $first_name = mysqli_real_escape_string($mysqli, $_POST['first_name']);
            $middle_name = mysqli_real_escape_string($mysqli, $_POST['middle_name']);
            $sex = mysqli_real_escape_string($mysqli, $_POST['sex']);
            $birthdate = mysqli_real_escape_string($mysqli, $_POST['birthdate']);
            $place_of_birth = mysqli_real_escape_string($mysqli, $_POST['place_of_birth']);
            $status = mysqli_real_escape_string($mysqli, $_POST['status']);
            $citizenship = mysqli_real_escape_string($mysqli, $_POST['citizenship']);
            $pnum = mysqli_real_escape_string($mysqli, $_POST['pnum']);
            $province = mysqli_real_escape_string($mysqli, $_POST['province']);
            $city = mysqli_real_escape_string($mysqli, $_POST['city']);
            $barangay = mysqli_real_escape_string($mysqli, $_POST['barangay']);
            $email = mysqli_real_escape_string($mysqli, $_POST['email']);
            $housenumandstreet = mysqli_real_escape_string($mysqli, $_POST['housenumandstreet']);
            $zipcode = mysqli_real_escape_string($mysqli, $_POST['zipcode']);
            $education1 = mysqli_real_escape_string($mysqli, $_POST['education1']);
            $school_name1 = mysqli_real_escape_string($mysqli, $_POST['school_name1']);
            $degree_course1 = mysqli_real_escape_string($mysqli, $_POST['degree_course1']);
            $year_level1 = mysqli_real_escape_string($mysqli, $_POST['year_level1']);
            $date_attendance1 = mysqli_real_escape_string($mysqli, $_POST['date_attendance1']);
            $awards1 = mysqli_real_escape_string($mysqli, $_POST['awards1']);
            $education2 = mysqli_real_escape_string($mysqli, $_POST['education2']);
            $school_name2 = mysqli_real_escape_string($mysqli, $_POST['school_name2']);
            $degree_course2 = mysqli_real_escape_string($mysqli, $_POST['degree_course2']);
            $year_level2 = mysqli_real_escape_string($mysqli, $_POST['year_level2']);
            $date_attendance2 = mysqli_real_escape_string($mysqli, $_POST['date_attendance2']);
            $awards2  = mysqli_real_escape_string($mysqli, $_POST['awards2']);
            $position1 = mysqli_real_escape_string($mysqli, $_POST['position1']);
            $company_name1 = mysqli_real_escape_string($mysqli, $_POST['company_name1']);
            $work_attendance1 = mysqli_real_escape_string($mysqli, $_POST['work_attendance1']);
            $contribution1 = mysqli_real_escape_string($mysqli, $_POST['contribution1']);
            $position2 = mysqli_real_escape_string($mysqli, $_POST['position2']);
            $company_name2 = mysqli_real_escape_string($mysqli, $_POST['company_name2']);
            $work_attendance2  = mysqli_real_escape_string($mysqli, $_POST['work_attendance2']);
            $contribution2 = mysqli_real_escape_string($mysqli, $_POST['contribution2']);
            $position3 = mysqli_real_escape_string($mysqli, $_POST['position3']);
            $company_name3 = mysqli_real_escape_string($mysqli, $_POST['company_name3']);
            $work_attendance3 = mysqli_real_escape_string($mysqli, $_POST['work_attendance3']);
            $contribution3 = mysqli_real_escape_string($mysqli, $_POST['contribution3']);
            $skill1 = mysqli_real_escape_string($mysqli, $_POST['skill1']);
            $skill2 = mysqli_real_escape_string($mysqli, $_POST['skill2']);
            $skill3 = mysqli_real_escape_string($mysqli, $_POST['skill3']);
            $skill4 = mysqli_real_escape_string($mysqli, $_POST['skill4']);
            $skill5 = mysqli_real_escape_string($mysqli, $_POST['skill5']);
            
            
            $qualification1 = mysqli_real_escape_string($mysqli, $_POST['qualification1']);
            $qualification2 = mysqli_real_escape_string($mysqli, $_POST['qualification2']);
            $qualification3 = mysqli_real_escape_string($mysqli, $_POST['qualification3']);
            $qualification4 = mysqli_real_escape_string($mysqli, $_POST['qualification4']);
            $qualification5 = mysqli_real_escape_string($mysqli, $_POST['qualification5']);
            $ref_name = mysqli_real_escape_string($mysqli, $_POST['ref_name']);
            $position = mysqli_real_escape_string($mysqli, $_POST['position']);
            $company_name = mysqli_real_escape_string($mysqli, $_POST['company_name']);
            $pnumber = mysqli_real_escape_string($mysqli, $_POST['pnumber']);
            $relationship = mysqli_real_escape_string($mysqli, $_POST['relationship']);

    // Prepare the first SQL query
    $sql1 = "INSERT INTO res (last_name, first_name, middle_name, sex, birthdate, place_of_birth, status, citizenship, pnum, province, city, barangay, email, housenumandstreet, zipcode,
        education1, school_name1, degree_course1, year_level1, date_attendance1, awards1,
        education2, school_name2, degree_course2, year_level2, date_attendance2, awards2,
        position1, company_name1, work_attendance1, contribution1,
        position2, company_name2, work_attendance2, contribution2,
        position3, company_name3, work_attendance3, contribution3,
        skill1, skill2, skill3, skill4, skill5, ) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
        , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $query = $mysqli->prepare($sql1);

    if ($query) {
        // Bind parameters
        $query->bind_param("ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",
            $last_name, $first_name, $middle_name, $sex, $birthdate, $place_of_birth,
            $status, $citizenship, $pnum, $province, $city, $barangay, $email, $housenumandstreet, $zipcode,
            $education1, $school_name1, $degree_course1, $year_level1, $date_attendance1, $awards1,
            $education2, $school_name2, $degree_course2, $year_level2, $date_attendance2, $awards2,
            $education3, $school_name3, $degree_course3, $year_level3, $date_attendance3, $awards3,
            $education4, $school_name4, $degree_course4, $year_level4, $date_attendance4, $awards4,
            $education5, $school_name5, $degree_course5, $year_level5, $date_attendance5, $awards5,
            $position1, $company_name1, $work_attendance1, $contribution1,
            $position2, $company_name2, $work_attendance2, $contribution2,
            $position3, $company_name3, $work_attendance3, $contribution3,
            $skill1, $skill2, $skill3, $skill4, $skill5
        );

        if ($query->execute()) {
            $res_id = $mysqli->insert_id;
            // Prepare the second SQL query
            $sql2 = "INSERT INTO qualification (res_id, qualification1, qualification2, qualification3, qualification4, qualification5, 
                ref_name, position, company_name, pnumber, relationship) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $query2 = $mysqli->prepare($sql2);
            $query2->bind_param("issssssssss", $res_id, $qualification1, $qualification2, $qualification3, $qualification4, $qualification5, $ref_name, $position, $company_name, $pnumber, $relationship);
            if ($query2->execute()) {
                echo '<script>alert("Successfully Added!")</script>';
                echo '<script>window.location.href="resume_edit_table.php"</script>';
            } else {
                echo "Error inserting data into 'qualification' table: " . $query2->error;
            }

            // Close the second query
            $query2->close();
        } else {
            echo "Error preparing statement for 'qualification' table: " . $mysqli->error;
        }
    } else {
        echo "Error inserting data into 'res' table: " . $query->error;
    }

    // Close the first query
    $query->close();
} else {
    echo "Error preparing statement for 'res' table: " . $mysqli->error;
}

// Close the database connection
$mysqli->close();
?>
