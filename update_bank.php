<?php

include 'conn.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updatebank'])) {
   
    $employee_id = $_POST['employee_id'];

    
    $sql = "SELECT * FROM bank WHERE employee_id = '$employee_id'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $bankid = $row['bankid'];
        $employee_id = $row['employee_id'];  
       $bankname =  isset($row['bankname']) ? $row['bankname'] : '';
        $bankbranch=  isset($row['bankbranch']) ? $row['bankbranch'] : '';
        $branchid =  isset($row['branchid']) ? $row['branchid'] : '';
        $bankloanmonthlyinstalment=  isset($row['bankloanmonthlyinstalment']) ? $row['bankloanmonthlyinstalment'] : '';
        $banksavings=  isset($row['banksavings']) ? $row['banksavings'] : '';
 }
    else {
        echo "Error: Employee not found";
        exit();
    }
}
// Check if form is submitted with updated data
elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Get data from form
    $employee_id = $_POST['employee_id'];
    $bankid =  isset($_POST['bankid']) ? $_POST['bankid'] : '';
    $bankname =  isset($_POST['bankname']) ? $_POST['bankname'] : '';
    $bankbranch=  isset($_POST['bankbranch']) ? $_POST['bankbranch'] : '';
    $branchid =  isset($_POST['branchid']) ? $_POST['branchid'] : '';
    $bankloanmonthlyinstalment=  isset($_POST['bankloanmonthlyinstalment']) ? $_POST['bankloanmonthlyinstalment'] : '';
    $banksavings=  isset($_POST['banksavings']) ? $_POST['banksavings'] : '';

    // Update employee details in database
    $sql2 = "UPDATE bank SET bankid='$bankid', bankname='$bankname', bankbranch='$bankbranch', branchid='$branchid', bankloanmonthlyinstalment='$bankloanmonthlyinstalment', banksavings='$banksavings' WHERE employee_id = '$employee_id'";
     $result = mysqli_query($con, $sql);

    if ($result) {
        echo '<script> alert("Bank details updated successfully!!!");</script>';
       include("employeereportemp.php"); 

        exit();
    }
    else {
        echo '<script>alert("Error updating customer record:'. mysqli_error($con).' ");</script>' ;
        mysqli_close($con);
        exit();}
    }
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Employee Details</title>
    <style>
        a:link, a:visited {
  background-color: #02023a;
  color: white;
  padding: 4px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size:15px;
}

a:hover, a:active {
  background-color: red;
  
}
    </style>
</head>
<body style="background-image:url(contactus.jpg);
   background-size: cover;">

<h2>Update Bank Details</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<fieldset style="background-color:aliceblue;width:40%;">
<legend style="background-color: rgb(139, 220, 247);
                    border-radius: 35px;font-size: 20px;padding:10px;">BANK DETAILS</legend>
<input type="hidden" name="employee_id" value="<?php echo $employee_id; ?>" />
Bank Id<input type="text" id="bankid" name="bankid" value="<?php echo $bankid; ?>" required ><br>
Bank name<input type="text" id="bankname" name="bankname" value="<?php echo $bankname; ?>" required  ><br>
Bank branch<input type="text" id="bankbranch" name="bankbranch" value="<?php echo $bankbranch; ?>" required > <br>
Branch id<input type="text" id="branchid" name="branchid"  value="<?php echo $branchid; ?>" required   ><br>
Bank loan Monthly Installments<input type="text" id="bankloanmonthlyinstalment" name="bankloanmonthlyinstalment"  value="<?php echo $bankloanmonthlyinstalment; ?>" required >  <br>
Bank savings<input type="text" id="banksavings" name="banksavings"  value="<?php echo $banksavings; ?>" required  ><br>
<input type="submit" name="update" value="Update" /> 
    <a href="homepageemp.php" target="_blank">HOME</a> 
    
</fieldset>
</fieldset>

</form>

</body>
</html>

<?php

mysqli_close($con);
?>

