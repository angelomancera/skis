<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #1E73BE;
            color: white;
        }
        form {
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .table .thead {
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
        .form-title {
            display: inline-block;
            position: relative;
            margin: 0px 30px;
            text-align: center;
            line-height: 4px;
            top: 10px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            /* font-size: medium; */
        }
        .header, .title-sheet {
            position: relative;
            text-align: center;
            font-size: 12px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .img {
            position: relative;
            margin: 0px 20px;
        }
        hr {
            height: 5px;
            background-color: #1E73BE;
            width: 100%;
            margin: 0;
        }
        img {
            width: 65px;
            border-radius: 10px;
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
        .table-row {
            background-color: #cfcecf;
            border-radius: 10px;
            margin-bottom: 0px; /* Add space between rows */
            overflow: hidden;
            column-span: 5px;
        }
        .table-row img {
            border-radius: 15px;
        }

        .table td:nth-child(1), .table th:nth-child(1){
    max-width: 50px; /* Adjust the width of the date column */
}

.table td:nth-child(2), .table th:nth-child(2){
    max-width: 125px;
    word-wrap: break-word; /* Allow text wrapping for committee and title */
}
.table td:nth-child(3), .table th:nth-child(3) {
    max-width: 100px; /* Adjust the maximum width of the activities column */
    word-wrap: break-word;
}

.table td:nth-child(4), .table th:nth-child(4) {
    max-width: 125px; /* Adjust the width of the pictures column */
    word-wrap: break-word;


}
.table td:nth-child(4), .table th:nth-child(4) {
    max-width: 50px; /* Adjust the width of the pictures column */

}
.table-row td:first-child {
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }
        .table-row td:last-child {
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .img-col-1 {
            width: 40px; /* Set the width to 100px */
            height: 40px; /* Set the height to 100px */
            border-radius: 100%;
        }
table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 10px; /* Add space between rows */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);}
    </style>
</head>
<body>
    <?php 
    include 'sidebar.php'; 
    displaySidebar('sk_profile'); 
    ?>

    <div class="content">
        <div class="buttons" style="text-align: right;">
            <button onclick="location.reload();">Reload</button>
            <button onclick="location.href='sk_add.php';">Add</button> 
        </div>
        <br>
        <form>
        <div class="table" style="overflow-x: auto;">
            <table>
                <thead>
                    <tr>
                    <th>Profile</th>
                        <th>Name and Position</th>
                        <th>Committee</th>
                        <th>Email</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6"><hr></td>
                    </tr>
                   
            </tbody>
            <?php
            include_once("config.php");

            $result = mysqli_query($mysqli, "SELECT * FROM sk_profile ORDER BY sk_id DESC");

            while($res = mysqli_fetch_array($result)) {
                echo "<tr class='table-row'>";
                echo "<td><img src='".$res['pictures']."' alt='Picture' class='img-col-1'></td>";
                echo "<td><strong>".$res['name']."</strong><br>".$res['position']."</td>";
                echo "<td>".nl2br($res['committee'])."</td>";
                echo "<td>".$res['email']."</td>";
                echo "<td>
                <a href='sk_update.php?sk_id={$res['sk_id']}' title='Edit'>
                    <i class='fas fa-edit' style='color: #1E73BE;'></i>
                </a>
                <a href='sk_delete.php?sk_id={$res['sk_id']}' onClick=\"return confirm('Are you sure you want to delete?')\" title='Delete'>
                    <i class='fas fa-trash' style='color: #1E73BE;'></i>
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
