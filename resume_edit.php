<?php
include_once("config.php");

$last_name = $first_name = $middle_name = $sex = $birthdate = $place_of_birth = $status = $citizenship = $pnum = $province = $city = $barangay = $email = $housenumandstreet = 
$zipcode = $education1 = $school_name1 = $degree_course1 = $year_level1 = $date_attendance1 = $awards1 = 
$education2 = $school_name2 = $degree_course2 = $year_level2 = $date_attendance2 = $awards2 = $position1 = $company_name1 = $work_attendance1 = $contribution1 = $position2 = $company_name2 = $work_attendance2 = $contribution2 = $position3 = $company_name3 = $work_attendance3 = $contribution3 = $skill1 = $skill2 = $skill3 = $skill4 = $skill5 = $qualification1 = $qualification2 = $qualification3 = $qualification4 = $qualification5 = $ref_name = $position = $company_name = $p_number = $relationship = $eid = "";

if (isset($_POST['update'])) {
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $sex = $_POST['sex'];
    $birthdate = $_POST['birthdate'];
    $place_of_birth = $_POST['place_of_birth'];
    $status = $_POST['status'];
    $citizenship = $_POST['citizenship'];
    $pnum = $_POST['pnum'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $barangay = $_POST['barangay'];
    $email = $_POST['email'];
    $housenumandstreet = $_POST['housenumandstreet'];
    $zipcode = $_POST['zipcode'];
    $education1 = $_POST['education1'];
    $school_name1 = $_POST['school_name1'];
    $degree_course1 = $_POST['degree_course1'];
    $year_level1 = $_POST['year_level1'];
    $date_attendance1 = $_POST['date_attendance1']; 
    $awards1 = $_POST['awards1'];
    $education2 = $_POST['education2'];
    $school_name2 = $_POST['school_name2'];
    $degree_course2 = $_POST['degree_course2'];
    $year_level2 = $_POST['year_level2'];
    $date_attendance2 = $_POST['date_attendance2']; 
    $awards2 = $_POST['awards2'];
    $position1 = $_POST['position1'];
    $company_name1 = $_POST['company_name1'];
    $work_attendance1 = $_POST['work_attendance1'];
    $contribution1 = $_POST['contribution1'];
    $position2 = $_POST['position2'];
    $company_name2 = $_POST['company_name2'];
    $work_attendance2 = $_POST['work_attendance2'];
    $contribution2 = $_POST['contribution2'];
    $position3 = $_POST['position3'];
    $company_name3 = $_POST['company_name3'];
    $work_attendance3 = $_POST['work_attendance3'];
    $contribution3 = $_POST['contribution3'];
    $skill1 = $_POST['skill1'];
    $skill2 = $_POST['skill2'];
    $skill3 = $_POST['skill3'];
    $skill4 = $_POST['skill4'];
    $skill5 = $_POST['skill5'];
    $qualification1 = $_POST['qualification1'];
    $qualification2 = $_POST['qualification2'];
    $qualification3 = $_POST['qualification3'];
    $qualification4 = $_POST['qualification4'];
    $qualification5 = $_POST['qualification5'];
    $ref_name = $_POST['ref_name'];
    $position = $_POST['position'];
    $company_name = $_POST['company_name'];
    $p_number = $_POST['p_number'];
    $relationship = $_POST['relationship'];
    $eid = $_POST['res_id'];
    $result = mysqli_query($mysqli, "UPDATE res SET 
    last_name='" . mysqli_real_escape_string($mysqli, $last_name) . "', 
    first_name='" . mysqli_real_escape_string($mysqli, $first_name) . "', 
    middle_name='" . mysqli_real_escape_string($mysqli, $middle_name) . "', 
    sex='" . mysqli_real_escape_string($mysqli, $sex) . "', 
    birthdate='" . mysqli_real_escape_string($mysqli, $birthdate) . "', 
    place_of_birth='" . mysqli_real_escape_string($mysqli, $place_of_birth) . "', 
    status='" . mysqli_real_escape_string($mysqli, $status) . "', 
    citizenship='" . mysqli_real_escape_string($mysqli, $citizenship) . "', 
    pnum='" . mysqli_real_escape_string($mysqli, $pnum) . "', 
    province='" . mysqli_real_escape_string($mysqli, $province) . "', 
    city='" . mysqli_real_escape_string($mysqli, $city) . "', 
    barangay='" . mysqli_real_escape_string($mysqli, $barangay) . "', 
    email='" . mysqli_real_escape_string($mysqli, $email) . "', 
    housenumandstreet='" . mysqli_real_escape_string($mysqli, $housenumandstreet) . "', 
    zipcode='" . mysqli_real_escape_string($mysqli, $zipcode) . "', 
    education1='" . mysqli_real_escape_string($mysqli, $education1) . "', 
    school_name1='" . mysqli_real_escape_string($mysqli, $school_name1) . "', 
    degree_course1='" . mysqli_real_escape_string($mysqli, $degree_course1) . "', 
    year_level1='" . mysqli_real_escape_string($mysqli, $year_level1) . "', 
    date_attendance1='" . mysqli_real_escape_string($mysqli, $date_attendance1) . "', 
    awards1='" . mysqli_real_escape_string($mysqli, $awards1) . "', 
    education2='" . mysqli_real_escape_string($mysqli, $education2) . "', 
    school_name2='" . mysqli_real_escape_string($mysqli, $school_name2) . "', 
    degree_course2='" . mysqli_real_escape_string($mysqli, $degree_course2) . "', 
    year_level2='" . mysqli_real_escape_string($mysqli, $year_level2) . "', 
    date_attendance2='" . mysqli_real_escape_string($mysqli, $date_attendance2) . "', 
    awards2='" . mysqli_real_escape_string($mysqli, $awards2) . "', 
    position1='" . mysqli_real_escape_string($mysqli, $position1) . "', 
    company_name1='" . mysqli_real_escape_string($mysqli, $company_name1) . "', 
    work_attendance1='" . mysqli_real_escape_string($mysqli, $work_attendance1) . "', 
    contribution1='" . mysqli_real_escape_string($mysqli, $contribution1) . "', 
    position2='" . mysqli_real_escape_string($mysqli, $position2) . "', 
    company_name2='" . mysqli_real_escape_string($mysqli, $company_name2) . "', 
    work_attendance2='" . mysqli_real_escape_string($mysqli, $work_attendance2) . "', 
    contribution2='" . mysqli_real_escape_string($mysqli, $contribution2) . "', 
    position3='" . mysqli_real_escape_string($mysqli, $position3) . "', 
    company_name3='" . mysqli_real_escape_string($mysqli, $company_name3) . "', 
    work_attendance3='" . mysqli_real_escape_string($mysqli, $work_attendance3) . "', 
    contribution3='" . mysqli_real_escape_string($mysqli, $contribution3) . "', 
    skill1='" . mysqli_real_escape_string($mysqli, $skill1) . "', 
    skill2='" . mysqli_real_escape_string($mysqli, $skill2) . "', 
    skill3='" . mysqli_real_escape_string($mysqli, $skill3) . "', 
    skill4='" . mysqli_real_escape_string($mysqli, $skill4) . "', 
    skill5='" . mysqli_real_escape_string($mysqli, $skill5) . "', 
    qualification1='" . mysqli_real_escape_string($mysqli, $qualification1) . "', 
    qualification2='" . mysqli_real_escape_string($mysqli, $qualification2) . "', 
    qualification3='" . mysqli_real_escape_string($mysqli, $qualification3) . "', 
    qualification4='" . mysqli_real_escape_string($mysqli, $qualification4) . "', 
    qualification5='" . mysqli_real_escape_string($mysqli, $qualification5) . "', 
    ref_name='" . mysqli_real_escape_string($mysqli, $ref_name) . "', 
    position='" . mysqli_real_escape_string($mysqli, $position) . "', 
    company_name='" . mysqli_real_escape_string($mysqli, $company_name) . "', 
    p_number='" . mysqli_real_escape_string($mysqli, $p_number) . "', 
    relationship='" . mysqli_real_escape_string($mysqli, $relationship) . "' 
    WHERE res_id='" . mysqli_real_escape_string($mysqli, $eid) . "'");


    if ($result) {
        header("Location: resume_edit_table.php");
    } else {
        echo "Error updating record: " . mysqli_error($mysqli);
    }
}

if (isset($_GET['res_id'])) {
    $res_id = $_GET['res_id'];
    $result = mysqli_query($mysqli, "SELECT * FROM res WHERE res_id=$res_id");

    while ($res = mysqli_fetch_array($result)) {
        $eid = $res['res_id'];
        $last_name = $res['last_name'];
        $first_name = $res['first_name'];
        $middle_name = $res['middle_name'];
        $sex = $res['sex'];
        $birthdate = $res['birthdate'];
        $place_of_birth = $res['place_of_birth'];
        $status = $res['status'];
        $citizenship = $res['citizenship'];
        $pnum = $res['pnum'];
        $province = $res['province'];
        $city = $res['city'];
        $barangay = $res['barangay'];
        $email = $res['email'];
        $housenumandstreet = $res['housenumandstreet'];
        $zipcode = $res['zipcode'];
        $education1 = $res['education1'];
        $school_name1 = $res['school_name1'];
        $degree_course1 = $res['degree_course1'];
        $year_level1 = $res['year_level1'];
        $date_attendance1 = $res['date_attendance1']; 
        $awards1 = $res['awards1'];
        $education2 = $res['education1'];
        $school_name2 = $res['school_name2'];
        $degree_course2 = $res['degree_course2'];
        $year_level2 = $res['year_level2'];
        $date_attendance2 = $res['date_attendance2']; 
        $awards2 = $res['awards2'];
        $position1 = $res['position1'];
        $company_name1 = $res['company_name1'];
        $work_attendance1 = $res['work_attendance1'];
        $contribution1 = $res['contribution1'];
        $position2 = $res['position2'];
        $company_name2 = $res['company_name2'];
        $work_attendance2 = $res['work_attendance2'];
        $contribution2 = $res['contribution2'];
        $position3 = $res['position3'];
        $company_name3 = $res['company_name3'];
        $work_attendance3 = $res['work_attendance3'];
        $contribution3 = $res['contribution3'];
        $skill1 = $res['skill1'];
        $skill2 = $res['skill2'];
        $skill3 = $res['skill3'];
        $skill4 = $res['skill4'];
        $skill5 = $res['skill5'];
        $qualification1 = $res['qualification1'];
        $qualification2 = $res['qualification2'];
        $qualification3 = $res['qualification3'];
        $qualification4 = $res['qualification4'];
        $qualification5 = $res['qualification5'];
        $ref_name = $res['ref_name'];
        $position = $res['position'];
        $company_name = $res['company_name'];
        $p_number = $res['p_number'];
        $relationship = $res['relationship'];
    }
}
?>

<html>
<head>    
    <title>Edit Data</title>
</head>
<style>
        
        body {
          font-weight: normal;
        }
        .content {
          margin-top: 5px; /* Adjust according to your sidebar height */
          padding: 20px;
          overflow-x: auto;
        }
        
        .names{
          align-items: center;
          text-align: center;
        }
        .name-input {
          width: calc(33.33% - 10px); /* Adjust width as needed */
          display: inline-block;
          margin-right: 10px; /* Adjust margin as needed */
          text-align: center;
        }
        
        .name-input:last-child {
          margin-right: 0; /* Remove margin for the last division */
          align-items: center;
          text-align: center;
        }
        .name-input label {
          display: block;
          margin-top: 2px; /* Adjust margin as needed */
          margin-bottom: 5px;
        }
        
        
        .personal-information {
          display: grid;
          grid-template-columns: repeat(2, 1fr);
          grid-gap: 15px; /* Adjust as needed */
        }
        .left-personal label,
        .right-personal label {
          display: inline-block;
          width: 30%; /* Adjust width as needed */
          text-align: left;
          margin-right: 10px;
        }
        .left-personal input[type="text"],
        .right-personal input[type="text"],
        .left-personal input[type="date"], select, 
        #status {
          width: 64%; /* Adjust width as needed */
          margin-bottom: 5px;
          margin-top: 2px;
        }
        
        #status, #sex{
            padding-top: 5px;
            width: 64%;
        
        }
        #birthdate{
            width: 64%;
            padding-top: 3px;
        
        }
        
        .contact {
          display: grid;
          grid-template-columns: repeat(2, 1fr);
          grid-gap: 15px; /* Adjust as needed */
        }
        
        .left-contact label,
        .right-contact label {
          display: inline-block;
          text-align: left;
          width: 30%;
          margin-right: 10px;
          margin-top: 0px;
        }
        
        .left-contact select,
        .right-contact select,
        .contact input[type="text"],
        #province,
        #city,
        #barangay {
          width: 64%; /* Adjust width as needed */
          margin-bottom: 5px;
          margin-top: 2px;
        }
        #province,
        #city,
        #barangay {
            padding-top: 5px;
            width: 64%;
        }
        
        
        form {
          margin: 0 auto;
          background-color: #fff;
          padding: 20px;
          color: black;
          border: 3px solid #ddd;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          font-size: 12px;
          font-family: 'Arial';
          
        }
        
        h1 {
          font-size: 30px; 
          margin-top: 0px;
          padding-top: 0px;
          margin-bottom: 0px;
          padding-bottom: 0px;
        }
        p{  margin-top: 0px;
          padding-top: 0px;
          font-weight: normal;
        }
        h2 {
          font-size: 16px;
          margin-top: 10px;
          margin-bottom: 0px;
          padding-bottom: 10px;
        }
        
        .names input[type="text"]{
          width: 100%;
          padding: 2px;
          margin-bottom:0px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        
        
        button[type="submit"] {
          background-color: #1E73BE; /* Change the background color */
          color: white;
          padding: 10px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        button[type="submit"]:hover {
          background-color: #3E8EF7; /* Change the hover color */
        }
        
        table.educ_bg {
          width:100%;
          border-collapse: separate;
          margin-bottom: 10px;
        }
        
        th, td {
          padding: 8px;
          text-align: center;
          border-bottom: 1px solid #ddd;
          font-size: 10px;
          font-family: Arial, sans-serif;
        }
        
        th {
          background-color: #f2f2f2;
        }
        
        table.educ_bg select,
        table.educ_bg input[type="text"] {
            width:105px;
          font-size: 10px;
          padding-top: 5px;
        
        }
        table.educ_bg select{
            padding-top: 8px;
        
        }
        table.work_exp {
          width: 100%; /* Set the width to 100% to expand */
          border-collapse: separate;
          margin-bottom: 2px;
        }
        
        
        table.work_exp th {
          background-color: #f2f2f2;
        }
        table.educ_bg input[type="text"] {
            width:105px;
          font-size: 10px;
        }
        
        .skills {
            float: left;
            width: 50%;
            margin-bottom: 5px;
        
        }
        .bullet-inputs input[type="text"] {
            width:95%;
        margin-bottom: 5px;}
        
        .qualification {
            float: right;
            width: 50%;
            margin-bottom: 5px;
        
        }
        .references {
            display: grid;
        
                    grid-template-columns: repeat(2, 1fr);
                    grid-gap: 15px; /* Adjust as needed */
                }
        
                .left-reference label,
                .right-reference label {
                    display: inline-block;
                    text-align: left;
                    width: 30%;
                    margin-right: 10px;
                    margin-top: 0px;
                }
        
                .left-reference input[type="text"],
                .right-reference input[type="text"] {
                    width: 64%; /* Adjust width as needed */
                    margin-bottom: 5px;
                    margin-top: 2px;}
        
        .required-field::after {
          content: ' *';
          color: red;
        }
        
                .buttons {
                    display: flex;
                    justify-content: right;
                    margin-top: 20px;
                    width: 100%;
                  
                }
                .buttons button {
                    background-color: #1E73BE;
                    color: white;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    margin: 0 10px;
                }
                .buttons .back-button {
                    background-color: gray;
                }
                .buttons button:hover {
                    background-color: #3E8EF7;
                }
                .buttons .back-button:hover {
                    background-color: #999;
                }
            </style> 

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
   <body>  
           
<?php 
    include 'sidebar.php'; 
    displaySidebar('resume'); 
    ?>
    <div class="content">
    <form action="resume_edit.php" method="post">
    
    <h1 style="color: #1E73BE;">Resume <span style="color: #000000;">Form</span></h1>
            <p>Fill up all data to complete your resume.</p><hr>
            <h2>Personal Information</h2>
            <div class="names">
            <div class="name-input">
              
                <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo $last_name ?>" required>
                <label for="last_name" class="required-field">Last Name</label>
            </div>
            <div class="name-input">
                <input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo $first_name ?>" required>
                <label for="first_name" class="required-field">First Name</label>
            </div>
            <div class="name-input">
                <input type="text" id="middle_name" name="middle_name" class="form-control" value="<?php echo $middle_name ?>">
                <label for="middle_name">Middle Name</label>
            </div>
        </div>
        
        <div class="personal-information">
            <div class="left-personal">
                <label for="sex" class="required-field">Sex:</label>
                <select id="sex" name="sex" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Male" <?php if ($sex == 'Male') echo 'selected'; ?>>Male</option>
                    <option value="Female" <?php if ($sex == 'Female') echo 'selected'; ?>>Female</option>
                </select><br>
                
                <label for="birthdate" class="required-field">Birthdate:</label>
                <input type="date" id="birthdate" name="birthdate" class="form-control" value="<?php echo $birthdate ?>" required><br>
                
                <label for="place_of_birth" class="required-field">Place of Birth:</label>
                <input type="text" id="place_of_birth" name="place_of_birth" class="form-control" value="<?php echo $place_of_birth ?>" required>
            </div>
            <div class="right-personal">
                <label for="status" class="required-field">Status:</label>
                <select id="status" name="status" class="form-control" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Single" <?php if ($status == 'Single') echo 'selected'; ?>>Single</option>
                    <option value="Married" <?php if ($status == 'Married') echo 'selected'; ?>>Married</option>
                    <option value="Divorced" <?php if ($status == 'Divorced') echo 'selected'; ?>>Divorced</option>
                    <option value="Widowed" <?php if ($status == 'Widowed') echo 'selected'; ?>>Widowed</option>
                </select><br>
                
                <label for="citizenship" class="required-field">Citizenship:</label>
                <input type="text" id="citizenship" name="citizenship" class="form-control" value="<?php echo $citizenship ?>" required>
            </div>
        </div>

        <h2>Contact & Address Information</h2>
        <div class="contact">
            <div class="left-contact">
                <label for="pnum" class="required-field">Phone Number:</label>
                <input type="text" id="pnum" name="pnum" class="form-control" value="<?php echo $pnum ?>" required><br>
                
                <label for="province" class="required-field">Province:</label>
                <select id="province" name="province" class="form-control" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Laguna" <?php if ($province == 'Laguna') echo 'selected'; ?>>Laguna</option>
                </select><br>
                
                <label for="city" class="required-field">City / Municipality:</label>
                <select id="city" name="city" class="form-control" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Los Banos" <?php if ($city == 'Los Banos') echo 'selected'; ?>>Los Banos</option>
                </select><br>
                
                <label for="barangay" class="required-field">Barangay:</label>
                <select id="barangay" name="barangay" class="form-control" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Mayondon" <?php if ($barangay == 'Mayondon') echo 'selected'; ?>>Mayondon</option>
                </select><br>
            </div>
            <div class="right-contact">
                <label for="email" class="required-field">Email:</label>
                <input type="text" id="email" name="email" class="form-control" value="<?php echo $email ?>" required><br>
                
                <label for="housenumandstreet">House No. / Street:</label>
                <input type="text" id="housenumandstreet" name="housenumandstreet" class="form-control" value="<?php echo $housenumandstreet ?>"><br>
                
                <label for="zipcode" class="required-field">Zip Code:</label>
                <input type="text" id="zipcode" name="zipcode" class="form-control" value="<?php echo $zipcode ?>" required><br>
            </div>
        </div>

        <h2>Educational Background</h2>
        <table class="educ_bg">
            <thead>
                <tr>
                    <th>Education</th>
                    <th>Name of School</th>
                    <th>Degree Earned / Course</th>
                    <th>Year / Level</th>
                    <th>Date of Attendance</th>
                    <th>Awards</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                <tr>
                    <td>
                        <select name="education1" class="form-control" required>
                            <option value="" disabled selected>Select Education *</option>
                            <option value="Elementary" <?php if ($education1 == 'Elementary') echo 'selected'; ?>>Elementary</option>
                            <option value="High School" <?php if ($education1 == 'High School') echo 'selected'; ?>>High School</option>
                            <option value=">Senior High School" <?php if ($education1 == '>Senior High School') echo 'selected'; ?>>Senior High School</option>
                            <option value="Vocational" <?php if ($education1 == 'Vocational') echo 'selected'; ?>>Vocational</option>
                            <option value="College" <?php if ($education1 == 'College') echo 'selected'; ?>>College</option>
                        </select>
                    </td>
                    <td><input type="text" name="school_name1" placeholder="*" class="form-control" value="<?php echo $school_name1 ?>" required></td>
                    <td><input type="text" name="degree_course1" class="form-control" value="<?php echo $degree_course1 ?>"></td>
                    <td><input type="text" name="year_level1" placeholder="*" class="form-control" value="<?php echo $year_level1 ?>" required></td>
                    <td><input type="text" name="date_attendance1" placeholder="*" class="form-control" value="<?php echo $date_attendance1 ?>" required></td>
                    <td><input type="text" name="awards1" class="form-control" value="<?php echo $awards1 ?>"></td>
                </tr>
                <!-- Row 2 -->
                <tr>
                    <td>
                        <select name="education2" class="form-control">
                            <option value="" disabled selected>Select Education *</option>
                            <option value="Elementary" <?php if ($education2 == 'Elementary') echo 'selected'; ?>>Elementary</option>
                            <option value="High School" <?php if ($education2 == 'High School') echo 'selected'; ?>>High School</option>
                            <option value=">Senior High School" <?php if ($education2 == '>Senior High School') echo 'selected'; ?>>Senior High School</option>
                            <option value="Vocational" <?php if ($education2 == 'Vocational') echo 'selected'; ?>>Vocational</option>
                            <option value="College" <?php if ($education2 == 'College') echo 'selected'; ?>>College</option>
                        </select>
                    </td>
                    <td><input type="text" name="school_name2" placeholder="*" class="form-control" value="<?php echo $school_name2 ?>"></td>
                    <td><input type="text" name="degree_course2" class="form-control" value="<?php echo $degree_course2 ?>"></td>
                    <td><input type="text" name="year_level2" placeholder="*" class="form-control" value="<?php echo $year_level2 ?>"></td>
                    <td><input type="text" name="date_attendance2" placeholder="*" class="form-control" value="<?php echo $date_attendance2 ?>"></td>
                    <td><input type="text" name="awards2" class="form-control" value="<?php echo $awards2 ?>"></td>
                </tr>
                <!-- Row 3 -->
                
            </tbody>
        </table>

        <h2>Work Experience</h2>
        <table class="work_exp">
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Company Name</th>
                    <th>Date of Attendance</th>
                    <th>Contributions and Responsibilities</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                <tr>
                    <td><input type="text" name="position1" class="form-control" value="<?php echo $position1 ?>"></td>
                    <td><input type="text" name="company_name1" class="form-control" value="<?php echo $company_name1 ?>"></td>
                    <td><input type="text" name="work_attendance1" class="form-control" value="<?php echo $work_attendance1 ?>"></td>
                    <td><input type="text" name="contribution1" class="form-control" value="<?php echo $contribution1 ?>"></td>
                </tr>
                <!-- Row 2 -->
                <tr>
                    <td><input type="text" name="position2" class="form-control" value="<?php echo $position2 ?>"></td>
                    <td><input type="text" name="company_name2" class="form-control" value="<?php echo $company_name2 ?>"></td>
                    <td><input type="text" name="work_attendance2" class="form-control" value="<?php echo $work_attendance2 ?>"></td>
                    <td><input type="text" name="contribution2" class="form-control" value="<?php echo $contribution2 ?>"></td>
                </tr>
                <!-- Row 3 -->
                <tr>
                    <td><input type="text" name="position3" class="form-control" value="<?php echo $position3 ?>"></td>
                    <td><input type="text" name="company_name3" class="form-control" value="<?php echo $company_name3 ?>"></td>
                    <td><input type="text" name="work_attendance3" class="form-control" value="<?php echo $work_attendance3 ?>"></td>
                    <td><input type="text" name="contribution3" class="form-control" value="<?php echo $contribution3 ?>"></td>
                </tr>
                </tbody>
        </table>

        <div class="skills">
    <h2>Skills</h2>
    <div class="bullet-inputs">
      <input type="text" name="skill1" placeholder="Skill 1 *" class="form-control" value="<?php echo $skill1 ?>" required><br>
      <input type="text" name="skill2" placeholder="Skill 2 *" class="form-control" value="<?php echo $skill2 ?>"required><br>
      <input type="text" name="skill3" placeholder="Skill 3" class="form-control" value="<?php echo $skill3 ?>"><br>
      <input type="text" name="skill4" placeholder="Skill 4" class="form-control" value="<?php echo $skill4 ?>"><br>
      <input type="text" name="skill5" placeholder="Skill 5" class="form-control" value="<?php echo $skill5 ?>"><br>
    </div>
    </div>
    
    <div class="qualification">
    <h2>Qualifications</h2>
    <div class="bullet-inputs">
      <input type="text" name="qualification1" placeholder="Qualification 1 *" class="form-control" value="<?php echo $qualification1 ?>" required><br>
      <input type="text" name="qualification2" placeholder="Qualification 2 *" class="form-control" value="<?php echo $qualification2 ?>" required><br>
      <input type="text" name="qualification3" placeholder="Qualification 3" class="form-control" value="<?php echo $qualification3 ?>"><br>
      <input type="text" name="qualification4" placeholder="Qualification 4" class="form-control" value="<?php echo $qualification4 ?>"><br>
      <input type="text" name="qualification5" placeholder="Qualification 5" class="form-control" value="<?php echo $qualification5 ?>"><br>
    </div>
    </div>

<h2>References</h2>
    <div class="references">
                <div class="left-reference">
                <label for="ref_name">Full Name:</label>
                <input type="text" id="ref_name" name="ref_name" class="form-control" value="<?php echo $ref_name ?>"><br>
                  <label for="position">Position:</label>
                  <input type="text" id="position" name="position" class="form-control" value="<?php echo $position ?>"><br>
                  <label for="company_name">Company Name:</label>
                  <input type="text" id="company_name" name="company_name" class="form-control" value="<?php echo $company_name ?>"><br>
                </div>
                <div class="right-reference">
                  <label for="p_number">Phone Number:</label>
                  <input type="text" id="p_number" name="p_number" class="form-control" value="<?php echo $p_number ?>"><br>
                  <label for="relationship">Relationship:</label>
                  <input type="text" id="relationship" name="relationship" class="form-control" value="<?php echo $relationship ?>"><br>
                </div>
    </div>
    <div class="buttons">   
    <input type="hidden" name="res_id" value="<?php echo $eid; ?>">
                <a href="resume_edit_table.php"><button type="button" class="back-button">Back</button></a>
        <button type="submit" name="update" class="btn-submit">Update Resume</button></div>
    </form>
</body>
</html>