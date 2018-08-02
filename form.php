<?php 
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost', 'root', '', 'hbtutimes');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //Two passwords are matching
    if($_POST['password'] == $_POST['password2']){
        $firstname = $mysqli->real_escape_string($_POST['first-name']);
        $lastname = $mysqli->real_escape_string($_POST['last-name']);
        $rollno = $mysqli->real_escape_string($_POST['roll-no']);
        $gender = $mysqli->real_escape_string($_POST['gender']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = md5($_POST['password']);// msd5 hashed
        $dobday = htmlentities($_POST['day']);
        $dobmonth = htmlentities($_POST['month']);
        $dobyear = htmlentities($_POST['year']);
        $dob = "{$dobyear}-{$dobmonth}-{$dobday}";
        // $inputdob = date("Y-m-d",strtotime($dob));
        // $dateOfBirth = $_POST['year']."-". $_POST['month']."-".$_POST['day'];
        // $rawdate = htmlentities($_POST['date']);
        // $date = date('Y-m-d', strtotime($rawdate));
        $inputdob = date('Y-m-d',strtotime($dob));

        $sql = "INSERT INTO users(FirstName,LastName,RollNo,Email,Gender,DOB,pass)"
        ."VALUES ('$firstname','$lastname','$rollno','$email','$gender','$inputdob','$password')";

        // If query is successfull Redirect to Welcome.php
        if($mysqli->query($sql) === true){
            $_SESSION['message'] = "Signup Successful";
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            header("location: welcome.php");        
        }
        else{
            $_SESSION['message'] = " Sigup failed" ;
        }
    }
    else{
        $_SESSION['message'] = " Two passwords do not match" ;
    }
}

?>