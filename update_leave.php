<?php
//update button
include 'conn.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Get employee ID from hidden input field
    $employee_id = $_POST['employee_id'];


    $sql = "SELECT * FROM employee_details WHERE employee_id = '$employee_id'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
       //$hr_response = $row['hr_response']; 
        $employee_id = $row['employee_id'];  
        $hr_response = isset($row['hr_response']) ? $row['hr_response'] : ''; 
        
    }
    else {
        echo "Error: Employee not found";
        exit();
    }
}
// Check if form is submitted with updated data
elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
   
    $employee_id = $_POST['employee_id'];
    $hr_response = isset($_POST['hr_response']) ? $_POST['hr_response'] : ''; 
   
   
    $sql = "UPDATE leaveinfo SET hr_response = '$hr_response' WHERE employee_id = '$employee_id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo '<script> alert("HR Leave response updated successfully!!!");</script>';
        include("leavereporthr.php");
        
        exit();
    }
    else {
        echo '<script> alert("Error updating HR Leave response!!!");</script>'  . mysqli_error($con);
        include("leavereporthr.php");
        mysqli_close($con);
        exit();}
    }
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>HR Leave response</title>
</head>
<body>

<h2>HR Leave response</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="hidden" name="employee_id" value="<?php echo $employee_id; ?>" />
    HR leave Response: <input type="text" name="hr_response" value="<?php echo $hr_response; ?>" required /><br><br>
   
    <input type="submit" name="submit" value="Update" />
</form>

</body>
</html>

<?php
mysqli_close($con);
?>

