<?php
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $phone = $_POST['telephone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dbc=mysqli_connect('localhost','root','harsha','users') or die("Error connecting to the database");
    $query="SELECT * FROM login WHERE username='$username'";
    $result=mysqli_query($dbc,$query) or die("Error querying database");     

    if(mysqli_num_rows($result)>0){
        echo "Username already exits. Please try again <a href='sign_up.html'>here</a>.";
    }
    if (mysqli_num_rows($result)==0){
        $query2="INSERT INTO login VALUES('$username','$f_name','$l_name','$phone','$password')";
        $result2=mysqli_query($dbc,$query2) or die("Error querying database");
        echo "Sign up successful! Click <a href='edu_kids.html'>here</a> to Login.";
             
        }
    mysqli_close($dbc);
?>