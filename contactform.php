<?php

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

or die("Error!")


echo"message send successfully";

?>