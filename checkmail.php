<?php
class checkMailD
{	
    function checkMail($email){
    
    $dbname ="intp"; //name of database
    $username = "root";
    $password = "";
    $host = "localhost";

/*if (!filter_var($q, FILTER_VALIDATE_EMAIL)) {
 // $emailErr = "Invalid email format"; 
  echo "Invalid email format";
}*/

    

    try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
     
            // calling stored procedure command
            $sql = 'CALL chkMail(:id)';
     
            // prepare for execution of the stored procedure
            $stmt = $pdo->prepare($sql);
     
            // pass value to the command
            $stmt->bindParam(':id', $email, PDO::PARAM_STR);
     
            // execute the stored procedure
            $stmt->execute();
     
            
            
            $c=count($stmt->fetchAll());
            
            if ($c>0) {
                return "Email already taken";
            }
            else{
                return "valid email";
            }
        } 
        catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }
   
        return null;
    }
}
?>