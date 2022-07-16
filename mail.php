<?php
//get data from form  

$psname = filter_input(NPUT_POST, 'psname');
$email; = filter_input(NPUT_POST, 'email');
$message = filter_input(NPUT_POST, 'message');

if(!empty($psname) || !empty($email) || !empty($message))
{
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = " ";
    $dbname = "phpmyadmin"
    //create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if(mysqli_connect_error()) {
        die('Connect Error(' .mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $sql = "INSERT INTO contact form (psname,email,message)
        values ('$psname', '$email', '$message')";
        if($conn->query($sql))
        {
            echo "NEW RECORD INSERTED SUCCESSFULLY";
        }
        else{
            echo "ERROR : ", &sql ,"<br>", $conn->error;
        }
        $conn->close();
    }
    else
    {
        echo" UNSUCCESSFUL !!!!";
        DIE();
    }
}
//redirect
//header("Location:thankyou.html");
?>