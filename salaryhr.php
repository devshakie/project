<!DOCTYPE html>
<html>
    <title>Salary</title>
    <head>
        <link rel="stylesheet" href="salary.css">
        <script src="salaryhr.js"></script> 
        <style>
            h2{text-decoration-color: linear-gradient(108.14deg, #001875 -5.29%, #37B6FF 120.56%);
    background: linear-gradient(108.14deg, #001875 -5.29%, #37B6FF 120.56%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;

background-color: aliceblue;

}


        </style>
    </head>
    <div class="entire">
    
        <body style="background-image:url(salarie1.jpg);
        background-size: cover;">
            
           <div class="topmost">
            <h1 style="text-align:center; background-color:#487af0;padding:20px;padding-bottom:20px;font-size:50px;">Salary</h1>
        </div>
            
               
            
            <form action="insertsal.php" method="POST">


                <fieldset style="border-color: rgb(0, 149, 255);border-radius:3px;border-width: 5px;">
                      
                   

                    <legend style="background-color: rgb(139, 220, 247);
                    border-radius: 35px;font-size: 20px;">
            
                        <h2>Employee Details</h2>
                    </legend>
                    
                    <label for="fulname" style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Employee Name  </label>
                    <input type="fulname" id="fulname" name="fulname">
                   <label for="employee_id" style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Employee ID  </label>
                   <input type="number" id="employee_id" name="employee_id"><br><br>
                   <label for="department" style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Department</label>
                   <input type="text" id="department" name="department">
                   <label for="department_id" style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Department ID</label>
                   <input type="text" id="department_id" name="department_id">
                   <label for="job" style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Job title</label>
                   <input type="text" id="job" name="job"><br><br>
                </fieldset>
            

                <p id="input">
        
                  <fieldset style="border-color: rgb(0, 149, 255);border-radius:3px;border-width: 5px;">

                    <legend style="background-color: rgb(139, 220, 247);
                    border-radius: 35px;font-size: 20px;">
                        <h2>Earnings</h2>
                    </legend>
                    <label for="hrsworked" style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Hours worked per day</label>
                    <input type="number" id="hrsworked">
                    <label for="days" style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Days worked per month</label>
                    <input type="number" id="days">
                    <label for="hrrate" style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Hourly Rate</label>
                    <input type="number" id="hrrate"><br><br>
                    <label for="normal" style="color:blue;font:bolder;font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Normal time pay</label>
                    <input type="number" id="normal" name="normal" readonly>
                    <label for="hrsover"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Overtime hours per month</label>
                    <input type="number" id="hrsover" name="hrsover">
                    <label for="overrate" style="color:blue;font:bolder;font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Overtime Rate</label>
                    <input type="number" id="overrate" name="overrate" readonly>
                    <label for="overpay" style="color:blue;font:bolder;font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Overtime pay</label>
                    <input type="number" id="overpay" name="overpay" readonly><br><br>
                    <label for="basicpay" style="color:blue;font:bolder;font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Basic pay</label>
                    <input type="number" id="basicpay" name="basicpay" readonly>
                    <label for="hall"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">House Allowance</label>
                    <input type="number" id="hall" name="hall">
                    <label for="mall"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Medical allowance</label>
                    <input type="number" id="mall" name="mall">
                    <label for="gpay" style="font:bolder;color:red;font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Gross pay</label>
                    <input type="number" id="gpay" name="gpay" readonly><br>
                </fieldset> 
                <br>
              <fieldset style="border-color: rgb(0, 149, 255);border-radius:3px;border-width: 5px;">
                        <legend style="background-color: rgb(139, 220, 247);
                        border-radius: 35px;font-size: 20px;">
                    <h2>Taxation</h2>
            
                </legend>
                <label for="nssf"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">NSSF</label>
              <input type="number" id="nssf" name="nssf">
               <label for="taxable"style="color:blue; font:bolder;font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;" >Taxable pay</label>
                <input type="number" id="taxable" name="taxable" readonly>
                <label for="taxrate"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Tax Rate:</label>
                <input type="number" id="taxrate" name="taxrate">
                <label for="tottax" style="color:blue;font:bolder;font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Total tax</label>
                <input type="number" id="tottax" name="tottax" readonly><br><br>
                <label for="mpr"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Monthly Personal Relief</label>
                <input type="number" id="mpr" name="mpr">
                <label for="inr"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">insuarance Relief</label>
                <input type="number" id="inr" name="inr">
                <label for="paye" style="font:bolder;color:red;
                font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">P.A.Y.E</label>
                <input type="number" id="paye" name="paye">
              </fieldset> 
              
              <br>
              
              <fieldset style="border-color: rgb(0, 149, 255);border-radius:3px;border-width: 5px;">
                
                <legend style="background-color: rgb(139, 220, 247);
                border-radius: 35px;font-size: 20px;">
                    <h2>Deductions</h2>
                </legend>
                
               <label for="nhif"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">NHIF</label>
              <input type="number" id="nhif" name="nhif">
              <label for="pension"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Pension</label>
              <input type="number" id="pension" name="pen">
              <label for="damages"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Damages</label>
              <input type="number" id="damages" name="damages">
              <label for="bankloanmi"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Bank loan Monthly instalment</label>
              <input type="number" id="bankloanmi" name="bankloanmi"><br><br>
              <label for="savings"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Bank Savings</label>
              <input type="number" id="savings" name="savings">
              <label for="stdloan"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Student loans</label>
              <input type="number" id="stdloan" name="stdloan">
              <label for="disability"style="font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Disability Benefits</label>
              <input type="number" id="disability" name="disability">
             
              <label for="totdeduc" style="font:bolder;color:red;
              font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Total Deductions</label>
              <input type="number" id="totdeduc" name="totdeduc" readonly><br>
            </fieldset>
        
    
            </p>
              <br><label for="netsal" style="font-size: x-large;font: bolder;color:blue;font-size: 20px;font:bolder;background-color: #f7d4ed;padding: 5px;">Net Salary</label>
                  <input type="number" id="netsal" name="netsal" readonly><br><br>
                                    
              <button type="button"  class="button" onclick="calculate()">Calculate</button>
              <input type="submit" value="Submit">
              <br>                  
            </form>

            </body>
    
            </div>
            </html>