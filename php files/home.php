<?php


session_start();
include('conn.php');


$username = isset($_SESSION['name'])? $_SESSION['name']: NULL;





?>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
    <script src="js/bootstrap.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    
<style>
    #head{
        background-color: black;
        color: white;
        font-style: italic;
    }
    hr {
         border: 1px solid black;
       } 
    
    #post{
        text-align: center;
    }
    
    
    #head2{
        text-align: right;
    }
    
    
    #img{
        height: 150px;
        width: 150px;
        border-radius: 100px;
      
            
    }
    
    
    #pro3{
       text-align: right;
    } 
    
    input[type=submit]{
        
        height: 30px;
        text-decoration: none;
        margin: 4px 2px;
        
    }
    
    input[type=text]{

        border: 2px-solid black;
        text-decoration: none;
        margin: 4px 2px;
        
    }
    
    body {
        background-image: url(image/white%20wood.jpg);
    }
    </style>
</head>
<body>
    
    
    <div class="container-fluid">
        <div id="head" class="row">
        <div class="col-xs-6"><h2>MyBlog</h2></div>
        <div class="col-xs-6"><h3><?php  echo "$username"   ?></h3></div>
        
    </div>   
            
            
<br>            
            
           
            
            
            
           <div id="profile" class="row">
            
            <div class="col-xs-2">
                
            <?php 
    
                
                
                    $sql="SELECT * from signup WHERE name='$username'";

                    $result=$conn->query($sql);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { $location= $row ["image"];
                      echo "<img id='img' src='$location'>";
                      }
                    } else {
                    echo "0 results";
                    }
                $conn->close();
                    ?>
                 </div>
            <div id="pro2" class="col-xs-2">
                
               
               <?php
                
                
                include("conn.php");
                
                $username = isset($_SESSION['name'])? $_SESSION['name']: NULL;
                
                if(isset($_POST['submit']))
                    
                        {
                $name=$_FILES['myfile']['name'];
                $tmp_name=$_FILES['myfile']['tmp_name'];
            
                if($name);
                {
                $location="image/$name";
                move_uploaded_file($tmp_name,$location);
                    
                $query=mysqli_query($conn,"UPDATE signup SET image='$location' WHERE name='$username'");
                    
                    header ("Location:suc.php");
                }
               
                    die("Selecteer een bestand");
             }
                
                
                
            echo "<br>";
                
            echo "
            
            <form action='home.php' method='post' enctype='multipart/form-data'>
                
            <input type='file' name='myfile'>
            <input type='submit' name='submit' value='Change Your Avatar'>
            </form>
            ";
            ?>
                
                
                
                
                
                
                
               </div> 
               
            
            
            
            <div id="pro3" class="col-xs-8"><a href="logout.php">Uitloggen</a></div>
            
            
            
        </div>
        
    <hr>
        
    <div id="post" class="row">
    <div class="col-xs-12"><form method="post" action="post.php">
        
        <input type="text" name="title" placeholder="title...">
        <input type="text" name="des" placeholder="describe...">
        <input type="submit" value="post">
        </form>
        
        
        
        
    </div>    
        
        
    </div>
    
    <hr>
        
    <div id="body" class="row">
        
        
        <div class="col-sx-12">
        
        <?php   $sql = "SELECT  *  FROM posts ORDER BY id desc";
$result = $conn->query($sql);
            
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo "<b>"."Title:" .$row["title"]."</b>". $row["post"]."<br>"."<i>Posted By--</i><br>"."
        <b>".$row["name"]." </b>".".<b>".$row["time"]."</b>";
        
        echo"<hr>";
        echo "<hr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
        
        
        
        
        </div>
        
        
        
        
        
        
    </div>
    
    
    
    
    
    </div>
       
 
</body>
</html>