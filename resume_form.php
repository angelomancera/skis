<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Resume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
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
  width: 62%; /* Adjust width as needed */
  margin-bottom: 5px;
  margin-top: 2px;
}

#status, #sex{
    padding-top: 5px;
    width: 64%;

}
#birthdate{
    width: 63%;
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
  width: 62%; /* Adjust width as needed */
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
  width:50%;
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
            width: 62%; /* Adjust width as needed */
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
</head>


<?php 
    include 'sidebar.php'; 
    displaySidebar('resume'); 
    ?>

    <div class="content">
    <form action="resume_add.php" method="post">

        <h1 style="color: #1E73BE;">Resume <span style="color: #000000;">Form</span></h1>
            <p>Fill up all data to complete your resume.</p><hr>
            <h2>Personal Information</h2>
            <div class="names">
                <div class="name-input">
                    <input type="text" id="last_name" name="last_name" required>
                    <label for="last_name" class="required-field">Last Name</label>
                </div>
                <div class="name-input">
                    <input type="text" id="first_name" name="first_name" required>
                    <label for="first_name" class="required-field">First Name</label>
                </div>
                <div class="name-input">
                    <input type="text" id="middle_name" name="middle_name">
                    <label for="middle_name">Middle Name</label>
                </div>
            </div>
            <div class="personal-information">
                <div class="left-personal">
                <label for="sex" class="required-field">Sex:</label>
                <select id="sex" name="sex" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select><br>
                  <label for="birthdate" class="required-field">Birthdate:</label>
                  <input type="date" id="birthdate" name="birthdate" required><br>
                  <label for="place_of_birth" class="required-field">Place of Birth:</label>
                  <input type="text" id="place_of_birth" name="place_of_birth" required>
                </div>
                <div class="right-personal">

                  <label for="status" class="required-field">Status:</label>
                  <select id="status" name="status" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                  </select><br>
                  <label for="citizenship" class="required-field">Citizenship:</label>
                  <input type="text" id="citizenship" name="citizenship" required>
                </div>
            </div>
            <h2>Contact & Address Information</h2>
            <div class="contact">
                <div class="left-contact">
                    <label for="pnum" class="required-field">Phone Number:</label>
                    <input type="text" id="pnum" name="pnum" required><br>
                    <label for="province" class="required-field">Province:</label>
                    <select id="province" name="province" required>
                        <option value="" disabled selected>Select</option>
                        <option value="Laguna">Laguna</option>
                    </select><br>
                    <label for="city" class="required-field">City / Municipality:</label>
                    <select id="city" name="city" required>
                        <option value="" disabled selected>Select</option>
                        <option value="Los Banos">Los Banos</option>
                    </select><br>
                    <label for="barangay" class="required-field">Barangay:</label>
                    <select id="barangay" name="barangay" required>
                        <option value="" disabled selected>Select</option>
                        <option value="Mayondon">Mayondon</option>
                    </select><br>
                </div>
                <div class="right-contact">
                    <label for="email" class="required-field">Email:</label>
                    <input type="text" id="email" name="email" required><br>
                    <label for="housenumandstreet">House No. / Street:</label>
                    <input type="text" id="housenumandstreet" name="housenumandstreet"><br>
                    <label for="zipcode" class="required-field">Zip Code:</label>
                    <input type="text" id="zipcode" name="zipcode" required><br>
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
                <select name="education1" id="education1" required >
                    <option value="" disabled selected >Select Education *</option>
                    <option value="Elementary">Elementary</option>
                    <option value="High School">High School</option>
                    <option value="Senior High School">Senior High School</option>
                    <option value="Vocational">Vocational</option>
                    <option value="College">College</option>
                </select>
            </td>
            <td><input type="text" name="school_name1" placeholder="*" required></td>
            <td><input type="text" name="degree_course1" ></td>
            <td><input type="text" name="year_level1" placeholder="*" required></td>
            <td><input type="text" name="date_attendance1" placeholder="*" required></td>
            <td><input type="text" name="awards1" ></td>
        </tr>
        <!-- Row 2 -->
        <tr>
            <td>
                <select name="education2"  id="education2">
                    <option value="" disabled selected >Select Education</option>
                    <option value="Elementary">Elementary</option>
                    <option value="High School">High School</option>
                    <option value="Senior High School">Senior High School</option>
                    <option value="Vocational">Vocational</option>
                    <option value="College">College</option>
                </select>
            </td>
            <td><input type="text" name="school_name2"></td>
            <td><input type="text" name="degree_course2"></td>
            <td><input type="text" name="year_level2"></td>
            <td><input type="text" name="date_attendance2"></td>
            <td><input type="text" name="awards2"></td>
        </tr>
       
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
                    <td><input type="text" name="position1"></td>
                    <td><input type="text" name="company_name1"></td>
                    <td><input type="text" name="work_attendance1" ></td>
                    <td><input type="text" name="contribution1"></td>
                </tr>
                </div>
                <!-- Row 2 -->
                <tr>

                <td><input type="text" name="position2"></td>
                    <td><input type="text" name="company_name2"></td>
                    <td><input type="text" name="work_attendance2" ></td>
                    <td><input type="text" name="contribution2"></td>
                </tr>
            <!-- Row 3 -->
            <tr>
            <td><input type="text" name="position3"></td>
                    <td><input type="text" name="company_name3"></td>
                    <td><input type="text" name="work_attendance3" ></td>
                    <td><input type="text" name="contribution3"></td>
            </tr>
        </tbody>
    </table>
    <div class="skills">
    <h2>Skills</h2>
    <div class="bullet-inputs">
      <input type="text" name="skill1" placeholder="Skill 1 *" required><br>
      <input type="text" name="skill2" placeholder="Skill 2 *" required><br>
      <input type="text" name="skill3" placeholder="Skill 3"><br>
      <input type="text" name="skill4" placeholder="Skill 4"><br>
      <input type="text" name="skill5" placeholder="Skill 5"><br>
    </div>
    </div>
    
    <div class="qualification">
    <h2>Qualifications</h2>
    <div class="bullet-inputs">
      <input type="text" name="qualification1" placeholder="Qualification 1 *"required><br>
      <input type="text" name="qualification2" placeholder="Qualification 2 *" required><br>
      <input type="text" name="qualification3" placeholder="Qualification 3"><br>
      <input type="text" name="qualification4" placeholder="Qualification 4"><br>
      <input type="text" name="qualification5" placeholder="Qualification 5"><br>
    </div>
    </div>

<h2>References</h2>
    <div class="references">
                <div class="left-reference">
                <label for="ref_name">Full Name:</label>
                <input type="text" id="ref_name" name="ref_name"><br>
                  <label for="position">Position:</label>
                  <input type="text" id="position" name="position"><br>
                  <label for="company_name">Company Name:</label>
                  <input type="text" id="company_name" name="company_name"><br>
                </div>
                <div class="right-reference">
                  <label for="p_number">Phone Number:</label>
                  <input type="text" id="p_number" name="p_number"><br>
                  <label for="relationship">Relationship:</label>
                  <input type="text" id="relationship" name="relationship"><br>
                </div>
    </div>
    <div class="buttons">    

    <a href="resume_edit_table.php"><button type="button" class="back-button">Back</button></a>
    <button type="submit" name="submit">Submit</button>
        
</div>
    </form>
    </div>
</body>
</html>
