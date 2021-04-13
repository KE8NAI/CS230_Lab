<?php
require 'includes/header.php'; 
session_start();
session_unset();
session_destroy();
header("Location ../logout.php");
require 'login.php'; 
exit();