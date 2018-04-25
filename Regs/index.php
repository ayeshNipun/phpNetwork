<?php
    require_once('config/connection.php');

    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $passw1 = $_POST['password1'];
        $passw2 = $_POST['password2'];
        $hpassw = sha1($passw1);

        $query = "INSERT INTO register (f_name, l_name, e_mail, pass_word) VALUES ('{$fname}', '{$lname}',' {$email}', '{$hpassw}')";

        $result = mysqli_query($connection, $query);

        if($result){
            echo "<script type=text/javascript>window.alert('Data Added Succesfuly')</script>";
        }
        else{
            echo "<script type=text/javascript>window.alert('Query Failed')</script>";
        }
    }
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type= "text/css" href="css/styles.css">
    <title>Register</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 form-group">
            <form action="index.php" method="POST" class="form-group">
            <ul>
                <label class="col-s-3">First Name</label>
                <input type="text" name="fname" placeholder="First Name" class="form-control"><br>
            
                <label class="col-s-3">Last Name</label>
                <input type="text" name="lname" placeholder="Last Name" class="form-control"><br>
            
                <label class="col-s-3">E Mail</label>
                <input type="text" name="email" placeholder="E-mail" class="form-control"><br>
            
                <label class="col-s-3">Password</label>
                <input type="password" name="password1" placeholder="Password" class="form-control"><br>
            
                <label class="col-s-3">Retype Password</label>
                <input type="password" name="password2" placeholder="Password" class="form-control"><br>
                              
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            </ul>
            </form>
        </div>
    </div>  
</div>
</body>
</html>

<?php 
    mysqli_close($connection);
?>
