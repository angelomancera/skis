<html>
    <head>
        <title>add data</title>
    </head>

    <body>
        <?php
        include_once("config.php");

        if(isset($_POST['submit'])){
            $date = mysqli_real_escape_string($mysqli, $_POST['date']);
            $committee = mysqli_real_escape_string($mysqli, $_POST['committee']);
            $title = mysqli_real_escape_string($mysqli, $_POST['title']);
           
            $activities = mysqli_real_escape_string($mysqli, $_POST['activities']);
            $status = mysqli_real_escape_string($mysqli, $_POST['status']);

            if (isset($_POST['submit'])) {
                $date = mysqli_real_escape_string($mysqli, $_POST['date']);
                $committee = mysqli_real_escape_string($mysqli, $_POST['committee']);
                $title = mysqli_real_escape_string($mysqli, $_POST['title']);
                $activities = mysqli_real_escape_string($mysqli, $_POST['activities']);
                $status = mysqli_real_escape_string($mysqli, $_POST['status']);
    
                $allowed_file_types = ['image/jpg', 'image/avif', 'image/png', 'image/gif'];
                $uploadOk = 1;
                $upictures = '';
    
                if ($_FILES['pictures']['name']) {
                    $target_dir = "img/";
                    $target_file = $target_dir . basename($_FILES["pictures"]["name"]);
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
                    // Check if file is an image
                    $check = getimagesize($_FILES["pictures"]["tmp_name"]);
                    if ($check !== false) {
                        if (in_array($check['mime'], $allowed_file_types)) {
                            // File is an allowed image type - continue uploading
                            if (move_uploaded_file($_FILES["pictures"]["tmp_name"], $target_file)) {
                                $upictures = $target_file;
                            } else {
                                echo "Sorry, there was an error uploading your file.";
                                $uploadOk = 0;
                            }
                        } else {
                            // File is not an allowed image type
                            echo "Sorry, only JPEG, AVIF, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }
                    } else {
                        // File is not an image
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                } else {
                    $upictures = $_POST['current_picture'];
                }
    
                // Check if fields are empty
                if (empty($date) || empty($committee) || empty($title) || empty($activities) || empty($status)) {
                    if (empty($date)) {
                        echo "<font color='pink'> Date field is empty</font><br>";
                    }
    
                    if (empty($committee)) {
                        echo "<font color='pink'> Committee field is empty</font><br>";
                    }
    
                    if (empty($title)) {
                        echo "<font color='pink'> Title field is empty</font><br>";
                    }
    
                    if (empty($activities)) {
                        echo "<font color='pink'> Activities field is empty</font><br>";
                    }
    
                    if (empty($status)) {
                        echo "<font color='pink'> Status field is empty</font><br>";
                    }
    
                    echo "<br><a href='javascript:self.history.back();'>Go Back</a>";
                } else if ($uploadOk) {
                    $result = mysqli_query($mysqli, "INSERT INTO areport (date, committee, title, pictures, activities, status) VALUES('$date', '$committee', '$title', '$upictures', '$activities', '$status')");
    
                    if ($result) {
                        echo "<font color='yellow'>Data added successfully!</font>";
                    } else {
                        echo "Error: " . mysqli_error($mysqli);
                    }
                    
                    header('Location:areport_edit_table.php');
                }
            }}
            ?>
        </body>
    </html>