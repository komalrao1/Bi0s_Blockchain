<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="color:white;background-color:black">
<big><b>Welcome to BI0S >></b></big>
         <i>India's No.1 CTF Team</i>
        <p> We are very excited to share that we have started blochain domain in BI0S. we are opening registrations from 29/02/2024.Those who are intrested can fill the below form and register for blockchain domain. Registered candidates will get tasks once you login with your username and password.</p>
        <b align="center"> -TEAM BI0S- </b> </br>
        <br>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label for="1">username:</label>
                <input type="text" id="1" name="username" placeholder="username1"><br><br>
            <label for="2">password:</label>
                <input type="password" id="2" name="password" placeholder="skjs!#*!58554"><br><br>
            <input type="submit" name="submit" value="login">
            <P>didn't registered? what are you looking for click <a href="register.php">here</a> to register
        </div>
        
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]="POST"){
        $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
        if(empty($username)){
            echo"Please enter the username";
        }
        elseif(empty($password)){
            echo"please enter a password";
        }
        else{
            include("database.php");
            $hash=password_hash($password,PASSWORD_DEFAULT);
            $sql="SELECT password FROM userdata
                    WHERE username='$username';";
            $result=mysqli_query($conn,$sql);
            if (isset($result)) {
                mysqli_close($conn);
                $_SESSION["username"]=$username;
            }
            if(mysqli_num_rows($result) >0){
                $col=mysqli_fetch_assoc($result);
                if(password_verify($password,$col["password"])){
                    header("Location: home.php");
                    
                }
                else{
                    echo"You have entered wrong password";
                }
            }
            else{
                echo"User doesnot exist";
            }
        }
    }
?>  
