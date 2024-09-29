<?php
include_once("config.php");

$committee = isset($_GET['committee']) ? $_GET['committee'] : 'All';
$month = isset($_GET['month']) ? $_GET['month'] : '';

// Construct the SQL query based on filters
$query = "SELECT * FROM areport";
if ($committee !== 'All' || $month !== '') {
    $conditions = [];
    if ($committee !== 'All') {
        $conditions[] = "committee='$committee'";
    }
    if ($month !== '') {
        $conditions[] = "MONTHNAME(date)='$month'";
    }
    $query .= " WHERE " . implode(' AND ', $conditions);
}
$query .= " ORDER BY ar_id DESC";

$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Accomplishment Reports</title>
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
            width: 600px;
            align-items: center;
            justify-content: center;

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

        /* Adjustments */
        .table td:nth-child(1), .table th:nth-child(1){
    max-width: 55px; /* Adjust the width of the date column */
}

.table td:nth-child(2), .table th:nth-child(2){
    max-width: 100px;
    word-wrap: break-word; /* Allow text wrapping for committee and title */
}
.table td:nth-child(3), .table th:nth-child(3) {
    max-width: 125px; /* Adjust the maximum width of the activities column */
    word-wrap: break-word;
    font-weight: bold
}

.table td:nth-child(4), .table th:nth-child(4) {
    max-width: 100px; /* Adjust the width of the pictures column */
    word-wrap: break-word; /* Allow text wrapping for activities */

}

.table td:nth-child(5), .table th:nth-child(5) {
    max-width: 200px; /* Adjust the maximum width of the activities column */
    word-wrap: break-word; /* Allow text wrapping for activities */
}
.table td:nth-child(6), .table th:nth-child(6) {
    max-width: 50px; /* Adjust the width of the date column */
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
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
}
.signature {
            text-align: left;
            font-size: 11px;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .signature .line-container {
            width: 100%;
            display: flex;
            justify-content: left;
            margin-top: 0px;
            padding-left: 90px;
        }
        .signature .line {
            width: 300px;
            border-bottom: 1px solid #000;
            margin-bottom: 5px;
            margin-top: 0px;
        }
        .signature .text-center {
            text-align: left;
            padding-left: 170px;
            width: 100%;
        }
        .left{
            margin-top: 30px;
        }
        .buttons {
            display: flex;
            justify-content: baseline;
            margin-top: 10px;
            width: 100%;
            margin-bottom: 20px;
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
    <script>
        function printPage() {
            window.print();
        }
    </script>
</head>
<body onload="printPage()">

<div class="container">

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
                <h3>Sangguniang Kabataan ng Barangay Mayondon Monthly Report</h3>

            </div>

        <div class="table" style="overflow-x: auto;">
            <table>
                <thead>
                    <tr>
                    <th>Date</th>
                    <th>Committee</th>
                    <th>Title</th>
                    <th>Picture</th>
                    <th>Activities</th>
                    <th>Status</th>
                    </tr>
                </thead>
                <?php
            include_once("config.php");

            $result = mysqli_query($mysqli, "SELECT * FROM areport ORDER BY ar_id DESC");

            while($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$res['date']."</td>";
                echo "<td>".$res['committee']."</td>";
                echo "<td>".$res['title']."</td>";
                echo "<td><img src='".$res['pictures']."' alt='Picture'></td>";
                echo "<td>".$res['activities']."</td>";
                echo "<td>".$res['status']."</td>";
                echo "</tr>";
            }
            ?>
            </table>
        </div>
        <div class="signature">
            <p class="left">Submitted by:</p><div class="line-container"><p class="line"></p></div>
            <p class="text-center">Signature over Printed Name</p>
        </div>


</form>
</div>
<div class="buttons">
<a href="areport_overview.php"><button type="button" media="print" id="print" class="back-button">Back</button></a>
            <button media="print" id="print" onclick="location.href = 'areport_print.php';">Print</button></div>
</body>
</html>
