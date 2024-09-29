<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accomplishment Reports</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
        }
        .sidebar {
            background-color: #1E73BE;
            color: white;
            width: 250px;
            height: 100vh;
            padding-top: 20px;
        }
        .sidebar h3 {
            text-align: center;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #3E8EF7;
        }
        .sidebar a.active {
            background-color: #3E8EF7;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        .content h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
        }
        select {
            padding: 5px;
            width: 200px;
        }
        .buttons {
            margin: 10px 0;
        }
        .buttons button {
            padding: 10px 15px;
            margin-right: 10px;
            background-color: #1E73BE;
            color: white;
            border: none;
            cursor: pointer;
        }
        .buttons button:hover {
            background-color: #3E8EF7;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #CCCCCC;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3>SANGGUNIANG KABATAAN</h3>
        <a href="#">Dashboard</a>
        <a href="#">Resume</a>
        <a href="#" class="active">Accomplishment Report</a>
        <a href="#">SK Profile</a>
        <a href="#">Logout</a>
    </div>
    <div class="content">
        <div class="buttons">
            <button onclick="reloadPage()">Reload</button>
            <button onclick="editReports()">Edit</button>
            <button onclick="printReports()">Print</button>
        </div>
        <h3>Accomplishment Reports </h3>
        <table>
            <tr>
                <th>Date</th>
                <th>Committee</th>
                <th>Title</th>
                <th>Pictures</th>
                <th>Activities / Functions</th>
                <th>status</th>
            </tr>
            <?php
            include_once("config.php");

            $result = mysqli_query($mysqli, "SELECT * FROM areport ORDER BY ar_id DESC");

            while($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$res['date']."</td>";
                echo "<td>".$res['committee']."</td>";
                echo "<td>".$res['title']."</td>";
                echo "<td>".$res['pictures']."</td>";
                echo "<td>".$res['activities']."</td>";
                echo "<td>".$res['status']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <script>
        function editReports() {
            window.location.href = "index2.php";
        }

        function printReports() {
            window.location.href = "print.php";
        }

        function downloadReports() {
            // Add code to download reports
        }

        function reloadPage() {
            location.reload();
        }
    </script>
</body>
</html>
