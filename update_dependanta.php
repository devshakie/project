<?php

include 'conn.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updatedependants'])) {
   
    $employee_id = $_POST['employee_id'];

    
    $sql = "SELECT * FROM dependants WHERE employee_id = '$employee_id'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $namedep = $row['namedep'];
        $employee_id = $row['employee_id'];  
        $agedep= isset($row['agedep']) ? $row['agedep'] : '';
        $relationdep =isset($row['relationdep']) ? $row['relationdep'] : '';
        $phone_nodep = isset($row['phone_nodep ']) ? $row['phone_nodep '] : '';  
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
    $namedep=isset($_POST['namedep']) ? $_POST['namedep'] : '';
    $agedep= isset($_POST['agedep']) ? $_POST['agedep'] : '';
    $relationdep =isset($_POST['relationdep']) ? $_POST['relationdep'] : '';
    $phone_nodep = isset($_POST['phone_nodep ']) ? $_POST['phone_nodep '] : ''; 

    // Update employee details in database
   
$sql = "UPDATE dependants SET namedep='$namedep',agedep='$agedep',relationdep='$relationdep',phone_nodep='$phone_nodep' WHERE employee_id = '$employee_id'";
$result = mysqli_query($con, $sql);

    if ($result) {
        echo '<script> alert("Dependants details updated successfully!!!");</script>';
        include("employeereportemp.php");
        //mysqli_close($con);
        exit();
    }
    else {
        echo "Error updating employee details: " . mysqli_error($con);
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

<h2>Update Employee Details</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<fieldset style="background-color:aliceblue;width:40%;">
    <input type="hidden" name="employee_id" value="<?php echo $employee_id; ?>" />
    <legend style="background-color: rgb(139, 220, 247);
                    border-radius: 35px;font-size: 20px;padding:10px;">Dependants</legend>
    <label for="namedep" style="color:black;">Name</label>
<input type="text" id="namedep" name="namedep"  value="<?php echo $namedep; ?>" required ><br>
<label for="agedep" style="color:black;">Age</label>
<input type="text" id="agedep" name="agedep"  value="<?php echo $agedep; ?>" required ><br>
<label for="relationdep" style="color:black;">Relation</label>
<input type="text" id="relationdep" name="relationdep"  value="<?php echo $relationdep; ?>" required ><br>
<label for="phone_nodep" style="color:black;">Phone Number</label>
<input type="number" id="phone_nodep" name="phone_nodep"  value="<?php echo $phone_nodep; ?>" required ><br>
<input type="submit" name="submit" value="Update" /> 
    <a href="homepageemp.php" target="_blank">HOME</a> 
    
</fieldset>

</form>

</body>
</html>

<?php

mysqli_close($con);
?>

