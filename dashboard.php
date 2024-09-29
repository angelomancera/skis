<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <style>
        /* Add custom styles */
        body {
            font-family: 'Franklin Gothic Medium', 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
        }

        img {
            width: 65px;
            position: relative;
            left: 0px;
        }

        /* Style for the analytics table header */
        .analytics-header {
            background-color: #1E73BE;
            color: white;
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial', sans-serif;
            margin-bottom: 20px;
            width: 100%;
        }

        /* Style for the boxes */
        .analytics-box, .completed-box, .ongoing-box {
            background-color: #ddc7eb; /* Purple */
            padding: 10px;
            border-radius: 10px;
            margin-top: 10px;
            width: 30%;
            font-family: 'Franklin Gothic Medium', 'Arial', sans-serif;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            padding-left: 20px;
        }

        .completed-box {
            background-color: #f4c4c4; /* Gray */
        }

        .ongoing-box {
            background-color: #90bbe6; /* Blue */
        }

        .icon {
            position: relative;
            width: 60px;
            height: 60px;
            clip-path: polygon(25% 6.7%, 75% 6.7%, 100% 50%, 75% 93.3%, 25% 93.3%, 0% 50%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2em;
            margin-right: 10px;
            color: white;
        }

        .icon.resume-forms {
            background-color: #6a3fd5; /* Purple */
        }

        .icon.completed-projects {
            background-color: #d53f40; /* Red */
        }

        .icon.ongoing-projects {
            background-color: #3f56d6; /* Blue */
        }

        .content-text {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Style for the count numbers */
        .count-number {
            font-size: 3em; /* Increase the size of the count numbers */
            font-weight: bold;
            margin: 0; /* Remove margin */
            padding: 0; /* Remove padding */
        }

        p {
            margin-top: 5px; /* Adjust space between number and text */
        }

        /* Style for the charts */
        .chart-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            width: 100%;
        }

        .chart-box {
            width: 230px; /* Increase the width of the chart box */
            height: 230px; /* Increase the height of the chart box */
            margin-top: 20px;
            padding: 10px;
            border-radius: 10px;
            background-color: #f4f4f4;
            position: relative;
        }

        .chart-label {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.5em;
            color: #333;
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial', sans-serif;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
        exit;
    }
    
    // Include your database connection
    include_once('config.php');
    
    // Query to get the counts
    $resumeFormsCount = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT COUNT(*) AS count FROM res"));
    $completedProjectsCount = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT COUNT(*) AS count FROM areport WHERE status = 'Completed'"));
    $ongoingProjectsCount = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT COUNT(*) AS count FROM areport WHERE status = 'Ongoing'"));
    
    // Query to get the counts for sex
    $maleCount = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT COUNT(*) AS count FROM res WHERE sex = 'Male'"));
    $femaleCount = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT COUNT(*) AS count FROM res WHERE sex = 'Female'"));

    // Query to get the counts for status
    $singleCount = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT COUNT(*) AS count FROM res WHERE status = 'Single'"));
    $marriedCount = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT COUNT(*) AS count FROM res WHERE status = 'Married'"));
    $divorcedCount = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT COUNT(*) AS count FROM res WHERE status = 'Divorced'"));
    $widowedCount = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT COUNT(*) AS count FROM res WHERE status = 'Widowed'"));

    // Calculate age groups
    function calculateAgeGroup($birthdate) {
        $age = date_diff(date_create($birthdate), date_create('today'))->y;
        if ($age >= 15 && $age <= 17) {
            return "Child/Youth";
        } elseif ($age >= 18 && $age <= 24) {
            return "Core Youth";
        } elseif ($age >= 25 && $age <= 30) {
            return "Young Adult";
        } else {
            return "Others";
        }
    }

    // Query to get the birthdates
    $birthdatesResult = mysqli_query($mysqli, "SELECT birthdate FROM res");
    $childYouthCount = 0;
    $coreYouthCount = 0;
    $youngAdultCount = 0;
    $othersCount = 0;

    while ($row = mysqli_fetch_assoc($birthdatesResult)) {
        $ageGroup = calculateAgeGroup($row['birthdate']);
        if ($ageGroup == 'Child/Youth') {
            $childYouthCount++;
        } elseif ($ageGroup == 'Core Youth') {
            $coreYouthCount++;
        } elseif ($ageGroup == 'Young Adult') {
            $youngAdultCount++;
        } else {
            $othersCount++;
        }
    }
    ?>

    <?php include 'sidebar.php'; 
    displaySidebar('dashboard'); 
    ?>
    <div class="content">
        <div class="analytics-header"><h1>ANALYTICS</h1></div>

        <div class="container">
            <!-- Box for Total Resume Forms Created -->
            <div class="analytics-box">
                <div class="icon resume-forms"><i class="fas fa-file-alt"></i></div>
                <div class="content-text">
                    <div class="count-number"><?php echo $resumeFormsCount['count']; ?></div>
                    <p>Total Resume Forms</p>
                </div>
            </div>

            <!-- Box for Total Completed Projects -->
            <div class="completed-box">
                <div class="icon completed-projects"><i class="fas fa-check-circle"></i></div>
                <div class="content-text">
                    <div class="count-number"><?php echo $completedProjectsCount['count']; ?></div>
                    <p>Completed Projects</p>
                </div>
            </div>

            <!-- Box for Total Ongoing Projects -->
            <div class="ongoing-box">
                <div class="icon ongoing-projects"><i class="fas fa-spinner"></i></div>
                <div class="content-text">
                    <div class="count-number"><?php echo $ongoingProjectsCount['count']; ?></div>
                    <p>Ongoing Projects</p>
                </div>
            </div>
        </div>

        <div class="chart-container">
            <div class="chart-box">
                <div class="chart-label">Sex</div>
                <canvas id="sexChart"></canvas>
            </div>
            <div class="chart-box">
                <div class="chart-label">Status</div>
                <canvas id="statusChart"></canvas>
            </div>
            <div class="chart-box">
                <div class="chart-label">Age Group</div>
                <canvas id="ageGroupChart"></canvas>
            </div>
        </div>
    </div>

    <!-- JavaScript code for Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const sexData = {
            labels: ['Male', 'Female'],
            datasets: [{
                label: 'Sex',
                data: [<?php echo $maleCount['count']; ?>, <?php echo $femaleCount['count']; ?>],
                backgroundColor: ['#3c6696', '#02adc9'],
            }]
        };

        const statusData = {
            labels: ['Single', 'Married', 'Divorced', 'Widowed'],
            datasets: [{
                label: 'Status',
                data: [<?php echo $singleCount['count']; ?>, <?php echo $marriedCount['count']; ?>, <?php echo $divorcedCount['count']; ?>, <?php echo $widowedCount['count']; ?>],
                backgroundColor: ['#3c6696', '#02adc9', '#2e91d5', '#005596'],
            }]
        };

        const ageGroupData = {
            labels: ['Child/Youth (15-17)', 'Core Youth (18-24)', 'Young Adult (25-30)', 'Others'],
            datasets: [{
                label: 'Age Group Distribution',
                data: [<?php echo $childYouthCount; ?>, <?php echo $coreYouthCount; ?>, <?php echo $youngAdultCount; ?>, <?php echo $othersCount; ?>],
                backgroundColor: ['#3c6696', '#02adc9', '#2e91d5', '#005596'],
            }]
        };

        const config = {
            type: 'doughnut',
            data: sexData,
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                cutout: '50%'
            }
        };

        const statusConfig = {
            type: 'doughnut',
            data: statusData,
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                cutout: '50%'
            }
        };

        const ageGroupConfig = {
            type: 'doughnut',
            data: ageGroupData,
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                cutout: '50%'
            }
        };

        window.onload = function() {
            const sexChart = new Chart(
                document.getElementById('sexChart'),
                config
            );

            const statusChart = new Chart(
                document.getElementById('statusChart'),
                statusConfig
            );

            const ageGroupChart = new Chart(
                document.getElementById('ageGroupChart'),
                ageGroupConfig
            );
        };
    </script>
</body>
</html>
