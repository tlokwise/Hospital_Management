<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script defer src="homejs.js"></script>
    <title>States Hospital</title>
</head>
<body>
    <div class="top-nav">
        <h2>States Hospital</h2>
        <div class="top-nav-left-side">
            <span id="online-indicator">Online</span>
        </div>
    </div>

    <div class="center">
        <div class="left-nav">
            <div class="profile">
                <img class="img" src="/images/francisco-venancio-M4Xloxsg0Gw-unsplash.jpg" alt="">
                <div class="profile-details">
                    <span id="name"><?php if(isset($_SESSION['name']) && isset($_SESSION['surname'])) echo $_SESSION['name'] . " " . $_SESSION['surname'];?></span>
                    <span id="profession"><?php if(isset($_SESSION['profession'])) echo $_SESSION['profession']; ?></span>
                </div>
            </div>
            <div class="nav-list">
                <ul>
                    <li data-nav-dashboard><i class="fa-solid fa-house-chimney"></i> Dashboard </li>
                    <li data-nav-appointments><i class="fa-solid fa-calendar-days"></i> Appointment<sup class="counter">!</sup></li>
                    <li data-nav-messages><i class="fa-solid fa-envelope"></i> Messages<sup class="counter"></sup></li>
                    <li data-nav-patients><i class="fa-solid fa-bed-pulse"></i> Patients<sup class="counter"></sup></li>
                    <li data-nav-surgeries><i class="fa-solid fa-user-doctor"></i> Surgeries <sup class="counter"></sup></li>
                    <li data-nav-pharmarcy><i class="fa-solid fa-prescription-bottle-medical"></i> Pharmacy</li>
                    <li data-nav-doctor-files><i class="fa-solid fa-folder-open"></i>Doctor's Files</li>
                    <li data-nav-operation-room>Operation Room (OR)</li>
                    <li data-nav-mri>Magnetic Resonance Imaging (MRI)</li>
                </ul>
            </div>
    
        </div>
    
        <div class="main">
            <h1><i class='fa-solid fa-gauge'></i> Dashboard </h1><hr>
            <div class="cards">
                <?php
                    //dynamically creating main html content 
                ?>
                <span class="card"></span>
                <span class="card"></span>
                <span class="card"></span>
                <span class="card"></span>
                <span class="card"></span>
            </div>
        </div>

    </div>
</body>
</html>