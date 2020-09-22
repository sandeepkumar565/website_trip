<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>

<body>
    <center>
        <div class="bg-image"></div>

        <div class="bg-text">
            <h2>Hope you will enjoy your holidays !</h2>
            <h2 style="font-size:50px">Check here for login.</h2>
            <form action="Login.php" method="post">
                Email Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;<input type="text" name="email"><br /><br />
                Password &nbsp;&nbsp; : &nbsp; <input type="password" name="password"><br /><br />
                <input type="submit" name="signin" value="Login">
            </form>
            <h2>OR</h2><br>
            <a href="Register.php"><button>Register</button></a>
        </div>
        <br>
        <br>

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
         ?>
         
        <h1 style="color: red;"><?php echo "Enter your detais properly";?></h1>
        <?php
      }
  
     }
     mysqli_close($conn);  
?>
</body>
</center>
<script>
  document.querySelector('h1').style.display='none';
  document.querySelector('[name="signin"]').addEventListener('click', function(){
    document.querySelector('h1').style.display='block';
  })
  
</script>

</html>

