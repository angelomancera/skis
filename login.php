<?php
session_start();
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $conn = new mysqli('localhost', 'root', '', 'areport');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare('SELECT * FROM login WHERE username = ? AND password = ?');
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
            exit;
        } else {
            $message = 'Invalid username or password.';
        }

        $stmt->close();
        $conn->close();
    } else {
        $message = 'Please fill in both fields.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SK - YOUTH - SYSTEM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .main-form {
            display: flex;
            width: 100%;
            justify-content: center;
        }

        .design-form {
            width: 50%;
            position: relative;
            color: white;
            z-index: 1;
            overflow: hidden;
        }

        .design-form .content {
            position: absolute;
            bottom: 20px;
            left: 20px;
            z-index: 3;
        }

        .design-form .content h5{
            font-size: 25px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: white;
            text-align: left;
            margin bottom: 8px;
            margin: 0;
        }
        .design-form .content p {
            font-size: 16px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: white;
            text-align: left;
            margin: 0;
        }

        .design-form .color {
            background-color: #1E73BE;
            width: 100%;
            height: 100%;
            opacity: 50%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
        }

        .design-form .background {
            background-image: url('a8b50d4a0e3765748e95cb28f21f5212x.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .login-form {
            width: 50%;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
            padding: 20px;
        }

        .sk-logo {
            width: 20%;
            margin-bottom: 20px;
        }

        .txt {
            margin-bottom: 20px;
        }

        .second-form h2 {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 30px;
            color: #1E73BE;
            font-weight: bolder;
            margin: 5px 0;
        }

        .first-txt {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 16px;
            font-weight: lighter;
            color: black;
        }

        .txt-fields {
            width: 50%;
            text-align: center;
        }

        .pass, .user {
            width: 100%;
            padding: 15px;
            border-radius: 20px;
            margin-top: 10px;
            margin: 10px 0;
            border: none;
            background-color: rgba(128, 128, 128, 0.189);
            outline: none;
            font-size: 16px;
            text-align: center;
        }

        .pass::placeholder, .user::placeholder {
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 16px;
            font-weight: bold;
            opacity: .6;
        }

        .submit-btn {
            margin-top: 10px;
            justify-content: center;
            text-align: center;
        }

        .btn {
            width: 50%;
            padding: 10px;
            border-radius: 20px;
            background-color: #1E73BE;
            color: white;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1px;
            border: none;
            cursor: pointer;
            text-align: center;
        }

        i {
            position: absolute;
            font-size: 20px;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .username, .password {
            position: relative;
            width: 100%;
        }

        .message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="main-form">
        <div class="design-form">
            <div class="content">
                <h5>SK MAYONDON YOUTH REPORT +</h5>
                <p>The SK Mayondon Youth Report + is an information management system designed to assist the youth of Barangay Mayondon in their personal and professional development by offering a user-friendly resume builder and managing accomplishment report.</p>
            </div>
            <div class="color"></div>
            <div class="background"></div>
        </div>
        <div class="login-form">
            <img src="297187650_1458604797898860_1179154632723459082_n-removebg-preview.png" class="sk-logo" alt="Logo">
            <div class="txt">
                <div class="first-txt">
                    <p>Welcome to SK Youth Report +</p>
                </div>
                <div class="second-form">
                    <h2>LOGIN TO YOUR ACCOUNT</h2>
                    <h2>TO CONTINUE.</h2>
                </div>
            </div>
            <div class="txt-fields">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="myForm">
                    <div class="username">
                        <i class="fa fa-user"></i>
                        <input class="user" type="text" placeholder="Username" name="username">
                    </div>
                    <div class="password">
                        <i class="fa fa-lock"></i>
                        <input class="pass" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="submit-btn">
                        <input class="btn" type="submit" name="submit" value="LOGIN">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php if (!empty($message)): ?>
        <script>
            alert("<?php echo $message; ?>");
        </script>
    <?php endif; ?>
</body>
</html>
