<?php

$conn=mysqli_connect(
"localhost",
"root",
"",
"user_module1"
);

if(!$conn){
die("Connection Failed");
}
else{
    echo "conection successful";
}

?>
