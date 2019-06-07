<?php


if (isset($_POST['signup'])) 
{
	$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "intp";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['pwd'];
		$confirmpassword = $_POST['cpwd'];
		$gender = $_POST['gender'];
		// prepare and bind
		
		if ($password == $confirmpassword)
		 {
			$sql ="INSERT INTO adminregistration(fname,lname,email,password,confirmpassword,gender) 
			VALUES ('$firstname','$lastname','$email','$password','$confirmpassword','$gender')";
				$result=$conn->query($sql);
			echo "<script>window.alert('Data Inserted Successfully')</script>";
			echo "<script>window.location.href='alogin.php'</script>";
		}
		else
		{
			echo "<script>window.alert('Password Doesnt match')</script>";
		}
		
		// set parameters and execute
	

}
?>