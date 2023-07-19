<?php      
include('conn.php'); 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $employee_id = $_POST['employee_id'];  
    $department_id = $_POST['department_id'];  
    $fulname = $_POST['fulname'];
    $email = $_POST['email'];
    $age = $_POST['age'];  
    $phone = $_POST['phone'];  
    $gender = $_POST['gender'];  
    $job = $_POST['job']; 
    $hire = $_POST['hire'];   
    $account = $_POST['account']; 
    $kra = $_POST['kra']; 
    $sql1="INSERT INTO employee_details(employee_id,department_id,fulname,email,age,phone,gender,job,hire,account,kra) VALUES('$employee_id','$department_id','$fulname','$email','$age','$phone','$gender','$job','$hire','$account','$kra')";
    if ($con->query($sql1) === TRUE) {
        $employee_details_id = $con->insert_id;
    } else {
        echo "Error: " . $sql1 . "<br>" . $con->error;
    }
    
    $bankid = $_POST['bankid']; 
    $bankname = $_POST['bankname'];
    $bankbranch= $_POST['bankbranch'];
    $branchid = $_POST['branchid'];
    $bankloanmonthlyinstalment= $_POST['bankloanmonthlyinstalment'];
    $banksavings= $_POST['banksavings'];
    $sql2="INSERT INTO bank(employee_id,bankid,bankname,bankbranch,branchid,bankloanmonthlyinstalment,banksavings) VALUES('$employee_id','$bankid','$bankname','$bankbranch','$branchid','$bankloanmonthlyinstalment','$banksavings')";
    if ($con->query($sql2) === TRUE) {
        $bank_id = $con->insert_id;
    } else {
        echo "Error: " . $sql2 . "<br>" . $con->error;
    }
    
   $namekin= $_POST['namekin'];
    $agekin= $_POST['agekin'];
    $relationkin = $_POST['relationkin']; 
    $phone_no = $_POST['phone_no'];
    $sql3="INSERT INTO next_of_kin(employee_id,namekin,agekin,relationkin,phone_no) VALUES('$employee_id','$namekin','$agekin','$relationkin','$phone_no')";
    if ($con->query($sql3) === TRUE) {
        $kin_id = $con->insert_id;
   } else {
        echo "Error: " . $sql3 . "<br>" . $con->error;
    }
     
    $namedep=$_POST['namedep'];
    $agedep= $_POST['agedep'];
    $relationdep = $_POST['relationdep']; 
    $phone_nodep = $_POST['phone_nodep'];  
    $sql4="INSERT INTO dependants(employee_id,namedep,agedep,relationdep,phone_nodep) VALUES('$employee_id','$namedep','$agedep','$relationdep','$phone_nodep')";
     if ($con->query($sql4) === TRUE) {
        $dependants_id = $con->insert_id;
   } else {
        echo "Error: " . $sql4 . "<br>" . $con->error;
    }
    $password=$_POST['password'];
    $sql5="INSERT INTO login(employee_id,email,password) VALUES('$employee_id','$email','$password')";
   
    if ($con->query($sql5) === TRUE) {
        echo '<script> alert(" New Employee saved!!! ");</script>';
        include("homepagehr.php");
    } else {
        echo "Error: " . $sql5 . "<br>" . $con->error;
        //echo '<script> alert("ERROR:Try again with the correct values!!! ");</script>';
    }
    
    //$conn->close()
}
mysqli_close($con);
 ?>