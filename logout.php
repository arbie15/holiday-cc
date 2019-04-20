<?php

require 'connect.php';

require 'core.php';


session_destroy();

header('Location: login.php');

?>