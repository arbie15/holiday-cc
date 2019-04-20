<?php

require 'core.php';

$hostname_Database = "localhost";
$database_Database = "hotel";
$username_Database = "root";
$password_Database = "";

$mysqli = new mysqli($hostname_Database, $username_Database, $password_Database, $database_Database); 
if (mysqli_connect_errno()) {
   printf("Connect failed: %s\n", mysqli_connect_error());
   exit();
}


session_start();
$row = $_SESSION['username'];

$_SESSION['username'] = $row ;

$username = $row["username"];
function dateDiffInDays($date1, $date2)  
{ 
    // Calulating the difference in timestamps 
    $diff = strtotime($date2) - strtotime($date1); 
      
    // 1 day = 24 hours 
    // 24 * 60 * 60 = 86400 seconds 
    return abs(round($diff / 86400)); 
} 


if(isset($_POST['fromdate'])  && isset($_POST['todate']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']))

{

	$fromdate = $_POST['fromdate'];
	
	$todate = $_POST['todate'];
	$roomtype = $_POST['roomtype'];
	$name = $_POST['name'];

	$email = $_POST['email'];

	$phone = $_POST['phone'];
	$dateDiff = dateDiffInDays($fromdate, $todate); 

	if(!empty($fromdate) && !empty($todate) && !empty($roomtype)  && !empty($name) && !empty($email) && !empty($phone) )

	{		$query = "SELECT name FROM booking WHERE name = '$name'";

		$query_run = mysqli_query($conn,$query);

		$query_num_rows = mysqli_num_rows($query_run);

		if($query_num_rows == 1)

		{

			echo "<script type='text/javascript'>alert('The name '.$name.' already exits');</script>";

		}
		else

		{ 
		
			$query1 = "INSERT INTO booking(id,fromdate,todate,roomtype,
			name,email,phone) 
			VALUES('','".mysqli_real_escape_string($conn,$fromdate)."'
			,'".mysqli_real_escape_string($conn,$todate)."'
			,'".mysqli_real_escape_string($conn,$roomtype)."'
			,'".mysqli_real_escape_string($conn,$name)."'
			,'".mysqli_real_escape_string($conn,$email)."'
			,'".mysqli_real_escape_string($conn,$phone)."')";
			
			//$result = $mysqli->query($query1);
			//echo $result;
			if(mysqli_query($mysqli,$query1))
				{
					//header('Location: login.php');
					//$sql="SELECT available_rooms FROM availability WHERE roomtype='$roomtype'";
					 //$result = mysqli_query($mysqli,$sql);
					 //$value = mysqli_fetch_object($result);
						//$available_rooms = $value->id;
					//	echo $available_rooms;
						echo "<script type='text/javascript'>alert('room booked successfully');</script>";

					 //while($row = mysqli_fetch_assoc($result)) {
					//	echo "vailable_rooms: " . $row["available_rooms"]. "<br>";
					$sql1 = "UPDATE availability SET available_rooms=available_rooms-1 WHERE roomtype='$roomtype'";
					mysqli_query($mysqli,$sql1);
					$_SESSION['roomtype'] = $roomtype;
					if($roomtype=='cypress')
					{
						$price = 2000; 
						$newp = $price * $dateDiff;
						$_SESSION['price'] = $newp;
					}
					else {
						
						$price=2500;
						$newp = $price * $dateDiff;
						
						$_SESSION['price'] = $newp;
					}
					header('Location: pay.php');
				}
				else
				{ 			
					echo "<script type='text/javascript'>alert('Sorry! We could not register you now');</script>";
				}
	}
	}
	else{
		
				echo "<script type='text/javascript'>alert('Please enter all the details');</script>";

	}

	
}
else
{
	echo '';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
    <!--[if IE 9]> <html class="no-js ie9 oldie" lang="en"> <![endif]-->
    <meta charset="utf-8">
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5, Code lab, codelab, codelab coming soon template, bootstrap coming soon template">
    <title>Booking Form</title>
    <!-- ============ Google fonts ============ -->
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet'
        type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800'
        rel='stylesheet' type='text/css' />
    <!-- ============ Add custom CSS here ============ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="css/style.css" rel="stylesheet" type="text/css" />    
   
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
     

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        
</head>
<body>
<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container" >
	<ul><img src="img/logo3.jpg" height="80" width="100" align="left"></ul> 
        <div class="navbar-header"><a class="navbar-brand" href="main.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Holiday Resort</a>
		<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
            </button>
        </div>
<div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
				<li><a href="main.php">Home</a>
                </li>

				
				<li class="dropdown ">
				<a  aria-expanded="true" aria-haspopup="true" role="button" data-toggle="dropdown"  class="dropdown-toggle " >Suites <b class="caret"></b></a>
				<ul class="dropdown-menu display-menu"><li class=""><a href="cypress.php">Cypress Suites</a></li>
				<li class=""><a href="banyan.php">Banyan Family Suites</a></li></ul></li>
				
				
				<li class="dropdown ">
				<a  aria-expanded="true" aria-haspopup="true" role="button" data-toggle="dropdown"  class="dropdown-toggle " >Meetings & Events <b class="caret"></b></a>
				<ul class="dropdown-menu display-menu"><li class=""><a href="event_chart.php">Event Planning Chart</a></li>
				<li class=""><a href="conference.php">Conference in Lonavala</a></li></ul></li>
				<li><a href="cancel.php">Cancel Booking</a></li>
				
				<li><a href="logout.php">Logout</a>
                </li>
				
				<li><div class="col-sm-2 sidenav" >
        <p>Profile</p>
	  <p>Username:<?php echo $username; ?></p>
	  
    </div></li>
            </ul>
        
        </div>
		
    </div>
</div>
   <div class="container" style="color:#fff; margin-bottom:30px; margin-top:20px;">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 text-center">
            <div class="registerform">
            <form class="form-horizontal" action ="booking.php" method ="POST" >
                <fieldset>
                    <legend>Room Booking Form <i class="fa fa-pencil pull-right"></i></legend>
						
	<div class="form-bottom">
					<div class="form-group">
					Check in:<br>
			        <label class="sr-only" for="fromdate">Check in:</label>
			        <input type="date" name="fromdate" placeholder="Enter your check in date" class="form-fromdate form-control" id="form-fromdate"/>
			        </div>
					<div class="form-group">
					Check out :<br>
			        <label class="sr-only" for="todate">Check out:</label>
			        <input type="date" name="todate" placeholder="Enter your check out date" class="form-todate form-control" id="form-todate"/>
			        </div>
					<br>
					<div class="form-group">
                    <label for="roomtype">Room type</label>
                   <select id="roomtype" name="roomtype" class="form-control">
                            <option value="cypress">Cypress Suite</option>
                            <option value="banyan">Banyan Suite</option>
                   </select>
                    </div>
					<br>
					<div class="form-group">
		Name :<br>
		<label class="sr-only" for="name">Name:</label>
		<input type="text" name="name" placeholder="Enter Name..." class="form-name form-control" id="form-name"  />
		</div>
		<br>
		
		<div class="form-group">
					EMAIL :<br>
			        <label class="sr-only" for="email">EMAIL:</label>
			        <input type="text" name="email" placeholder="Enter your Email..." class="form-email form-control" id="form-email"  />
	    </div>		
		<br>
		<div class="form-group">
					Phone:<br>
			        <label class="sr-only" for="phone">Phone:</label>
			        <input type="text" name="phone" placeholder="Enter your Phone no..." class="form-phone form-control" id="form-phone"  />
	    </div>	<br>
		
                    <div class="form-group">
                        <div class="col-lg-09 col-lg-offset-1">
                            <button type="reset" class="btn btn-warning">
                                Cancel</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary" value="Book" name="submit" >
                                Book</button>
                        </div>
                    </div>
                </fieldset>
            </form>
         </div>
		


         </div>
        </div>

      
         <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.backstretch.js" type="text/javascript"></script>
        <script type="text/javascript">
            'use strict';

            /* ========================== */
            /* ::::::: Backstrech ::::::: */
            /* ========================== */
            // You may also attach Backstretch to a block-level element
            $.backstretch(
        [
                        "img/44.jpg",
            "img/colorful.jpg",
            "img/34.jpg",

           
          
        ],

        {
            duration: 4500,
            fade: 1500
        }
		
    );
   </script>
        
</body>
</html>
