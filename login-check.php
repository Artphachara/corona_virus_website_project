<?php
    session_start();
    require_once "config.php";

    if(isset($_POST['username']) && isset($_POST['password'])){
        $uname = $_POST['username'];
        $pw = $_POST['password'];

        $userQuery = ("SELECT * FROM user
                      WHERE username = '$uname' AND password = '$pw'");
        $result = mysqli_query($connect,$userQuery);
        
        if(!$result){
            die("Could not successfully run the query $userQuery".mysqli_error($connect));
        }
        
        $row = mysqli_fetch_assoc($result);
        $user_name = $row['username'];
        $password = $row['password'];

        if(($user_name == $uname) && ($password == $pw)){
            header("Location:home-login.php");
        }
        else{
            echo "Username or Password are not correct, Please try again !!!";
        }
        mysqli_close($connect);
    }
?>