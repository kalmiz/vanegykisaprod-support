<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Paypal button</title>
</head>
<body>
<?php
$dir = dirname(__FILE__);
$button = empty($_REQUEST['btn']) ? 0 : (int)$_REQUEST['btn'];
$buttonFile = $dir . "/button-$button.html";
if ($button && is_file($buttonFile)) {
	readfile($buttonFile);
} else { ?>
	The requested button does not exists.
<?php
}
?>
</body>
</html>
