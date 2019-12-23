<!DOCTYPE html>

<html>		
<body style="background-color:powderblue;">
	<center>
	<h2>Here is your cost of travel !</h2>
	<?php
	$city=$_POST["city"];
	$days=$_POST["days"];
	$people=$_POST["people"];
	
	if(strtolower($city)=="delhi")
	{
		echo "<h3>Welcome to $city</h3><br>";
		echo "No. of days : $days<br>";
		echo "No. of people : $people<br>";

		echo "Cost/person/day : 4000<br>";
		
		$total=4000*$days*$people;
		echo "Total cost : $total<br>";
	}

	if(strtolower($city)=="mumbai")
	{
		echo "<h3>Welcome to $city</h3><br>";
		echo "No. of days : $days<br>";
		echo "No. of people : $people<br>";

		echo "Cost/person/day : 5000<br>";

		$total=5000*$days*$people;
		echo "Total cost : $total<br>";
	}
	
	if(strtolower($city)=="kolkata")
	{
		echo "<h3>Welcome to $city</h3><br>";
		echo "No. of days : $days<br>";
		echo "No. of people : $people<br>";

		echo "Cost/person/day : 3000<br>";

		$total=3000*$days*$people;
		echo "Total cost : $total<br>";
	}
	
	if(strtolower($city)=="goa")
	{
		echo "<h3>Welcome to $city</h3><br>";
		echo "No. of days : $days<br>";
		echo "No. of people : $people<br>";

		echo "Cost/person/day : 3500<br>";

		$total=3500*$days*$people;
		echo "Total cost : $total<br>";
	}
	echo "<h5>Note : The cost is calculated in INR.</h5>";
	
	?>
</center>
</body>
</html>
