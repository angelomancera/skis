
<?php

function displaySidebar($activePage) {

    $menuItems = [
        'dashboard' => ['link' => 'dashboard.php', 'icon' => 'fas fa-tachometer-alt', 'label' => 'Dashboard'],
        'resume' => ['link' => 'resume_overview.php', 'icon' => 'fas fa-file-alt', 'label' => 'Resume'],
        'accomplishment_report' => ['link' => 'areport_overview.php', 'icon' => 'fas fa-folder', 'label' => 'Accomplishment Report'],
        'sk_profile' => ['link' => 'sk_profile.php', 'icon' => 'fas fa-user', 'label' => 'SK Profile']
    ];

    echo '<div class="sidebar">
        <div class="logo">
            <img src="297187650_1458604797898860_1179154632723459082_n-removebg-preview.png" alt="Logo">
            <div class="logo-text">
            <br><br><br><h5>SANGGUNIANG KABATAAN</br>
                <h6>NG BARANGAY MAYONDON</h6><br><br>
            </div>
        </div>
        <div class="menu">';

    foreach ($menuItems as $key => $item) {
        $activeClass = ($key === $activePage) ? ' active' : '';
        echo '<a href="' . $item['link'] . '" class="menu-item' . $activeClass . '"><i class="' . $item['icon'] . '"></i> ' . $item['label'] . '</a>';
    }

    echo '</div>
        <div class="logout">
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <style>
        body {
            margin: 0;
            font-family: 'Cambria, Cochin, Georgia, Times, Times New Roman, serif';
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #1E73BE;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        .sidebar .logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .sidebar .logo img {
            width: 60px;
            margin-right: 10px;
        }

        .sidebar .logo-text {
            display: inline-block;
        }

        .sidebar h5, .sidebar h6 {
            margin: 0;
            line-height: 1.2;
        }

        .sidebar .menu {
            flex-grow: 1;
        }

        .sidebar .menu a {
            display: flex;
            align-items: center;
            color: white;
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
            margin: 5px 0;
            transition: background 0.3s;
            position: relative;
            z-index: 1;
        }

        .sidebar .menu a i {
            margin-right: 10px;
            font-size: 20px;
        }

        .sidebar a.active {
            background-color: #3E8EF7;
            z-index: 0;
        }

        .sidebar .menu a:hover {
            background-color: #3E8EF7;
            opacity: 25%;
            z-index: 0;
        }

        .sidebar .logout {
            text-align: right;
            margin-bottom: 20px;
        }

        .sidebar .logout a {
            display: inline-block; /* Change from block to inline-block */
    width: fit-content;
            color: white;
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
            margin: 5px 0;
            transition: box-shadow 0.3s, transform 0.3s;
            background-color: transparent;
            position: relative;
            z-index: 2;
        }

        .sidebar .logout a:hover {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            transform: translateY(-2px);
            background-color: #3E8EF7;
            opacity: 0.25;
            z-index: 1;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
