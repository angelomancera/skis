<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>
<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM res ORDER BY res_id DESC");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Resume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <style>
        .content {
            margin-top: 0px; /* Adjust according to your sidebar height */
            padding: 20px;
            overflow-x: auto;

        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
        form {
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .table .thead{
            font-size: 12px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: #f2f2f2;

        }
        .table thead {
            font-size: 12px;
            font-family: Arial, sans-serif;
        }

        .table tbody {
            font-size: 10px;
            font-family: Arial, sans-serif;
        }

        
.form-title{
            display: inline-block;
            position: relative;
            margin: 0px 30px;
            text-align: center;
            line-height: 4px;
            top: 10px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            /* font-size: medium; */
        }
      
        .header, .title-sheet{
            position: relative;
            text-align: center;
            font-size: 12px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .img{
            position: relative;
            margin: 0px 20px;
        }
        
        
        img{
            width: 65px;
            position: relative;
            left: 0px;
        }
        .buttons {
            display: flex;
            justify-content: right;
            margin-top: 10px;
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
        .buttons button:hover {
            background-color: #3E8EF7;
        }


    </style>
     <script>
        function sortTable(n) {
            const table = document.getElementById("resumeTable");
            let rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            switching = true;
            dir = "asc"; 

            while (switching) {
                switching = false;
                rows = table.rows;

                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];

                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    switchcount++;
                } else {
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
    </script>
</head>
<body>
    <?php 
    include 'sidebar.php'; 
    displaySidebar('resume'); 
    ?>

    <div class="content">
        <div class="buttons" style="text-align: right;">
            <button onclick="location.reload();">Reload</button>
            <button onclick="location.href='resume_form.php';">Add</button>
        </div>
        <br>
        <form>
        <div class="header">
                <img class="img" src="297187650_1458604797898860_1179154632723459082_n-removebg-preview.png" alt="">
                <div class="form-title">
                  <p>Republic of the Philippines</p>
                    <p>Province of Laguna</p>
                    <p>Municipality of Los Banos</p><br><br>
                </div>
                <img class="img" src="303590580_492900189508693_3650462224514911687_n-removebg-preview.png" alt="">
                <br><br><hr>
                <h3>Resume Information Sheet</h3>

            </div>
            


        <div class="table" style="overflow-x: auto;">
        <table id="resumeTable">
                    <thead>
                        <tr>
                            <th onclick="sortTable(0)">ID</th>
                            <th onclick="sortTable(1)">Last Name</th>
                            <th onclick="sortTable(2)">First Name</th>
                            <th onclick="sortTable(3)">Middle Name</th>
                            <th onclick="sortTable(4)">Sex</th>
                            <th onclick="sortTable(5)">Birthdate</th>
                            <th onclick="sortTable(6)">Email</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <?php
        while($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>{$res['res_id']}</td>";
            echo "<td>{$res['last_name']}</td>";
            echo "<td>{$res['first_name']}</td>";
            echo "<td>{$res['middle_name']}</td>";
            echo "<td>{$res['sex']}</td>";
            echo "<td>{$res['birthdate']}</td>";
            echo "<td>{$res['email']}</td>";
            echo "<td>
            <a href='resume_edit.php?res_id={$res['res_id']}' title='Edit'>
                <i class='fas fa-edit' style='color: #1E73BE;'></i>
            </a>
            <a href='resume_delete.php?res_id={$res['res_id']}' onClick=\"return confirm('Are you sure you want to delete?')\" title='Delete'>
                <i class='fas fa-trash' style='color: #1E73BE;'></i>
            </a>
            <a href='resume_print.php?res_id={$res['res_id']}' title='Print'>
            <i class='fas fa-print' style='color: #1E73BE;'></i>
        </a>
          </td>";
    
         echo "</tr>";
        }
        ?>
            </table>
        </div>
        </form>
    </div>
</body>
</html>


