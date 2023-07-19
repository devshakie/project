<?php      
include('conn.php'); 
if(!null == 'submit')
{
    $employee_id = $_POST['employee_id'];
    $department_id = $_POST['department_id'];
    $job = $_POST['job'];
    $gross = $_POST['gpay'];
    $basic = $_POST['basicpay'];
    $house = $_POST['hall'];
    $medical = $_POST['mall'];
    $nhif = $_POST['nhif'];
    $nssf = $_POST['nssf'];
    $deduc = $_POST['totdeduc'];
    $sal = $_POST['netsal'];
    $dam = $_POST['damages'];
    $pens = $_POST['pension'];

   $sql = "INSERT INTO salary(employee_id,department_id,job,grosspay,basicpay,houseallowances,medallowances,NHIF,NSSF,totdeduc,netsal,damages,pension) VALUES('$employee_id','$department_id','$job','$gross', '$basic', '$house', '$medical', '$nhif', '$nssf', '$deduc', '$sal', '$dam', '$pens')";
   $result = mysqli_query($con,$sql);
   if(($result))
   {
    echo '<script> alert("Employee Salary Saved")</script>';
    include("salaryhr.php");
   }
}
else
{
    echo '<script>alert("error in code")</script>';
}
mysqli_close($con);
 ?>