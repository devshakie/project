<?php 
ini_set('session.cookie_lifetime', 3600);

session_start();
include "conn.php";
if (null != 'submit')
    {
        
        $email = $_POST['email'];  
        $password = $_POST['password']; 
         
        
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
        
        $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        $_SESSION['employee_id'] = $row['employee_id'];
        $employee_id = $_SESSION['employee_id'];
        

        if($count == 1){ 
            echo 'Welcome  your employee_id is '.$employee_id;
			include('homePageemp.php');
			 echo '<script> alert("Welcome");</script>';
            }
        else{  
			include('loginemp.php');
            echo '<script> alert("Failed login invalid credentials!!!!!");</script>';
        }
    }   
    else{
        echo '<script> alert("Failed login");</script>';

    } 
    mysqli_close($con); 
?>