<?php
    session_start();
?>
<?php
    if (empty($_SESSION["username"])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="color:white;background-color:black">
    <h3> WELCOME TO MAIN PAGE</h3>
    <p> your tasks will be uploades here at <b>01/03/2024</b> <b>12:00 PM</b>.Once the tasks are uploaded you must udate your status everyday. You should mail to <a href="mailto:bi0s@gmail.com">bi0s</a> everyday before 11:00pm.<br>
    <p>click <a href=email.php>here</a> to update your email</p>
</body>
</html>
