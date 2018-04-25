<?php
    $connection = mysqli_connect('localhost','root','12345','testapp');

    if(mysqli_connect_errno()){
        die('Databse Connection Failed '. mysqli_connect_error());
    }
?>