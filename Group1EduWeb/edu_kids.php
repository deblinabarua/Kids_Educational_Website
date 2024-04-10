<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dbc=mysqli_connect('localhost','root','MySenseofTime...0','users') or die("Error connecting to the database");
    $query="SELECT * FROM login WHERE username='$username' AND pwd='$password'";
    $result=mysqli_query($dbc,$query) or die("Error querying database");
    if (mysqli_num_rows($result)>0){
        $_SESSION['current_user']=$username;
        $nickname=mysqli_fetch_assoc($result);
        $_SESSION['nickname']=$nickname['f_name'];
        header("Location: welcome.php");
        exit();
    } 
    else{
        header("Location: LoginFail.html");
        exit();
    }
    mysqli_close($dbc);
?>