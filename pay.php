<?php
session_start();
$row = $_SESSION['username'];

$_SESSION['username'] = $row ;

$username = $row["username"];

$row = $_SESSION['roomtype'];

$_SESSION['roomtype'] = $row ;


$row = $_SESSION['price'];

$_SESSION['price'] = $row;

$price = $row["price"];

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
        <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
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
            <form class="form-horizontal" action ="pay.php" method ="POST" >
				<table style="width:100%">
				  <tr>
					<th>Roomtype</th>
					<th>Price</th> 
					
				  </tr>
				  <tr>
					<td>:<?php echo $_SESSION['roomtype']; ?></td>
					<td>:<?php echo $_SESSION['price']; ?></td>
				  </tr>
				 	</table>
					<label>Only Cash On Delivery is available</label>
                    <div class="form-group">
                        <div class="col-lg-09 col-lg-offset-1">
                           
                            <button type="submit" class="btn btn-primary" value="Confirm" name="Confirm"  ><a href="booking.php">
                                Confirm</a></button>
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