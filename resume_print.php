<?php

include 'config.php';

// Check if the user ID is set in the GET request
if (isset($_GET['res_id'])) {
    $res_id = intval($_GET['res_id']);

    // Modify the SQL query to filter by the specific user ID
    $sql = "SELECT * FROM res WHERE res_id = $res_id";
    $selectQuery = mysqli_query($mysqli, $sql);

    if (!$selectQuery) {
        die("Query failed: " . mysqli_error($mysqli));
    }

    $result = mysqli_fetch_assoc($selectQuery);

    if ($result) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
    body {
        font-family: 'Times New Roman';
        padding: 10px 20px; /* Reduced top and bottom padding */
        font-size: 14px; /* Set default font size to 12px */
    }
    .container {
        max-width: 700px;
        margin: auto;
        border: 1px solid #000;
        padding: 20px;
        margin-top: 20px

        
    }
    h4 {
        font-weight: bold;
        font-size: 25px;
        margin-bottom: 10px; /* Set margin-bottom to 10px */

    }
    h6 {
        font-weight: bold;
        font-size: 16px;
        margin-bottom: 10px; /* Set margin-bottom to 10px */

    }
    .header, .section-content, .footer {
        margin-bottom: 0px; /* Set margin-bottom to 0px */
    }
    hr {
        color: black;
    }
    .header {
        text-align: left;
        margin-bottom: 10px;
        margin-top: 10px;
    }
    .header p {
        margin: 0px 0;
    }
    .section {
        margin-bottom: 20px;
    }
    p {
        text-indent: 15px;
        margin: 0px 0;
    }
    .section-content ul {
        list-style: none;
        padding-left: 0;
    }
    .section-content ul li {
        margin-bottom: 0px;
        text-indent: 30px; /* Indent with 30px */
        list-style: disc; /* Add bullet */
    }
    .section-content{
        margin-bottom: 10px;

    }
    .footer {
        text-align: center;
        margin-top: 20px;
    }
    .footer3{
        text-align: right;
        padding-right: 75px;
    }

    .footer2{
        text-align: right;
        padding-right: 20px;
    }
    .container-personal {
        text-indent: 15px;
        display: grid;
        grid-template-columns: auto 1fr; /* Adjusted to make second column closer */
        margin-bottom: 0px;
    }
    .education-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-right: 20px;
    }
    .education-details {
        margin-top: 0px;
    }

    .work-details {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 0px; /* Reduced spacing */
        padding-right: 20px;
        
    }
    .work-details ul, .work-details li {
        padding-left: 20px;
    }
    .skills, .qualifications {
        padding-left: 20px;
    }
 
    .buttons {
            position: fixed;
            bottom: 10px;
            right: 10px;
            display: flex;
            justify-content: flex-end;
            width: auto;
        }
        @media print {
            .buttons, #print{
                display: none;
            }
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
        .buttons button:hover {
            background-color: #3E8EF7;
        }
        .buttons {
            display: flex;
            justify-content: baseline;
            margin-top: 10px;
            width: 100%;
            margin-bottom: 20px;
            font-size: 14px;
            font-family: Arial, sans-serif;

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
        .profile-picture {
        display: inline-block;
        width: 1.5in; /* Set width to 2 inches */
        height: 1.5in; /* Set height to 2 inches */
        border: 1px solid #000;
        margin-left: auto; /* Align to the right side */
        margin-right: 15px; /* Reset margin-right */
        overflow: hidden;
        float: right; /* Float to the right */
        vertical-align: top; /* Align to the top */
    }
    .profile-picture img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

</style>
</head>

<div class="container">
        <!-- Header section -->
        <?php if (!empty($result['first_name']) || !empty($result['middle_name']) || !empty($result['last_name']) || !empty($result['housenumandstreet']) || !empty($result['barangay']) || !empty($result['city']) || !empty($result['province']) || !empty($result['zipcode']) || !empty($result['pnum']) || !empty($result['email'])) { ?>
            <div class="header">
                <!-- Profile picture -->

                    <div class="profile-picture">
                    <img class="img" src="user (3).png" alt="">
                    </div>


                <!-- Header content -->
                <div class="header-content">
                   <p><br></p>
                    <h4><?= htmlspecialchars($result['first_name'] . ' ' . $result['middle_name'] . ' ' . $result['last_name']) ?></h4>
                    <p><?= htmlspecialchars($result['housenumandstreet'] . ' ' . $result['barangay'] . ' ' . $result['city'] . ' ' . $result['province'] . ' ' . $result['zipcode']) ?></p>
                    <p><?= htmlspecialchars($result['pnum']) ?></p>
                    <p><?= htmlspecialchars($result['email']) ?></p>
                </div>
                <br>
                <hr>
            </div>
        <?php } ?>

        <!-- Personal Information section -->
        <?php if (!empty($result['birthdate']) || !empty($result['place_of_birth']) || !empty($result['sex']) || !empty($result['status']) || !empty($result['citizenship'])) { ?>
            <div class="section-content">
                <h6>Personal Information</h6>
                <div class="container-personal">
                    <!-- Birthdate -->
                    <?php if (!empty($result['birthdate'])) { ?>
                        <div class="label">Birthdate:</div>
                        <div><?= htmlspecialchars($result['birthdate']) ?></div>
                    <?php } ?>
                    <!-- Place of Birth -->
                    <?php if (!empty($result['place_of_birth'])) { ?>
                        <div class="label">Place of Birth:</div>
                        <div><?= htmlspecialchars($result['place_of_birth']) ?></div>
                    <?php } ?>
                    <!-- Sex -->
                    <?php if (!empty($result['sex'])) { ?>
                        <div class="label">Sex:</div>
                        <div><?= htmlspecialchars($result['sex']) ?></div>
                    <?php } ?>
                    <!-- Status -->
                    <?php if (!empty($result['status'])) { ?>
                        <div class="label">Status:</div>
                        <div><?= htmlspecialchars($result['status']) ?></div>
                    <?php } ?>
                    <!-- Citizenship -->
                    <?php if (!empty($result['citizenship'])) { ?>
                        <div class="label">Citizenship:</div>
                        <div><?= htmlspecialchars($result['citizenship']) ?></div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <!-- Educational Background section -->
        <?php if (!empty($result['school_name1']) || !empty($result['date_attendance1']) || !empty($result['degree_course1']) || !empty($result['education1']) || !empty($result['awards1']) || !empty($result['school_name2']) || !empty($result['date_attendance2']) || !empty($result['degree_course2']) || !empty($result['education2']) || !empty($result['awards2'])) { ?>
            <div class="section-content">
                <h6>Educational Background</h6>
                <!-- School 1 -->
                <?php if (!empty($result['school_name1']) || !empty($result['date_attendance1']) || !empty($result['degree_course1']) || !empty($result['education1']) || !empty($result['awards1'])) { ?>
                    <div class="education-item">
                        <p><b><?= htmlspecialchars($result['school_name1']) ?></b></p>
                        <p><?= htmlspecialchars($result['date_attendance1']) ?></p>
                    </div>
                    <div class="education-details">
                        <p><i><?= htmlspecialchars($result['degree_course1']) ?></i></p>
                        <p><?= htmlspecialchars($result['education1']) ?>, <?= htmlspecialchars($result['awards1']) ?></p>
                    </div>
                <?php } ?>
                <!-- School 2 -->
                <?php if (!empty($result['school_name2']) || !empty($result['date_attendance2']) || !empty($result['degree_course2']) || !empty($result['education2']) || !empty($result['awards2'])) { ?>
                    <div class="education-item">
                        <p><b><?= htmlspecialchars($result['school_name2']) ?></b></p>
                        <p><?= htmlspecialchars($result['date_attendance2']) ?></p>
                    </div>
                    <div class="education-details">
                        <p><i><?= htmlspecialchars($result['degree_course2']) ?></i></p>
                        <p><?= htmlspecialchars($result['education2']) ?>, <?= htmlspecialchars($result['awards2']) ?></p>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

        <!-- Work Experience section -->
        <?php if (!empty($result['position1']) || !empty($result['company_name1']) || !empty($result['contribution1']) || !empty($result['work_attendance1']) || !empty($result['position2']) || !empty($result['company_name2'])
          || !empty($result['contribution2']) || !empty($result['work_attendance2']) || !empty($result['position3']) || !empty($result['company_name3']) || !empty($result['contribution3']) || !empty($result['work_attendance3'])) { ?>
            <div class="section-content">
                <h6>Work Experience</h6>
                <!-- Work details 1 -->
                <?php if (!empty($result['position1']) || !empty($result['company_name1']) || !empty($result['contribution1']) || !empty($result['work_attendance1'])) { ?>
                    <div class="work-details">
                        <div>
                            <p><b><?= htmlspecialchars($result['position1']) ?></b> | <b><?= htmlspecialchars($result['company_name1']) ?></b></p>
                            <li><?= htmlspecialchars($result['contribution1']) ?></li>
                        </div>
                        <ul>
                            <p><?= htmlspecialchars($result['work_attendance1']) ?></p>
                        </ul>
                    </div>
                <?php } ?>
                <!-- Work details 2 -->
                <?php if (!empty($result['position2']) || !empty($result['company_name2']) || !empty($result['contribution2']) || !empty($result['work_attendance2'])) { ?>
                    <div class="work-details">
                        <div>
                            <p><b><?= htmlspecialchars($result['position2']) ?></b> | <b><?= htmlspecialchars($result['company_name2']) ?></b></p>
                            <li><?= htmlspecialchars($result['contribution2']) ?></li>
                        </div>
                        <ul>
                            <p><?= htmlspecialchars($result['work_attendance2']) ?></p>
                        </ul>
                    </div>
                <?php } ?>
                <!-- Work details 3 -->
                <?php if (!empty($result['position3']) || !empty($result['company_name3']) || !empty($result['contribution3']) || !empty($result['work_attendance3'])) { ?>
                    <div class="work-details">
                        <div>
                            <p><b><?= htmlspecialchars($result['position3']) ?></b> | <b><?= htmlspecialchars($result['company_name3']) ?></b></p>
                            <li><?= htmlspecialchars($result['contribution3']) ?></li>
                        </div>
                        <ul>
                            <p><?= htmlspecialchars($result['work_attendance3']) ?></p>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

        <!-- Skills section -->
        <?php if (!empty($result['skill1']) || !empty($result['skill2']) || !empty($result['skill3']) || !empty($result['skill4']) || !empty($result['skill5'])) { ?>
            <div class="section-content">
                <h6>Skills</h6>
                <div class="skills">
                    <!-- Skill 1 -->
                    <?php if (!empty($result['skill1'])) { ?>
                        <li><?= htmlspecialchars($result['skill1']) ?></li>
                    <?php } ?>
                    <!-- Skill 2 -->
                    <?php if (!empty($result['skill2'])) { ?>
                        <li><?= htmlspecialchars($result['skill2']) ?></li>
                    <?php } ?>
                    <!-- Skill 3 -->
                    <?php if (!empty($result['skill3'])) { ?>
                        <li><?= htmlspecialchars($result['skill3']) ?></li>
                    <?php } ?>
                    <!-- Skill 4 -->
                    <?php if (!empty($result['skill4'])) { ?>
                        <li><?= htmlspecialchars($result['skill4']) ?></li>
                    <?php } ?>
                    <!-- Skill 5 -->
                    <?php if (!empty($result['skill5'])) { ?>
                        <li><?= htmlspecialchars($result['skill5']) ?></li>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <!-- Qualification section -->
        <?php if (!empty($result['qualification1']) || !empty($result['qualification2']) || !empty($result['qualification3']) || !empty($result['qualification4']) || !empty($result['qualification5'])) { ?>
            <div class="section-content">
                <h6>Qualification</h6>
                <div class="qualifications">
                    <!-- Qualification 1 -->
                    <?php if (!empty($result['qualification1'])) { ?>
                        <li><?= htmlspecialchars($result['qualification1']) ?></li>
                    <?php } ?>
                    <!-- Qualification 2 -->
                    <?php if (!empty($result['qualification2'])) { ?>
                        <li><?= htmlspecialchars($result['qualification2']) ?></li>
                    <?php } ?>
                    <!-- Qualification 3 -->
                    <?php if (!empty($result['qualification3'])) { ?>
                        <li><?= htmlspecialchars($result['qualification3']) ?></li>
                    <?php } ?>
                    <!-- Qualification 4 -->
                    <?php if (!empty($result['qualification4'])) { ?>
                        <li><?= htmlspecialchars($result['qualification4']) ?></li>
                    <?php } ?>
                    <!-- Qualification 5 -->
                    <?php if (!empty($result['qualification5'])) { ?>
                        <li><?= htmlspecialchars($result['qualification5']) ?></li>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <!-- Reference section -->
        <?php if (!empty($result['ref_name']) || !empty($result['position']) || !empty($result['company_name']) || !empty($result['p_number']) || !empty($result['relationship'])) { ?>
            <div class="section-content">
                <h6>Reference</h6>
                <!-- Reference details -->
                <?php if (!empty($result['ref_name']) || !empty($result['position']) || !empty($result['company_name']) || !empty($result['p_number']) || !empty($result['relationship'])) { ?>
                    <p><?= htmlspecialchars($result['ref_name']) ?></p>
                    <p><?= htmlspecialchars($result['position']) ?></p>
                    <p><?= htmlspecialchars($result['company_name']) ?></p>
                    <p><?= htmlspecialchars($result['p_number']) ?></p>
                    <p><?= htmlspecialchars($result['relationship']) ?></p>
                <?php } ?>
            </div>
        <?php } ?>

        <!-- Footer section -->
        <?php if (!empty($result['first_name']) || !empty($result['last_name'])) { ?>
            <div class="footer">
                <br>
                <p><i>I hereby certify that the above information is true and correct to the best of my knowledge.</i></p>
            </div>
            <div class="footer2">
                <h2>______________</h2>
            </div>
            <div class="footer3">
                <p><b><?= htmlspecialchars($result['first_name'] . ' ' . $result['last_name']) ?></b></p>
            </div>
        <?php } ?>
    </div>

    <!-- Buttons -->
    <div class="buttons">
        <a href="resume_edit_table.php"><button type="button" media="print" id="print" class="back-button">Back</button></a>
        <button media="print" id="print" onclick="location.href = 'resume_print.php';">Print</button>
    </div>
</body>
</html>

<?php 
    } else {
        echo "No resume found for the selected user.";
    }

    $mysqli->close();
} else {
    echo "No user ID provided.";
}
?>