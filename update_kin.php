<?php

include 'conn.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updatekin'])) {
   
    $employee_id = $_POST['employee_id'];

    
    $sql = "SELECT * FROM next_of_kin WHERE employee_id = '$employee_id'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $namekin = $row['namekin'];
        $employee_id = $row['employee_id'];  
        $namekin=isset($row['namekin']) ? $row['namekin'] : '';
        $agekin= isset($row['agekin']) ? $row['agekin'] : '';
        $relationkin =isset($row['relationkin']) ? $row['relationkin'] : '';
        $phone_no =isset($row['phone_no ']) ? $row['phone_no'] : '';
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
   
    $namekin=isset($_POST['namekin']) ? $_POST['namekin'] : '';
    $agekin= isset($_POST['agekin']) ? $_POST['agekin'] : '';
    $relationkin =isset($_POST['relationkin']) ?$_POST['relationkin'] : '';
    $phone_no =isset($_POST['phone_no ']) ? $_POST['phone_no '] : '';

    // Update employee details in database
    $sql = "UPDATE next_of_kin SET namekin='$namekin',agekin='$agekin',relationkin='$relationkin',phone_no='$phone_no' WHERE employee_id = '$employee_id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo '<script> alert("Next of kin details updated successfully!!!");</script>';
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
                    border-radius: 35px;font-size: 20px;padding:10px;">NEXT OF KIN</legend>
<label for="namekin" style="color:black;">Name</label>
<input type="text" id="namekin" name="namekin"  value="<?php echo $namekin; ?>" required ><br>
<label for="agekin" style="color:black;">Age</label>
<input type="text" id="agekin" name="agekin"  value="<?php echo $agekin; ?>" required ><br>
<label for="relationkin" style="color:black;">Relation</label>
<input type="text" id="relationkin" name="relationkin"  value="<?php echo $relationkin; ?>" required ><br>
<label for="phone_no" style="color:black;">Phone Number</label>
<input type="number" id="phone_no" name="phone_no"  value="<?php echo $phone_no; ?>" required ><br>
<input type="submit" name="submit" value="Update" /> 
    <a href="homepageemp.php" target="_blank">HOME</a> 
   </fieldset>

</form>

</body>
</html>

<?php

mysqli_close($con);
?>

