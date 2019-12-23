
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
         die("<mark>Correctly enter email address !</mark>");

       if (strlen($pass)<5)
       {
         die("<mark>Length of password should be more than 4.</mark>");
       }


      if(isset($_POST["signup"]))
      {
       $query="insert into user(name,password,email) values('$name','$pass','$emailid')";
       if(mysqli_query($conn,$query))
       {
        echo "<h2>You have registered sucessfully !</h2>";
       }
      }
     }
     else
      die("<mark>Please provide name !</mark>");
     
      mysqli_close($conn);  
?>
