<?php
    if (empty($_SESSION["username"])){
        header("Location: index.php");
    }
?>

<?php
    $db_server="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="bi0s";
    $conn="";
    try{
        $conn=mysqli_connect($db_server,
                            $db_user,
                            $db_pass,
                            $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Could not connect server<br>";
    }
?>
    
