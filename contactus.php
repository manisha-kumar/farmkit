<?php 

  if(isset($_POST['submit']))
  {
    $conn = mysqli_connect("localhost","root","","intp");

   if (!$conn)
    {
     echo "<script>window.alert('connection failed')</script>";
   }
   else
   {

      $stmt = $conn->prepare("INSERT INTO contact (name, email, phnumber, comment) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("ssis", $name, $email, $phnumber, $comment);

      $name= $_POST['name'];
      $email = $_POST['email'];
      $phnumber = $_POST['phnumber'];
      $comment = $_POST['comment'];
    
     if ($stmt->execute())
      {
       echo "<script>window.alert('Thank for your Feedback!!!')</script>";
      } 


$stmt->close();
$conn->close();
     }
      
}
?>