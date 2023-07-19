<?php

include 'conn.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
   
    $employee_id = $_POST['employee_id'];

    
    $sql = "SELECT * FROM employee_details WHERE employee_id = '$employee_id'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $email = $row['email'];
        $employee_id = $row['employee_id'];  
        $department_id = isset($row['department_id']) ? $row['department_id'] : ''; 
        $fulname = isset($row['fulname']) ? $row['fulname'] : '';
        $age = isset($row['age']) ? $row['age'] : '';  
        $phone = isset($row['phone']) ? $row['phone'] : '';  
        $gender = isset($row['gender']) ? $row['gender'] : '';  
        $job = isset($row['job']) ? $row['job'] : ''; 
        $hire = isset($row['hire']) ? $row['hire'] : '';   
        $account = isset($row['account']) ? $row['account'] : '';
        $kra = isset($row['kra']) ? $row['kra'] : ''; 
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
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $department_id = isset($_POST['department_id']) ? $_POST['department_id'] : ''; 
    $fulname = isset($_POST['fulname']) ? $_POST['fulname'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';  
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';  
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';  
    $job = isset($_POST['job']) ? $_POST['job'] : ''; 
    $hire = isset($_POST['hire']) ? $_POST['hire'] : '';   
    $account = isset($_POST['account']) ? $_POST['account'] : '';
    $kra = isset($_POST['kra']) ? $_POST['kra'] : '';

    // Update employee details in database
    $sql = "UPDATE employee_details SET email = '$email', department_id = '$department_id', fulname = '$fulname', age = '$age', phone = '$phone', gender = '$gender', job = '$job', hire = '$hire', account = '$account', kra = '$kra' WHERE employee_id = '$employee_id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo '<script> alert("Employee details updated successfully!!!");</script>';
        include("employeereportemp.php");
        //mysqli_close($con);
        exit();
    }
    else {
        echo "Error updating employee details: " . mysqli_error($con);
        mysqli_close($con);
         include("employeereportemp.php");
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
    Email: <input type="email" name="email" value="<?php echo $email; ?>" required /><br><br>
    Department ID: <input type="text" name="department_id" value="<?php echo $department_id; ?>" required /><br><br>
    Full Name: <input type="text" name="fulname" value="<?php echo $fulname; ?>" required /><br><br>
    Age: <input type="text" name="age" value="<?php echo $age; ?>" required /><br><br>
    Phone: <input type="text" name="phone" value="<?php echo $phone; ?>" required /><br><br>
    Gender: <input type="text" name="gender" value="<?php echo $gender; ?>" required /><br><br>
    Job: <input type="text" name="job" value="<?php echo $job; ?>" required /><br><br>
    Hire: <input type="text" name="hire" value="<?php echo $hire; ?>" required /><br><br>
    Account: <input type="text" name="account" value="<?php echo $account; ?>" required /><br><br>
    KRA PIN: <input type="text" name="kra" value="<?php echo $kra; ?>" required /><br><br>
    <input type="submit" name="submit" value="Update" /> 
    
    <a href="homepageemp.php" target="_self">HOME</a> 
     
 
</fieldset>

</form>

</body>
</html>

<?php

mysqli_close($con);
?>

