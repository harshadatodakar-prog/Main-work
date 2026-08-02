<?php

include("config.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
WHERE email='$email'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    $row = mysqli_fetch_assoc($result);

    if(password_verify(
        $password,
        $row['password']))
    {
        session_start();

        $_SESSION['user']=$row['username'];

        header("Location: dashboard.php");
    }
    else
    {
        echo "Wrong Password";
    }
}
else
{
    echo "User Not Found";
}

?>