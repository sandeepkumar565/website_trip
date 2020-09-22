<!DOCTYPE html>
<html>

<body>
    <?php
    
    $conn = mysqli_connect("localhost","root","");  
    if(! $conn )  
    {  
      die('Could not connect: ' . mysqli_connect_error());  
    }  

     mysqli_select_db($conn,"reg");
     
     $name=$_POST["name"];
     $feed=$_POST["feedback"];
     $emailid=$_POST["email"];

     if(($_POST["name"])!='')
     {
       $name=$_POST["name"];

       if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/",$emailid)) 
         echo("<mark>Correctly enter email address !</mark>");

       else if (strlen($feed)>1000)
       {
         echo("<mark>Length of suggestion should not be more than 1000 characters.</mark>");
       }

       else if (strlen($feed)<1)
       {
         echo("<mark>Please write some useful suggestion.</mark>");
       }


      else if(isset($_POST["sub"]))
      {
       $query="insert into contact_us(name,feedback,email) values('$name','".$feed."','$emailid')";
       if(mysqli_query($conn,$query))
       {
        echo "<h2>Your suggestions have been registered sucessfully !</h2>";
        
       }
      }
     }
     else
      echo("<mark>Please provide name !</mark>");
     
      mysqli_close($conn);  
      
    ?>

        <script>
            setTimeout(function() {
                location.href = 'contact-view.php';
            }, 2000);
        </script>

</body>

</html>