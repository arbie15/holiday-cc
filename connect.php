<?php


$mysql_host = 'cc-mini1-mysqldbserver.mysql.database.azure.com';

$mysql_user = 'mysqldbuser@cc-mini1-mysqldbserver';

$mysql_pass = 'Pooja@1502';

global $conn;

$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_pass);

$mysql_db = 'hotel';

if(!$conn || !mysqli_select_db($conn,$mysql_db))

{

die(mysqli_connect_error());	//Kill the page

}

mysqli_set_charset($conn,'utf-8');

?>
