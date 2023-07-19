
    
    <?php
include 'conn.php';

$sql1 = "SELECT * FROM leaveinfo";
    $sql2 = "SELECT * FROM employee_details";
  
   
    $result1 = mysqli_query($con,$sql1);
    $result2= mysqli_query($con,$sql2);
  
?>

<!DOCTYPE html>
<html>
<head>
    <title>Leave report</title>
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
<body style=" background-image: url(leave.jpg);background-size: cover;">

<h2 style="color:black;font-size:40px;padding:5px;background-color:#1b97fd;text-align: center;">LEAVE REPORT</h2>
<a href="homepageemp.php" target="_blank">HOME</a>
<table style="border-top-style: dotted;
  border-right-style: solid;
  border-bottom-style: dotted;
  border-left-style: solid;
  border-width: 80%;
  padding:5px;
  background-color:white;"><p class="double" >
    <thead>
    
        <tr style="color:red;font-size:25px;padding:5px;">
            <th>Employee ID | </th>
            <th> Department ID | </th>
            <th> Full Name</th>
            <th> Leave type | </th>
            <th> From |</th>
            <th> To |</th>
            <th> Leave duration |</th>
            <th> Remaining
              leave days|</th>
            <th> Reason |</th>
            <th> HR Response|</th> 
           
        </tr>
        
    </thead>
    <tbody>
        <?php
        // Loop through data and display in table rows
        if (mysqli_num_rows($result1) > 0) {
            while ($row1 = mysqli_fetch_assoc($result1)) {
                $row2 = mysqli_fetch_assoc($result2);
                

                echo "<tr>";
                echo "<td>" . ($row2['employee_id'] ?? ""). "</td>";
                echo "<td>" . ($row2['department_id']?? "" ). "</td>";
                echo "<td>" . ($row2['fulname']?? "" ). "</td> ";
                echo "<td>" . ($row1['leavetype'] ?? ""). "</td>";
                echo "<td>" . ($row1['datefrom'] ?? ""). "</td>";
                echo "<td>" . ($row1['dateto']?? "" ). "</td>";
                echo "<td>" . ($row1['leaveduration']?? "" ). "</td>";
                echo "<td>" . ($row1['remainingleavedays']?? "" ). "</td>";
                echo "<td>" . ($row1['reason'] ?? "") . "</td>";
                echo "<td>" . ($row1['hr_response'] ?? "") . "</td>";
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

   

