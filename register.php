<?php

require 'connect.php';


session_start();



if(isset($_POST['username'])  && isset($_POST['email']) && isset($_POST['recovery_email']) && isset($_POST['password']) && isset($_POST['password_again']))

{

	$username = $_POST['username'];
	
	$email = $_POST['email'];

	$recovery_email = $_POST['recovery_email'];

	$password = $_POST['password'];

	$password_again = $_POST['password_again'];

	if(!empty($username) && !empty($email)  && !empty($recovery_email) && !empty($password) && !empty($password_again) )

	{


		$query = "SELECT username FROM t1 WHERE username = '$username'";

		$query_run = mysqli_query($conn,$query);

		$query_num_rows = mysqli_num_rows($query_run);

		if($query_num_rows == 1)

		{

			echo "<script type='text/javascript'>alert('The Username '.$username.' already exits');</script>";

		}

		else

		{
				
			$hash = md5(rand(0,1000)); 

			$query = "INSERT INTO t1(id,username,email,
			recovery_email,password,password_again) 
			VALUES('','".mysqli_real_escape_string($conn,$username)."'
			,'".mysqli_real_escape_string($conn,$email)."'
			,'".mysqli_real_escape_string($conn,$recovery_email)."'
			,'".mysqli_real_escape_string($conn,$password)."'
			,'".mysqli_real_escape_string($conn,$password_again)."')";
			
			
			if(mysqli_query($conn,$query))

			{

			//echo "<script>setTimeout(\"location.href = '192.168.103.194/iah/email2.php';\",1500);</script>";

				header('Location: login.php');

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
	echo 'All fields are mandatory';
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
    <title>Login Form</title>
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
				<li class="dropdown ">
				<a href="" aria-expanded="true" aria-haspopup="true" role="button" data-toggle="dropdown"  class="dropdown-toggle " >Login <b class="caret"></b></a>
				<ul class="dropdown-menu display-menu"><li class=""><a href="adminlogin.php">Admin</a></li>
				<li class=""><a href="login.php">Guest</a></li></ul></li>
				
            </ul>
        
        </div>
		
    </div>
</div>
   <div class="container" style="color:#fff; margin-bottom:30px; margin-top:20px;">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 text-center">
            <div class="registerform">
            <form class="form-horizontal" action ="register.php" method ="POST" onSubmit="return ValidateForm()" >
                <fieldset>
                    <legend>Registration Form <i class="fa fa-pencil pull-right"></i></legend>
						
	<div class="form-bottom">
					<div class="form-group">
					USERNAME :<br>
			        <label class="sr-only" for="username">USERNAME:</label>
			        <input type="text" name="username" placeholder="Enter your Username..." class="form-username form-control" id="form-username" value = "<?php echo @$username;?>" />
			        </div>
		
		<div class="form-group">
					EMAIL :<br>
			        <label class="sr-only" for="email">EMAIL:</label>
			        <input type="text" name="email" placeholder="Enter your Email..." class="form-email form-control" id="form-email" value = "<?php echo @$email; ?>" />
	    </div>		
		<br>
		<div class="form-group">
					RECOVERY EMAIL:<br>
			        <label class="sr-only" for="recovery_email">Recovery EMAIL:</label>
			        <input type="text" name="recovery_email" placeholder="Enter your Another Recovery Email..." class="form-recoveryemail form-control" id="form-recoveryemail"  value = "<?php echo @$recovery_email; ?>" />
	    </div>	<br>
		<div class="form-group">
		PASSWORD :<br>
		<label class="sr-only" for="password">PASSWORD:</label>
		<input type="password" name="password" placeholder="Enter Password..." class="form-password form-control" id="form-password" value = "<?php echo @$password; ?>" />
		</div>
		<br>
		<div class="form-group">
		PASSWORD_AGAIN :<br>
		<label class="sr-only" for="password">PASSWORD_AGAIN</label>
		<input type="password" name="password_again" placeholder="Enter the Same Password..." class="form-passwordagain form-control" id="form-passwordagain" value = "<?php echo @$password_again; ?>" />
		<br>
		</div>
                    <div class="form-group">
                        <div class="col-lg-09 col-lg-offset-1">
                            <button type="reset" class="btn btn-warning">
                                Cancel</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary" value="Register" name="submit" >
                                Register</button>
                        </div>
                    </div>
                </fieldset>
            </form>
    </div>
		


         </div>
        </div>
        
       <!-- Javascript -->
	   <script> 
	function ValidateForm() 
	{
	var username = document.ContactForm.username; 
	var firstname = document.ContactForm.firstname; 
	var lastname = document.ContactForm.lastname; 
	var email = document.ContactForm.email; 
	var password = document.ContactForm.password; 
	var password_again = document.ContactForm.password_again; 
	var age = document.ContactForm.age;
		if (username.value == "")
			{
			window.alert("Please enter your username.");
			username.focus();
			return false;
			}
				if (email.value == "")
			{
			window.alert("Please enter a valid e-mail address.");
			email.focus();
			return false;
			}
		if (email.value.indexOf("@", 0) < 0)
			{
			window.alert("Please enter a valid e-mail address.");
			email.focus();
			return false;
			}
		if (email.value.indexOf(".", 0) < 0)
			{
			window.alert("Please enter a valid e-mail address.");
			email.focus();
			return false;
			}
		if (password.value == "")
			{
			window.alert("Please enter your password .");
			password.focus();
			return false;
			}
		var ps=password.value.length;
		if (ps<= 6)
			{
			window.alert("Please make a long password ");
			password.focus();
			return false;
			}
		if (password_again.value == "")
			{
			window.alert("Please enter your the above password again.");
			password_again.focus();
			return false;
			}
		if (password_again.value != password.value)
			{
			window.alert("Passwords and password again field does not match");
			password_again.focus();
			return false;
			}
		return true ;
	}
	</script>
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
