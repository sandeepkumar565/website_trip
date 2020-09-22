<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style>
    body {
        /*background-image:url('img/hotel.jpg');*/
    }
    </style>
</head>

<body>
    <div class="menu-bar">
        <ul>
            <li class="active"><a href="#"><i class="fa fa-home"></i>Home</a></li>
            <li>
                <a href="#"><i class="fa fa-clone"></i>Services</a>
                <div class="sub-menu1">
                    <ul>
                        <li><a href="hotel1.php">Hotel</a></li>
                        <li><a href="travel1.php">Travel</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="contact-view.php"><i class="fa fa-phone"></i>Contact Us</a></li>
            <li><a href="about.php"><i class="fa fa-user"></i>About Us</a></li>


        </ul>
    </div>

    <div class="outerbox">
        <div class="innerbox">
            <img src="img/shimla.jpg" alt="Shimla" />
            <img src="img/pune.jpg" alt="Pune" />
            <img src="img/jaipur.jpg" alt="Jaipur" />
            <img src="img/goa.jpg" alt="Goa" />
        </div>
    </div>
    <h1 class="h1">Places of your choice !</h1>

    <div class="button">

        <a href="delhi.php"><button class="city1">Delhi</button></a>
        <a href="mumbai.php"><button class="city2">Mumbai</button></a>
        <a href="kolkata.php"><button class="city3">Kolkata</button></a>
        <a href="goa.php"><button class="city4">Goa</button></a>
    </div>

</body>

</html>