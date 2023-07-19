<html>
    <head>
        <title>Paylee</title>
        
        <link rel="stylesheet" href="hr.css">
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
          </style>
    </head>
    <body>
        <div class="entire">
    
<div class="top">
    <div class="top-left">
        <img src="logo.jpeg" alt="vector"  style="height: 30; width: 31;"/>
        <p style="font-weight: 700; font-size: 30px;">Paylee</p>
     </div>
    <div class="top-right"> 
        <a href="homepagehr.php">Home</a>

        <div class="dropdown">
      <button class="dropbtn">EMPLOYEES |</button>
      <div class="dropdown-content">
      <a href="addemployee.php">Add employee</a>
      <a href="employeereporthr.php">view employee</a>
      
        </div>
    </div>
    
    <div class="dropdown">
      <button class="dropbtn">Leave | </button>
      <div class="dropdown-content">
      <a href="leavereporthr.php">view Leave Application</a>
      <a href="leavereporthr.php">view Leave Report</a>
        </div>
        </div>
        
        <div class="dropdown">
      <button class="dropbtn">Salaries | </button>
      <div class="dropdown-content">
      <a href="salaryhr.php">Calculate Salary</a>
      <a href="salaryreporthr.php">view Salary Report</a>
      </div>
        </div>

        <div class="dropdown">
      <button class="dropbtn">Reports | </button>
      <div class="dropdown-content">
      <a href="employeereporthr.php">view Employee Report</a>
      <a href="salaryreporthr.php">view Salary Report</a>
      <a href="leavereporthr.php">view Leave Report</a>
      </div>
        </div>
        <a href="contact.php">Contact Us</a>
        <a href="about.php">About</a>
        <a href="index.php" target="_self" style="background-color: #02023a;
          color: black;
          padding: 14px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size:20px; background-color: #96d3ff;
          border_radius:10px;">Log out</a>       
</div>

<div class="box1">
    <p>Hi! we're</p>
</div>

<div class="box2">
    <p>Paylee</p>
</div>

<div class="box3">
    <p>We streamline your </p>
    <p>Onboarding, Payroll and Leave</p>
    <p>operations</p>
    
</div>
<div class="box4">
    Welcome
</div>
    </div>
    </body>
</html>