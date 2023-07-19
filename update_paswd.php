
<?php
session_start();
include 'conn.php';
if (null != 'ChangePassword') {
    // Get the ID from the session and sanitize it
    $employee_id = $_SESSION['employee_id'];
} else {
    die("No user found in session!"); // Terminate the script if it doesn't exist
}

$sql = "SELECT password FROM login WHERE employee_id = '$employee_id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(!$result)
{
    echo "error in code" ;
}
// Get old password and new password from form data
$oldpassword = isset($_POST['oldpassword']) ? mysqli_real_escape_string($con, $_POST['oldpassword']) : null;
$newpassword = isset($_POST['newpassword']) ? mysqli_real_escape_string($con, $_POST['newpassword']) : null;

if ($row) {
    if ($oldpassword == $row['password']) {
        $newhashedpassword = $newpassword;
        $sql1 = "UPDATE login SET password = '$newhashedpassword' WHERE employee_id = '$employee_id'";
        $result1 = mysqli_query($con, $sql1);
        echo '<script>alert("Password changed successfully!");</script>';
        include 'employeereportemp.php';
    } 
    else {
        echo '<script>alert("Incorrect password!!!!");</script>';
        include 'changePass.php';
    }
} else {
    echo "Account not found in database!";
};

mysqli_close($con);

/*php
session_start();
include 'conn.php';
if (isset($_SESSION['employee_id'])) {
    // Get the ID from the session and sanitize it
    $employee_id = mysqli_real_escape_string($con, $_SESSION['employee_id']);
} else {
    die("Employee ID not found in session!"); // Terminate the script if it doesn't exist
}

// Get old password and new password from form data
$oldpassword = isset($_POST['oldpassword']) ? mysqli_real_escape_string($con, $_POST['oldpassword']) : null;
$newpassword = isset($_POST['newpassword']) ? mysqli_real_escape_string($con, $_POST['newpassword']) : null;

// Get the hashed password from the database for the given employee ID
$sql = "SELECT password FROM login WHERE employee_id='$employee_id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(!$result)
{
    echo "error in code".mysqli_error();
}

if ($row) {
    // Check if the old password matches with the hashed password
    if (password_verify($oldpassword, $row['password'])) {
        // Update the password with the new hashed password
        $newhashedpassword = password_hash($newpassword, PASSWORD_DEFAULT);
        $sql = "UPDATE login SET password='$newhashedpassword' WHERE employee_id='$employee_id'";
        mysqli_query($con, $sql);
        echo '<script>alert("Password changed successfully!");</script>';
    } else {
        echo "Old password is incorrect!";
    }
} else {
    echo "Employee ID not found in database!";
}

mysqli_close($con);
*/
?>