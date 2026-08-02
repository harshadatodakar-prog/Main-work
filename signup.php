<?php

include("config.php");

$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$password = password_hash(
    $_POST['password'],
    PASSWORD_DEFAULT
);

$sql = "INSERT INTO users
(username, phone, email, password)

VALUES
('$username','$phone','$email','$password')";

if(mysqli_query($conn,$sql))
{
    echo "
    <script>
    alert('Account Created Successfully');
    window.location='login.html';
    </script>
    ";
}
else
{
    echo "Error";
}

?>