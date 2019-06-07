<?php 

  if(isset($_POST['login']))
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "intp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
   if (!$conn)
    {
     echo "<script>window.alert('connection failed')</script>";
   }
   else
   {

      $email= $_POST['email'];
      
      $password = $_POST['password'];
      $sql = "SELECT email,password from adminregistration where email='".$email."'";
      $result = $conn->query($sql);

      if (filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<script>window.alert('Email is wrong')</script>";
      
      while ($row= $result->fetch_assoc())
      {

       $email1 = $row['email'];
        $password1 = $row['password'];
      }

      if ($email == $email1 && $password==$password1) 
      {
        echo "<script>window.alert('Successfully Logged In')</script>";
        header("Location: aindex.php");

      }
      else
      {
        echo "<script>window.alert('Email or Password is wrong')</script>";
      }

    }
    else
    {
      echo "<script>window.alert('Email is wrong')</script>";
    }

   }
 }

?>
