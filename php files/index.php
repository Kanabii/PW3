<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
    <script src="js/bootstrap.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    
<style>
    #head{
        background-color: black;
        color: white;
    }
    body {
        background-image: url(image/white%20wood.jpg);
        background-repeat: no-repeat;
    }
    
</style>
</head>
<body>  
    <div class ="container-fluid">
        <?php 'conn.php' ?>
    <div id="head" class="row">
    <div class="col-xs-6"><h2>This is my blog</h2></div>    
    <div class="col-xs-6"></div> 
        </div>
        
        <br>
        
        
        <div id=info>
        <h2>Login</h2>
        
        <form action="login.php" method="post">
            <label>Username:</label>
        <input type="text" name="name" placeholder="User name"><br><br>
            <label>Password:</label>
            
        <input type="text" name="pass" placeholder="Password"><br><br>
            
            <button style="background-color:gray";
            color: white;
            type="submit"><b>Login</b></button>
            
            </form>
            <h2>Signup</h2>
            
            <form action="signup.php" method="post">
            <label>Username:</label>
        <input type="text" name="name" placeholder="User name"><br><br>
            <label>Password:</label>
            
        <input type="text" name="pass" placeholder="Password"><br><br>
            
            <button style="background-color:gray";
            color: white;
            type="submit"><b>Signup</b></button>
            
            </form>
        </div>
        <div>
    </div>
    </div>
</body>
</html>