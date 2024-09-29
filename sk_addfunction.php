<html>
<head>
    <title>SK Add Function</title>
</head>
<body>
    <?php
    include_once("config.php");

    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $position = mysqli_real_escape_string($mysqli, $_POST['position']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $committee = mysqli_real_escape_string($mysqli, $_POST['committee']);

        $allowed_file_types = ['image/jpg', 'image/jpeg', 'image/avif', 'image/png', 'image/gif'];
        $uploadOk = 1;
        $upictures = '';

        if (!empty($_FILES['pictures']['name'])) {
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
        }

        // Check if fields are empty
        if (empty($name) || empty($position) || empty($email) || empty($committee)) {
            if (empty($name)) {
                echo "<font color='pink'> Name field is empty</font><br>";
            }

            if (empty($position)) {
                echo "<font color='pink'> Position field is empty</font><br>";
            }

            if (empty($email)) {
                echo "<font color='pink'> Email field is empty</font><br>";
            }

            if (empty($committee)) {
                echo "<font color='pink'> Committee field is empty</font><br>";
            }

            echo "<br><a href='javascript:self.history.back();'>Go Back</a>";
        } else if ($uploadOk) {
            $result = mysqli_query($mysqli, "INSERT INTO sk_profile (pictures, name, position, email, committee) VALUES ('$upictures', '$name', '$position', '$email', '$committee')");

            if ($result) {
                echo "<font color='yellow'>Data added successfully!</font>";
            } else {
                echo "Error: " . mysqli_error($mysqli);
            }

            header('Location: sk_profile_edit_table.php');
        }
    }
    ?>
</body>
</html>
