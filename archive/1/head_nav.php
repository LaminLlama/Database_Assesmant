<!DOCTYPE HTML>
<html lang="en">

<?php

    session_start();
    include("config.php");

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
    <meta name="description" content="Book Fan Reading Log">
    <meta name="keywords" content="books, reading, fiction, science fiction">
    <meta name="author" content="add your name">
    <link rel="stylesheet" href="css/bookstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Fan</title> 
</head>

<body>
    <div class="wrapper">
        <div class="box logo">
        </div> <!-- / logo -->
        <div class="box banner">

            <h1>Book Fan</h1>
        </div> <!-- / banner -->
        <div class="box nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="scifi.html">Sci Fi</a></li>
                <li><a href="Humour.html">Humour</a></li>
                <li><a href="Non Fiction.html">Non Fiction</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div> <!-- / nav -->
        <div class="box main">
           
            <h2>Contact Us</h2>

            <p>Contact us using the form below</p>

            <iframe class="contact"
            src="https://docs.google.com/forms/d/e/1FAIpQLSfkRXiShtjgjj4hmpMAm2QbS8JnNl8bI-vl0AhjTMlgW-z9ZQ/viewform?embedded=true" width="640" height="706" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>

        </div> <!-- / main -->