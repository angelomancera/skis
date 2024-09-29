<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Accomplishment Report</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <style>
        body {
            display: flex;
            margin: 0;
            padding: 0;
            height: 100vh;

        }
        .content {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 750px;
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        .form-content {
            display: flex;
            width: 100%;
        }
        .left-section {
            flex: 1;
            text-align: center;
            margin-right: 20px;
        }
        .left-section img {
            width: 100px;
            height: auto;
            margin-bottom: 10px;
        }
        .left-section input[type="file"] {
            display: block;
            align-items: center;
            margin: 0 auto;
            padding-left: 30px;
        }
        .right-section {
            flex: 2;
        }
        .right-section table {
            width: 100%;
        }
        .right-section td {
            padding: 5px 0px;
        }
        .right-section input[type="date"],
        .right-section input[type="text"],
        .right-section select,
        .right-section textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .required::after {
            content: " *";
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

    </style>
</head>
<body>
<?php 
    include 'sidebar.php'; 
    displaySidebar('accomplishment_report'); 
    ?>

    <div class="content">
        <form action="areport_addfunction.php" method="post" class="form-container">
        <div class="header">
                <img class="img" src="297187650_1458604797898860_1179154632723459082_n-removebg-preview.png" alt="">
                <div class="form-title">
                    <p>Republic of the Philippines</p>
                    <p>Province of Laguna</p>
                    <p>Municipality of Los Banos</p><br><br>
                </div>
                <img class="img" src="303590580_492900189508693_3650462224514911687_n-removebg-preview.png" alt="">
                <br><br>

            </div>
            <div class="form-content">
            <div class="left-section">
                    <br><br><br><br><br>
                    <img src="<?php echo $pictures; ?>" style="width: 100px; height: 100px;">
                    <input type="file" name="pictures" class="required" required>
                    <input type="hidden" name="current_picture" value="<?php echo $pictures; ?>" required>
                </div> 


                <div class="right-section">
                    <table>
                        <tr>
                            <td class="required">Date: </td>
                            <td><input type="date" name="date" required></td>
                        </tr>
                        <tr>
                            <td class="required">Committee: </td>
                            <td>
                                <select name="committee" required>
                                    <option value="" disabled selected>Select</option>
                                    <option value="Active Citizenship">Active Citizenship</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="Budget and Finance">Budget and Finance</option>
                                    <option value="Economic Empowerment">Economic Empowerment</option>
                                    <option value="Education">Education</option>
                                    <option value="Environment">Environment</option>
                                    <option value="Global Mobility">Global Mobility</option>
                                    <option value="Governance">Governance</option>
                                    <option value="Health">Health</option>
                                    <option value="Peace Building and Security">Peace Building and Security</option>
                                    <option value="Social Inclusion and Equity">Social Inclusion and Equity</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="required">Title: </td>
                            <td><input type="text" name="title" required></td>
                        </tr>
                        <tr>
                            <td class="required">Activities: </td>
                            <td><input type="text" name="activities" required></td>
                        </tr>
                        <tr>
                            <td class="required">Status: </td>
                            <td>
                                <select name="status" required>
                                    <option value="" disabled selected>Select</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Ongoing">On-going</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    
                </div>
            </div>
            <div class="buttons">
                        <a href="areport_edit_table.php"><button type="button" class="back-button">Back</button></a>
                        <button type="submit" name="submit">Submit</button>

                    </div>
        </form>
    </div>
</body>
</html>
