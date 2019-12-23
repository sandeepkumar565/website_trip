<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<center>
<div class="bg-image"></div>

<div class="bg-text">
  <h2>Hope you will enjoy your holidays !</h2>
  <h2 style="font-size:50px">Check here for login.</h2>
  <form  action="Login.php" method="post">
    Email Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;<input type="text" name="email"><br/><br/>
    Password &nbsp;&nbsp; : &nbsp; <input type="password" name="password"><br/><br/>
    <input type="submit" name="signin" value="Login">
  </form>
  <h2>OR</h2><br>
  <a href="Register.php"><button>Register</button></a>
</div>
<br>
<br>

</body></center>
</html>

<?php
     $conn = mysqli_connect("localhost","root","");  
    if(! $conn )  
    {  
      die('Could not connect: ' . mysqli_connect_error());  
    }  
    //echo 'Connected successfully<br/>';  

     mysqli_select_db($conn,"reg");
    
     if(isset($_POST["signin"]))
     {
        //header("Location: google.com");
        $pass=$_POST["password"];
        $emailid=$_POST["email"];

        $sql = 'SELECT * FROM user';  
        $retval=mysqli_query($conn, $sql);  
  
         if(mysqli_num_rows($retval) > 0){  
         while($row = mysqli_fetch_assoc($retval)){  
           if($row['email']==$emailid) {
              if($row['password']==$pass){
                header("Location: index.php");
             }
           }
         } //end of while
        echo "Enter your detais properly";  
      }
  
     }
     mysqli_close($conn);  
?>