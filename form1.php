<?php
                 
                    
                    if(isset($_POST['submit'])){
                        //header("Location: home.php#form");   
                        $status = $_POST['status'];
                        $fname= $_POST['fname'];
                        $lname= $_POST['lname'];
                        $age = $_POST['age'];
                        $address = $_POST['address'];
                        $Pname = $_POST['Pname'];
                        $Dname = $_POST['Dname'];
                        $Cname = $_POST['Cname'];
                        $Bday = $_POST['Bday'];
                        $TP = $_POST['TP'];
                        $gender = $_POST['gender'];
                        $dept = $_POST['dept'];
                        
                        
                        
                    
                        $con = mysqli_connect("localhost", "root", "", "faculty");
                        if(mysqli_connect_errno()){
                            die("Database connection failed: " .
                                     mysqli_connect_error() .
                                     " (" .  mysqli_connect_errno() . ")"
                                    );
                        }
                        
                            $sql = "INSERT INTO details(Status,First Name,Last Name,Age,Address,Province,Distric,City,Date Of Birth,Contact No,Gender,Department) VALUES('$_POST[status]','$_POST[fname]','$_POST[lname]','$_POST[age]','$_POST[address]','$_POST[Pname]','$_POST[Dname]','$_POST[Cname]','$_POST[Bday]',,'$_POST[TP]',,'$_POST[gender]','$_POST[dept]')";
                            mysqli_query($con, $sql);
                        
                  } 



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css01/common.css">

<title>Welcome To The Faculty Of Applied Sciences</title>


</head>

<body>
<div class="container">
	<div class="jumbotron">
  		<h1>Welcome To The Faculty Of Applied Sciences</h1>
  		<p>Sabaragamuwa University Of SriLanka</p> 
	</div>



<nav class="navbar navbar-inverse">
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
                
             <li><a href="#"> Registraion</a></li>
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





</center>
</div>


</div>


</body>
</html>
