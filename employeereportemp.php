<?php

include 'conn.php';
 if (isset($_GET['employee_id'])) {
     //Get the ID from the URL and sanitize it
   
     $employee_id = mysqli_real_escape_string($con, $_GET['employee_id']);


  $sql1 = "SELECT * FROM employee_details WHERE employee_id=$employee_id";
 $sql2 = "SELECT * FROM dependants WHERE employee_id=$employee_id";
 $sql3 = "SELECT * FROM next_of_kin WHERE employee_id=$employee_id";
 $sql4 = "SELECT * FROM bank WHERE employee_id=$employee_id";

 $result1 = mysqli_query($con,$sql1);
 $result2 = mysqli_query($con,$sql2);
 $result3 = mysqli_query($con,$sql3);
 $result4 = mysqli_query($con,$sql4);

}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Employee report</title>
    <style>
               .dropbtn {
            background-color: white;
            color: black;
            padding: 3px;
            border: none;
            cursor: pointer;
            font-size: 25px;
          }
          
          .dropdown {
            position: relative;
            display: inline-block;
          }
          
          .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
          }
          
          .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
          }
          
          .dropdown-content a:hover {background-color: #96d3ff;}
          
          .dropdown:hover .dropdown-content {
            display: block;
          }
          
          .dropdown:hover .dropbtn {
            background-color: #50bae8;
          }
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
<body style=" background-image: url(report.jpg);background-size: cover;">

<h2 style="color:black;font-size:40px;padding:5px;background-color:#1b97fd;text-align: center;">EMPLOYEE PROFILE</h2>
<a href="homepageemp.php" target="_blank">HOME</a>
<a href="paswd_change.php" target="_blank">Update password</a>
<table style="border-top-style: dotted;
  border-right-style: solid;
  border-bottom-style: dotted;
  border-left-style: solid;
  border-width: 80%;
  padding:5px;
  background-color:white;"><p class="double" >
    <thead>
    
        <tr style="color:red;font-size:25px;padding:5px;">
           
            <th>Employee Name | </th>
            <th> Employee ID | </th>
          
            <th> Department ID|</th>
            <th> Job |</th>
            <th> Name dependant |</th>
            <th> Name kin |</th>
            <th> Bank name |</th>
            <th> Email |</th>
            <th> Edit </th> 
        </tr>
        
    </thead>
    <tbody>
        <?php

        if (mysqli_num_rows($result1) > 0) {
            while ($row1 = mysqli_fetch_assoc($result1)) {
                $row2 = mysqli_fetch_assoc($result2);
                $row3 = mysqli_fetch_assoc($result3);
                $row4 = mysqli_fetch_assoc($result4);

                echo "<tr>";
                echo "<td>" . ($row1['fulname'] ?? "") . "</td>";
                echo "<td>" . ($row1['employee_id'] ?? "") . "</td>";
               
                echo "<td>" . ($row1['department_id'] ?? "") . "</td>";
                echo "<td>" . ($row1['job'] ?? "") . "</td>";
                echo "<td>" . ($row2['namedep'] ?? "") . "</td>";
                echo "<td>" . ($row3['namekin'] ?? "") . "</td>";
                echo "<td>" . ($row4['bankname'] ?? "") . "</td>";
                echo "<td>" . ($row1['email'] ?? "") . "</td>";
                echo "<td>";
                echo "<form method='post' action='update_employee.php'>"; 
                echo "<input type='hidden' name='employee_id' value='" . ($row1['employee_id'] ?? "") . "' />"; 
                echo "<input type='submit' name='update' value='Update employee details' />"; 
                echo "</form>";
                echo "<form method='post' action='update_bank.php'>"; 
                echo "<input type='hidden' name='employee_id' value='" . ($row1['employee_id'] ?? "") . "' />"; 
                echo "<input type='submit' name='updatebank' value='Update bank details' />"; 
                echo "</form>";
                echo "<form method='post' action='update_kin.php'>"; 
                echo "<input type='hidden' name='employee_id' value='" . ($row1['employee_id'] ?? "") . "' />"; 
                echo "<input type='submit' name='updatekin' value='Update kin details' />"; 
                echo "</form>";
                echo "<form method='post' action='update_dependanta.php'>"; 
                echo "<input type='hidden' name='employee_id' value='" . ($row1['employee_id'] ?? "") . "' />"; 
                echo "<input type='submit' name='updatedependants' value='Update dependants details' />"; 
                echo "</form>";
                echo "</td>";
            
                echo "</tr>";
            }
        }
         else {
            echo "<tr><td colspan='6'>No data found</td></tr>";
        }
        ?>
        
    </tbody>
    </p></table>

</body>
</html>

<?php

mysqli_close($con);
?>
