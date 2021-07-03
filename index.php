<?php
$insert=false;
if(isset($_POST['name']))
{
$server="localhost";
$username="root";
$password="";
// 

$con=mysqli_connect($server,$username,$password);

if(!$con){
	die("connection to this database failed". mysqli_connect_error());
	}


        $name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$repeatpsd=$_POST['repeatpsd'];

		$sql="INSERT INTO `registration`.`register` ( `name`, `email`, `password`, `repeatpsd`) VALUES ( '$name', '$email', '$password', '$repeatpsd');";
       
       //echo $sql;
  
  if($con->query($sql)==true)
  {
  	//echo "successfuly inserted";
  	$insert=true;
    }
  else {
  	echo "ERROR:$sql<br> $con->error";
  	$not_insert=true;
    }

$con->close();

 }

?>


                                                                <!-- enter html -->
		



<!DOCTYPE html>
<html>
<head>
	<title>Registeration Form</title>
	   <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
       <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>

* {
  box-sizing: border-box;
}

body{
	
   	  font-family: Arial;
   }
	
	.msg{
		font-size: 30px;
		color: green;
		text-align: center;
	}
 form{
   margin: 0 auto;
    width: 600px;
   }
		
 /*.container{
 	background-color: green;
       height: 80px;
	   padding:10px;
	}*/

input[type=text], input[type=password] {
  width: 100%;
  padding: 10px;
  margin: 10px 5px 15px 0px;
  border: 2px solid grey;
  background: #f1f1f1;
}
/*
input[type=text]:focus,input[type=password]:focus{
  background-color: #ddd;
  outline: none;

 }*/

		.registration{
			text-align:center;
			background-color:green;
			color:white;
			padding:15px;
			cursor: pointer;
			opacity:0.8;
			width:100%;
			border:none;


		}
		
		.signin {
           background-color: grey;
           text-align: center;
            height: 50px;
			padding:5px 35px;
			margin: 10px auto;
            width: 600px;
}
	</style>
</head>
<body>
	<form action="index.php" method="post" id="f">
		<div class="container"></div>

	
		<h1 align="center">Register</h1>
         
       <h2 id="msg"></h2>
		
		<h3 align="center">Please fill in this form to create an account.</h3><hr>
		 <?php

         if($insert==true){
		echo "<p class='msg'>Thanks for registration</p>";
	     }
	 

		?>
	
	

		<label for="name"><b>Name</b></label>
		<input type="text" name="name" placeholder="Enter Name">
		<label for="email" ><b>Email</b></label>
		<input id="id1" type="text" name="email" placeholder="Enter Email"  max="6" min="1" >
		<label for="password"><b>Password</b></label>
		<input type="password" name="password" placeholder="Enter password"  >
		<label for="repeatpsd"><b>Repeat password</b></label>
		<input type="password" placeholder="repeat-password" name="repeatpsd" ><hr>
		

	<p><b> By creating an account you agree to our <a href="file:///C:/Users/tarun/Desktop/sublime/registration.html#">Terms &amp; Privacy</a>.</b> </p>
	<button  type="submit" onclick="function_alert()" class="registration"><b>Register</b> </button>
	
	</form>

	<div class="signin">
		<p><b>Already have an account? <a href="file:///C:/Users/tarun/Desktop/sublime/registration.html#"></a>sign in</b> </p>
		<p id="demo"></p>
	</div>
	<script type="text/javascript">
			
		  <?php

         if($insert==true){
		echo "<p class='msg'>Thanks for registration</p>";
	     }
	 

		?>
	}
	

	
		
		
	

	</script>

</body>
</html>
