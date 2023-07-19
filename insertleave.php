<?php      
include('conn.php'); 
if(!null == 'submit')
{
    $employee_id = $_POST['employee_id'];
    $department_id = $_POST['department_id'];
    $leavetype = $_POST['leavetype'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $leaveduration = $_POST['duration'];
    $remainingdays = $_POST['result'];
    $reason = $_POST['reason'];

   
   $sql = "INSERT INTO leaveinfo (employee_id,department_id,leavetype,datefrom,dateto,leaveduration,remainingleavedays,reason) VALUES('$employee_id','$department_id','$leavetype',' $from','$to','$leaveduration','$remainingdays','$reason')";
   $result = mysqli_query($con,$sql);
   if(($result))
   {
       echo '<script> alert("Leave application received")</script>';
    include("leave.php");
     }
}
else
{
    echo '<script>alert("error in code")</script>';
}
mysqli_close($con);

 ?>