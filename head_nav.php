<!DOCTYPE HTML>
<html lang="en">

<?php

    session_start();
    include("config.php");
    include("functions.php"); // Include data sanitizing...

    // Connect to database...

    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if (mysqli_connect_errno())

    {
        echo "Connection failed:".mysqli_connect_error();
        exit;
    }

?>


<head>
    <meta charset="UTF-8">
    <meta name="author" content="Reilly Moonen">
    <link rel="stylesheet" href="css/bookstyle.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Fan</title> 
</head>

<body>
    <div class="wrapper">
        <div class="box logo">
            <img src="images/MoonenBeams_old_video_camera_cinimatic_unreal_engine_5_dark_lig_96793b4b-8577-4596-9cf1-cb4ae74b121d.png" alt="Camera" style="width:100%;height:100%; border-radius: 10px;">
        </div> <!-- / logo -->
        <div class="box banner">

            <h1>Movie Fan</h1>
            <h3>Search for a review of your favorite movie<h3>
        </div> <!-- / banner -->
        <div class="box nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div> <!-- / nav -->
        <div class="box main">

        </div> <!-- / main -->
        <!--
_________  _______   ___  ___       ___           ___    ___
|\   __  \|\  ___ \ |\  \|\  \     |\  \         |\  \  /  /|
\ \  \|\  \ \   __/|\ \  \ \  \    \ \  \        \ \  \/  / /
 \ \   _  _\ \  \_|/_\ \  \ \  \    \ \  \        \ \    / / 
  \ \  \\  \\ \  \_|\ \ \  \ \  \____\ \  \____    \/  /  /  
   \ \__\\ _\\ \_______\ \__\ \_______\ \_______\__/  / /    
    \|__|\|__|\|_______|\|__|\|_______|\|_______|\___/ /     
                                                \|___|/      
                                                             
-->