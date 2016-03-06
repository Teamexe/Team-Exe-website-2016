<!DOCTYPE html>
<html>
<head>
	<title>Google forms</title>
	<link rel="stylesheet" href="main.css" type="text/css" media="screen" />
</head>
<body>
<?php

include("header.php");

?>
<div id="display">
<h1>Redirecting you to a specific page</h1>
<?php
//this will redirect the browser to a specific page according to his choice
$redirect="Location: https://docs.google.com/forms/d/1njeCNp2bbYRDMFdgO_B3SkFTngBYcbcfWzmBeq0kCD0/viewform?c=0&w=1";
echo header($redirect);
?>
</div>
<?php
include("footer.php");
?>
</body>
</html>