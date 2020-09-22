<!Doctype html>
<html>

<body>
    <?php
    $conn = mysqli_connect("localhost","root","");  
    if(! $conn )  
    {  
      die('Could not connect: ' . mysqli_connect_error());  
    }  
    //echo 'Connected successfully<br/>';  

     mysqli_select_db($conn,"reg");
     
     $name=$_POST["name"];
     $pass=$_POST["password"];
     $emailid=$_POST["email"];

     if(($_POST["name"])!='')
     {
       $name=$_POST["name"];

       if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/",$emailid)) 
         echo("<mark>Correctly enter email address !</mark>");

       else if (strlen($pass)<5)
       {
         echo("<mark>Length of password should be more than 4.</mark>");
       }


      else if(isset($_POST["signup"]))
      {
       $query="insert into user(name,password,email) values('$name','$pass','$emailid')";
       if(mysqli_query($conn,$query))
       {
        echo "<h2>You have registered sucessfully !</h2>";
       }
      }
     }
     else
      echo("<mark>Please provide name !</mark>");

      mysqli_close($conn);  
    ?>

        <script>
            var t = setTimeout(function() {
                location.href = 'Register.php';
            }, 2000);
        </script>
</body>

</html>