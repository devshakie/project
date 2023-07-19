
<?php
include 'conn.php';

    $sql1 = "SELECT * FROM salary";
    $sql2 = "SELECT * FROM employee_details";
   
    $result1 = mysqli_query($con,$sql1);
    $result2= mysqli_query($con,$sql2);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Salary report</title>
    <style>
        p.double {border-style: double;
            background-color: #030d7a;
            padding: 3px;}
p.groove {border-style: groove;}
a:link, a:visited {
  background-color: #02023a;
  color: white;
  padding: 14px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size:20px;
}

a:hover, a:active {
  background-color: red;
  
}
    </style>
</head>
<body style=" background-image: url(salaryrep.jpg);background-size: cover;">

<h2 style="color:black;font-size:40px;padding:5px;background-color:#4ccef5;text-align: center;">SALARY REPORT</h2>
<a href="homepageemp.php" target="_blank">HOME</a>
<table style="border-top-style: dotted;
  border-right-style: solid;
  border-bottom-style: dotted;
  border-left-style: solid;
  border-width: 80%;
  padding:5px;
  background-color:white;"><p class="double" >
    <thead>
    
        <tr style="color:red;font-size:17px;padding:5px;">
            <th>Employee ID | </th>
            <th> Department ID | </th>
            <th> Name | </th>
            <th> Job | </th>
            <th> Basic pay|</th>
            <th> House Allowance |</th>
            <th> Medical Allowance | </th> 
            <th>Gross pay | </th>
            <th> NSSF | </th>
            <th> NHIF | </th>
            <th> Damages|</th>
            <th> Pension |</th>
            <th> Total deductions| </th>
            <th> Net salary |</th>
            
        </tr>
        
    </thead>
    <tbody>
        <?php
        
        if (mysqli_num_rows($result1) > 0) {
            while ($row1 = mysqli_fetch_assoc($result1)) {
                $row2 = mysqli_fetch_assoc($result2);
                

                echo "<tr>";
                echo "<td>" . ($row2['employee_id'] ?? "") . "</td>";
                echo "<td>" . ($row2['department_id'] ?? "") . "</td>";
                echo "<td>" . ($row2['fulname'] ?? "") . "</td>";
                echo "<td>" . ($row2['job'] ?? "") . "</td>";
                echo "<td>" . ($row1['basicpay'] ?? "") . "</td>";
                echo "<td>" . ($row1['hall'] ?? "") . "</td>";
                echo "<td>" . ($row1['mall'] ?? "") . "</td>";
                echo "<td>" . ($row1['gpay'] ?? "") . "</td>";
                echo "<td>" . ($row1['nssf'] ?? "") . "</td>";
                echo "<td>" . ($row1['nhif'] ?? "") . "</td>";
                echo "<td>" . ($row1['damages'] ?? "") . "</td>";
                echo "<td>" . ($row1['pension'] ?? "") . "</td>";
                echo "<td>" . ($row1['totdeduc'] ?? "") . "</td>";
                echo "<td>" . ($row1['netsal'] ?? "") . "</td>";
                echo "<td>";
                
                echo "</td>";
            
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No data found</td></tr>";
        }
        ?>
    </tbody>
    </p></table>

</body>
</html>

<?php
// Close database connection
mysqli_close($con);
?>



?>