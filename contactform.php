<?php

if(isset($_POST['submit'])) {
$FirstName =  $_POST['FirstName'];
$LastName =  $_POST['LastName'];
$email =  $_POST['email'];
$grade =  $_POST['grade'];
$level =  $_POST['level'];
$story =  $_POST['story'];
$message =  $_POST['message'];


$mailheader = "From:".$FirstName.$LastName"<".$email.">\r\n"

$recipient = "ronaldosimbana@hotmail.com"; ##this email is added just to test

mail($recipient, $message, $grade, $level,$story,$mailheader)
}
or die("Error!")


echo' 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;1,600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="icon" href="./img/Logo (check mate-red).png">
    <link rel="stylesheet" href="contactform.css"> 
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-secondary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="img/Logo (check mate-red).png"></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" name="button">
                 <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                          <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home</a>
                </li>
                            
                          <li class="nav-item">
                                <a class="nav-link" href="members.html">Members</a>
                </li>
                          <li class="nav-item">
                                <a class="nav-link" href="announcements.html">Announcements</a>
                </li>
                          <li class="nav-item">
                                <a class="nav-link" href="contactform.html">Contact Us!</a>
                </li>
    
    
            </ul>
    
            </div>
    
    </div>
    </nav>

    <div class="container">
        <h1>Thanks for contact us. We will get back to you as soon as possible!</h1>
        <p class="back">Go back to <a href="contactform.html">Contact Form</a>.</p>
    </div>

<!--Footer-->
<footer> 
    <div class="container-fluid padding">
        <div class="row text-center">  
        <div class="col-md-4">
            <hr class="light">
            <p>chess.club.pace@gmail.com</p>
            <p>New York City Campus</p> 
        </div>
        <div class="col-md-4">
            <hr class="light">
            <h5>Our Hours</h5>
            <hr class="light">
            <p>During common-hour</p>
            <p>Mondays: at 12:10 - 1:10 pm</p>
            <p>Wednesdays at 12:10 - 1:10 pm</p>   
            <p>Room: E325</p> 

        </div> 
        <div class="col-md-4">
            <hr class="light">
            <h5>Locations</h5> 
            <hr class="light">
            <p>Westchester, New York, 10570</p>
            <p>New York City, New York, 10570</p>
        </div>
       
</footer>

    
</body>
</html>





';

?>