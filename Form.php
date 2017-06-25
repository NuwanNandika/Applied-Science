<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css01/common.css">
<?php include 'Connect.php';?>
<title>Register For The Faculty of Applied Sciences</title>


</head>

<body>
<div class="container">
	<div class="jumbotron">
  		<h1>Welcome To The Faculty of Applied Sciences</h1>
  		<p>Sabaragamuwa University of SriLanka</p> 
	</div>



<nav class="navbar ">
	<div class="container-fluid">
    	<div class="navbar-header">
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        		<span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
         </button>
        
        </div>
        
        <div class="collapse navbar-collapse" id="myNavbar">
         <ul class="nav navbar-nav">
         <li class="active">
         		<a href="Faculty Of Applied.html"> Home</a></li>
                
             <li><a href="Form.php"> Registraion</a></li>
             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Departments <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Sport.html">Sport Science And Physical Education</a></li>
              <li><a href="cis.html">Computing And Information Systems</a></li>
              <li><a href="food.html">Food Science And Technology</a></li>
              <li><a href="pst.html">Physical Science And Technology</a></li>
              <li><a href="Nr.html">Natural Resources</a></li>
            </ul>
          </li>
               
               <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Dean.html">Dean of the Faculty</a></li>
              <li><a href="Mission.html">Vision And Mission</a></li>
            </ul>
          </li>
          </ul>
        </div>
    </div>

</nav>


<br>

<div class="jumbotron">

<h2 id="register" align="middle">REGISTRATION FOR THE FACULTY</h2>
                                
                                  
<center>

<h5>...........This is your registration form........... </h5>



<form action="Form.php" method="post">
<table>
<tr>
	<td>
Status</td>
	<td> <select name="status" id="status">
<option>Miss</option>
<option>Mr</option>
<option>Mrs</option>
<option>Rev(Male)</option>
<option>Rev(Female)</option>

</select>
	</td>
</tr>

<tr>
	<td>
First Name:</td>
	<td> <input type="text" placeholder="first Name"maxlength="100" name="fname">
	</td>
</tr>

<tr>
	<td>
Last Name:</td>
	<td> <input type="text"placeholder="last Name"maxlength="100" name="lname">
	</td>
</tr>

<tr>
	<td>
Age:</td>
	<td> <input type="text"placeholder="age"maxlength="100" name="age">
	</td>
</tr>

<tr>
	<td>
Address:</td>
	<td> <input type="text"placeholder="address"maxlength="100" name="address">
	</td>
</tr>

<tr>
	<td>
Province:</td>
	<td> <input type="text"placeholder="province"maxlength="100" name="province">
	</td>
</tr>


<tr>
	<td>
District:</td>
	<td> <input type="text"placeholder="district"maxlength="100" name="district">
	</td>
</tr>


<tr>
	<td>
City:</td>
	<td> <input type="text"placeholder="city"maxlength="100" name="city">
	</td>
</tr>

<tr>
	<td>
Date Of Birth:</td>
	<td> <input type="text" placeholder="dd| mm| yyyy"maxlength="100" name="bday">
	</td>
</tr>


<tr>
	<td>
Contact No:</td>
	<td> <input type="text" placeholder="0XXXXXXXXX"maxlength="100" name="tele">
	</td>
</tr>

<tr>
	<td>
Gender</td>
	<td> <input type="radio" value="male" name="gender"> Male <input type="radio" value="female" name="gender"> Female
	</td>
</tr>

<tr>
	<td>
Department</td>
	<td> <select name="dept" id="dept">
<option>Computing and Information Systems</option>
<option>Food Science and Technology</option>
<option>Natural Resource</option>
<option>Physical Science and Technology</option>
<option>Sport Science and Physical Education</option>

</select>
	</td>
</tr>

<tr><td>
</td><td >
<input type="submit"value="submit" class="button" />
<input type="reset"class="button"/></td></tr>

</table>
</form>
<?php
$s="INSERT INTO details(Status,First_Name,Last_Name,Age,Address,Province,District,City,Date_Of_Birth,Contact_No,Gender,Department) VALUE('$_POST[status]','$_POST[fname]','$_POST[lname]','$_POST[age]','$_POST[address]','$_POST[province]','$_POST[district]','$_POST[city]','$_POST[bday]','$_POST[tele]','$_POST[gender]','$_POST[dept]')";
mysqli_query($conn,$s);


$sql1="SELECT * FROM details";
$res=mysqli_query($conn,$sql1);

echo"<table border=1><tr><th>Status</th>
			<th>First_Name</th>
			<th>Last_Name</th>
			<th>Age</th>
			<th>Address</th>
			<th>Province</th>
			<th>District</th>
			<th>City</th>
			<th>Date Of Birth</th>
			<th>Contact No</th>
			<th>Gender</th>
			<th>Department</th>
			</tr>";


while ($row=mysqli_fetch_array($res)) {
	       echo"<tr><td> $row[0]</td>";
	       echo"<td> $row[1]</td>";
	       echo"<td> $row[2]</td>";
	       echo"<td> $row[3]</td>";
	       echo"<td> $row[4]</td>";
	       echo"<td> $row[5]</td>";
	       echo"<td> $row[6]</td>";
	       echo"<td> $row[7]</td>";
	       echo"<td> $row[8]</td>";
	       echo"<td> $row[9]</td>";
	       echo"<td> $row[10]</td>";
	       echo"<td> $row[11]</td></tr>";
	     
}

echo"</table>";
?>

</center>
</div>


</div>


</body>
</html>




















