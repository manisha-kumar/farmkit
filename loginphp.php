<?php 

  if(isset($_POST['login']))
  {
    $conn = mysqli_connect("localhost","root","farmkit101","intp");

   if (!$conn)
    {
     echo "<script>window.alert('connection failed')</script>";
   }
   else
   {

      $email= $_POST['email'];
      $password = $_POST['password'];
      $sql = "SELECT email,password from registration where email='".$email."'";
      $result = $conn->query($sql);
      while ($row= $result->fetch_assoc())
       {
       $email1 = $row['email'];
        $password1 = $row['password'];
      }
      if ($email == $email1 && $password==$password1) 
      {
        echo "<script>window.alert('Successfully Logged In')</script>";
        header("Location:index.php");

      }
      else
      {
        echo "<script>window.alert('Email or Password is wrong')</script>";
      }
   }
 }

?>

