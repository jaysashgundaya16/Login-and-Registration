<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $Gender = $_POST['gender'];
    $num = $_POST['number'];
    $address = $_POST['add'];
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "insert into form (fname, lname, gender, cnum, address, email, pass) values ('$firstname' , '$lastname' , '$Gender' , '$num' , '$address' , '$gmail' , '$password')";
        
        mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('Successfully Register')</script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('Please enter valid Information')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form And Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signup">
         <h1>Sign Up</h1>
         <h4>It's free and only take a minute</h4>
         <form method="POST">
             <label>First Name</label>
             <input type="text" name="fname" required>
             <label>Last Name</label>
             <input type="text" name="lname" required>
             <label>Gender</label>
             <input type="text" name="gender" required>
             <label>Contact Number</label>
             <input type="text" name="number" required>
             <label>Address</label>
             <input type="text" name="add" required>
             <label>Email</label>
             <input type="email" name="mail" required>
             <label>Password</label>
             <input type="password" name="pass" required>
             <input type="submit" name="" value="Submit">
         </form>
        <p>By Clicking the Sign Up button, you agree to our<br>
        <a href="">Terms and Condition</a> and <a href="#">Policy Privacy</a>
        </p>
        <p>Already have an account? <a href="login.php">Login Here</a></p>
     
    </div>
</body>   
</html>
