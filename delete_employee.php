
<?php
//delete button
include 'conn.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    // Get employee ID from hidden input field
    $employee_id = $_POST['employee_id'];

    // Delete employee details from database
    $sql = "DELETE FROM employee_details WHERE employee_id = '$employee_id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Employee details deleted successfully";
    }
    else {
        echo "Error deleting employee details: " . mysqli_error($con);
    }
}
else {
    echo "Invalid request";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Employee Details</title>
</head>
<body>

<h2>Delete Employee Details</h2>

<p>Are you sure you want to delete this employee's details?</p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="hidden" name="employee_id" value="<?php echo $employee_id; ?>" />
    <input type="submit" name="delete" value="Yes" />
    <button onclick="window.history.back()">No</button>
</form>

</body>
</html>

<?php



