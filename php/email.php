<?php
    session_start();
    include("database.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="color:white;background-color:black">
    <h3>Welcome to TEAM BI0S</h3>
    <p align="center"><h4>You can update your mail here</h4></p>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="1">Enter your new email:</label>
            <input id="1" type="email" name="email1" placeholder="sample123@gmail.com"><br><br>
        <label for="2">Confirm your <span style="white-space: pre;">email  :</label>
            <input id="1" type="password" name="email2" ><br><br>
        <input type="submit" name="submit" value="submit">
</form>
<p>click <a href="home.php">here</a> to go previous page</p>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]="POST"){
        $email1=filter_input(INPUT_POST,"email1",FILTER_SANITIZE_EMAIL);
        $email2=filter_input(INPUT_POST,"email2",FILTER_SANITIZE_EMAIL);
        if($email1==$email2){
            $username=$_SESSION["username"];
            $sql="UPDATE userdata SET email='$email1' WHERE username='$username';";
            mysqli_query($conn,$sql);
            echo "<br>Your email has successfully updated";
        }
    }
    session_abort();
?>
