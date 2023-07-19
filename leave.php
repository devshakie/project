<!DOCTYPE html>
<html>
<head> 
<h1 style="text-align:center; background-color:#89CFF0;padding:20px;padding-bottom:20px;font-size:40px;">Paylee Leave Form>Paylee Leave Form</h1>
<script src="leave.js"></script>
<style>
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
<body style="background-image: url(leaveap.jpg); background-size: cover;">
<p id="result"></p>
<p id="hr_response"></p>
<form action="insertleave.php" method="POST">
    <fieldset >
        <legend  style="background-color: rgb(139, 220, 247);
                    border-radius: 35px;font-size: 20px;">Employee Details</legend>
    <label for="fulname" style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Employee Name</label>
    <input type="text" id="fulname" name="fulname"><br><br>
    <label for="employee_id" style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Employee Id</label>
    <input type="text" id="employee_id" name="employee_id"><br><br>
   <Label for="department"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Department</Label>
    <input type="text" id="department" name="department"><br><br>
    <label for="department_id"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Department Id</label>
    <input type="text" id="department_id" name="department_id"><br><br>
    <label for="phone"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;"> Employee Phone number</label>
    <input type="text" id="phone" name="phone"><br><br>
</fieldset>
<fieldset>
    <legend  style="background-color: rgb(139, 220, 247);
                    border-radius: 35px;font-size: 20px;">Leave Application Details</legend>
   
    <label for="leavetype" style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;"> Type of leave</label>
    <input type="leavetype" id="leavetype" name="leavetype"><br><br>
    <label for="from"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;"> From</label>
    <input type="date" id="from" name="from"><br><br>
    <label for="to"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;"> To</label>
    <input type="date" id="to" name="to"><br><br>
    <label for="date"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;"> Today's Date</label>
    <input type="date" id="date" name="date"><br><br>
    <label for="duration"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Leave Duration (in days):</label>
 <input type="number" id="duration" name="duration" readonly><br><br>
 

 Remaining Annual leave days:<input type="hidden" id="result" name="result">

</fieldset>

 <fieldset style="width:50%;height:20%;">
 <legend></legend>
 <label for="reason" style="background-color: rgb(139, 220, 247);
                    border-radius: 35px;font-size: 20px;"> Reason for leave</label>
 <textarea name="reason" rows="5" cols="80"></textarea>
 </fieldset>
 <button onclick="submitLeave()">Applyleave</button>   
 <a href="homepageemp.php" target="_blank">HOME</a> 
 
</form>
</body>
</html>