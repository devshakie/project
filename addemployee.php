
<!DOCTYPE html>
<html>
<head>
<title> Employee </title>
<link rel="stylesheet" href="addemployee.css">
</head>
<body>
<h1 style="text-align:center; background-color:#487af0;padding:2px;font-size:40px;width:80%;opacity:1;"><b>Add Employee</b> </h1>
<p>Employee Profile </p> <br><br><br><br><br><br><br><br>
<form action="insertemployee.php" method="POST">
<fieldset style="border-color: rgb(0, 149, 255);border-radius:3px;border-width: 5px;">
<legend style="background-color: rgb(139, 220, 247);
                    border-radius: 35px;font-size: 20px;padding:10px;">EMPLOYEE DETAILS</legend> 
<label for="employee_id" style="color:white;">Employee id</label>  
<input type="text" id="employee_id" name="employee_id" placeholder="Enter Employee Employee Id"><br>
<label for="department_id" style="color:white;">Department id</label>  
<input type="text" id="department_id" name="department_id" placeholder="Enter Employee Department Id"><br>
<label for="fulname" style="color:white;">Name</label>
<input type="text" id="fulname" name="fulname" placeholder="Enter Employee Name"><br>
<label for="email" style="color:white;">Email</label>
<input type="text" id="email" name="email" placeholder="Enter Employee Email">
<br><label for="age"style="color:white;">Age</label>
<input type="text" id="age" name="age" placeholder="Enter Employee Age" >
<br><label for="phone"style="color:white;">Phone number</label>
<input type="text" id="phone" name="phone" placeholder="Enter Employee Phone" >
 <br><label for="gender" style="color:white;">Gender</label>
<input type="text" id="gender" name="gender" placeholder="Enter Employee Gender" >
<br><label for="job" style="color:white;">Job</label>
<input type="text" id="job" name="job" placeholder="Enter Employee Job" >
<br><label for="hire" style="color:white;">Hire Date</label>
<input type="text" id="hire" name="hire" placeholder="Enter Employee Hire Date" >
<br><label for="account" style="color:white;">Account No</label>
<input type="text" id="account" name="account" placeholder="Enter Employee Account No" >
<br><label for="kra" style="color:white;">KRA pin</label>
<input type="text" id="kra" name="kra" placeholder="Enter Employee KRA pin" >

</fieldset>

<fieldset style="border-color: rgb(0, 149, 255);border-radius:3px;border-width: 5px;">
<legend style="background-color: rgb(139, 220, 247);
                    border-radius: 35px;font-size: 20px;padding:10px;">BANK DETAILS</legend>

<label  for="bankid" style="color:white;" >Bank Id</label>  
<input type="text" id="bankid" name="bankid" placeholder="Enter Employee Bank ID" ><br>
<label  for="bankname"  style="color:white;" >Bank name</label>
<input type="text" id="bankname" name="bankname" placeholder="Enter Employee Bank name" ><br>
<label  for="bankbranch"  style="color:white;" >Bank branch</label> 
<input type="text" id="bankbranch" name="bankbranch" placeholder="Enter Employee Bank branch" > <br>
<label  for="branchid" style="color:white;"  >Branch id</label>
<input type="text" id="branchid" name="branchid"  placeholder="Enter Employee Branch_id"  ><br>
<label  for="bankloanmonthlyinstalment"  style="color:white;" >Bank loan Monthly Installments</label>
<input type="text" id="bankloanmonthlyinstalment" name="bankloanmonthlyinstalment"  placeholder="Enter Employee Bank Loan Monthly Instalments" >  <br>
<label  for="banksavings" style="color:white;"  >Bank savings</label> 
<input type="text" id="banksavings" name="banksavings"  placeholder="Enter Employee Bank Savings"  ><br>

</fieldset>


<fieldset style="border-color: rgb(0, 149, 255);border-radius:3px;border-width: 5px;">
<legend style="background-color: rgb(139, 220, 247);
                    border-radius: 35px;font-size: 20px;padding:10px;">NEXT OF KIN</legend>
<label for="namekin" style="color:white;">Name</label>
<input type="text" id="namekin" name="namekin"  placeholder="Enter Employee's kin Name"><br>
<label for="agekin" style="color:white;">Age</label>
<input type="text" id="agekin" name="agekin"  placeholder="Enter Employee's kin Age"><br>
<label for="relationkin" style="color:white;">Relation</label>
<input type="text" id="relationkin" name="relationkin"  placeholder="Enter Employee's kin Relation"><br>
<label for="phone_no" style="color:white;">Phone Number</label>
<input type="text" id="phone_no" name="phone_no"  placeholder="Enter Employee's kin Phone Number"><br>
</fieldset>
<fieldset style="border-color: rgb(0, 149, 255);border-radius:3px;border-width: 5px;">
    <legend style="background-color: rgb(139, 220, 247);
                    border-radius: 35px;font-size: 20px;padding:10px;">Dependants</legend>
    <label for="namedep" style="color:white;">Name</label>
<input type="text" id="namedep" name="namedep"  placeholder="Enter Employee's dependant Name"><br>
<label for="agedep" style="color:white;">Age</label>
<input type="text" id="agedep" name="agedep"  placeholder="Enter Employee's dependant Age"><br>
<label for="relationdep" style="color:white;">Relation</label>
<input type="text" id="relationdep" name="relationdep"  placeholder="Enter Employee's dependant Relation"><br>
<label for="phone_nodep" style="color:white;">Phone Number</label>
<input type="text" id="phone_nodep" name="phone_nodep"  placeholder="Enter Employee's dependant Phone Number"><br>

</fieldset>
<label for="password" style="color:white;">password</label>
<input type="text" id="password" name="password"  placeholder="Enter employee password"><br>

<input type="submit" value="Add">
</form>
</body>
</html>