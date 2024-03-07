<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="color:white;background-color:black">
<div>
    
    <h3 align="center">Welcome To BI0S Registration</h3>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="1">username:</label>
        <input type="text" id="1" name="username" placeholder="username1"><br><br>
    <label for="2">password:</label>
        <input type="password" id="2" name="password" placeholder="skjs!#*!58554"><br><br>
    <label for="3"><span style="white-space: pre;">email      :</span></label>
        <input type="email" id="3" name="email" placeholder="sample123@gmail.com"><br><br>
    <input type="submit" name="submit" value="register"><br>
</form>
<p>click <a href="index.php">here</a> to go back to login page.
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]="POST"){
        $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
        $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS);
        if(empty($username)){
            echo"Please enter the username";
        }
        elseif(empty($password)){
            echo"please enter a password";
        }
        elseif(empty($email)){
            echo"Please Enter a email";
        }
        else{
            $hash=password_hash($password,PASSWORD_DEFAULT);
            $sql ="INSERT INTO userdata (username,password,email)
                VALUES ('$username','$hash','$email')";
            try{
                mysqli_query($conn,$sql);
                echo"You have successfully registered";
            }
            catch(mysqli_sql_exception){
            echo"<br>username already exists";
            }
        }

    }
    mysqli_close($conn);
?>
