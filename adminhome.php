

<!DOCTYPE html>
<html lang="">
<head>
    <title>AdminHome</title>
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
 </head>
    <style>
    <div class="gt__box">
  
    <div class="gt__select">
      <div id="google_translate_element"></div>
    </div>
  </div>
        <meta charset="UTF-8">       
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-2.1.3.min.js>"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    

    
         <div class="gt__box">
            <div class="gt__select">
              <div id="google_translate_element"></div>
            </div>
        </div>
        
       
        <div id="head">
            <div class="sticky">
        <header>
            
            <nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                    <span class="navbar-toggler-icon"></span>   
                </button>
                
                <div class="collapse navbar-collapse" id="collapse_target">
                <span class="navbar-text" style="color: aqua; height: 40px; font-weight: 500" >FarmKit</span>
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link "  href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                   <select name="products" class="nav-link">
                        <option class="box">Products</option>
                       <a href="veges.html"><option>Vegetables</option></a>
                        <option><a href="fruits.html">Fruits</a></option>
                        <option><a href="dairy.html">Dairy and eggs</a></option>
                        <option><a href="pulses.html">Pulses and Grains</a></option>
                                        
                                    </select>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link "  href="about.html">About</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" style="float: right">Login</a>
                    </li>
                </ul>
                
                </div>
                <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search Here" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background-color: skyblue;">Search</button>
  </form>
            </nav>
        </header>
    </div>
</div>
       body {
  margin: auto;
  background-color:#fff2cc;
  height: 660px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
      background-attachment: fixed;
  position: relative;
  font-family: sans-serif;
}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #000;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #ffc107;}

ul.topnav li a.active {background-color: #ffc107;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}

        
        .inner_div{
            align-self: center;
          
            background: #ececec;/*rgb(255, 255, 255)*/
            text-align: left;
            width: 60%;
            margin-left: 20%;
            
            height: auto;
            
           
        }
        h4{
            font-weight: bold; 
            /*font-size: 12px; */
            color : #000;
            display: block;
            font-family: "Times New Roman", Times, serif;
            padding-top: 10px;
            /*padding-bottom: 10px;*/
            margin: 5%;
            margin-bottom: 10px;
            
        }
        #complaint{
            /*padding-top: 10px;*/
            padding-bottom: 10px;
            margin: 5%;
            margin-top: 10px;
            color: grey;
            font-style: italic;
            font-size: 20px;
            text-align: justify;

        }
        .main_div{
           
            width: 100%;
            height: 100%;
           
            /*overflow: scroll;*/
            
            margin-left: 0%;
            
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .footer {
           position: fixed;
           left: 0;
           bottom: 0;
           width: 100%;
           height: 35px;
           background-color: #000;
           color: white;
           text-align: center;
        }
        
        button{
            
        margin-left: 70%;
        margin-top: -4%;
        }
        
    </style>
</head>

<body>
    
    
    <?php
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
            
            $sql = "SELECT * FROM contact ORDER BY udated_at desc";
            $result = $conn->query($sql);
            echo "<div class='main_div'>";
            if ($result->num_rows > 0) {
                // output data of each row
                
                
                while($row = $result->fetch_assoc()) {
                    //print_r($row);
                   
                    echo "<div class = 'inner_div'>";
                    echo "<h4>";
                    echo $row["email"];
                    echo "</h4>";
                    echo "<p id = 'complaint'>";
                    echo $row["comment"];
                    echo "</p>";
                    echo"</div>";

                    
                  
                }
            } else {
                echo "0 results";
            }
            $conn->close();
    
            echo "</div>";

    ?>
    
    <div class="footer">
       <p>Copyright © Farmkit</p>
    </div>
</body>
    
   
    
    
</html>