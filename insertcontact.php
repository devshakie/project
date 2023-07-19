<?php      
include('conn.php'); 
if(!null == 'submit')
{
    $fulname = $_POST['fulname'];
    $employee_id = $_POST['employee_id'];
    $department_id = $_POST['department_id'];
    $email = $_POST['email'];
    $message = $_POST['message'];


   
    $sql = "INSERT INTO contactus (Full_Name, employee_id, department_id, Email, Message) VALUES ('$fulname', '$employee_id', '$department_id', '$email', '$message')";
    $result = mysqli_query($con, $sql);
   if(($result))
   {
    echo '<script>alert("Message saved")</script>';
    include("homepagehr.php");
     }
}
else
{
    echo '<script>alert("error in code")</script>';
}
mysqli_close($con);

 ?>
