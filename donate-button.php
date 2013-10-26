<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Paypal button</title>
	<style>
		body { font-family: 'Helvetica Neue', Arial, Helvetica, sans-serif, "Helvetica Neue", HelveticaNeue, Arial, sans-serif; }
	</style>
</head>
<body>
<?php
$enabled = false;
$dir = dirname(__FILE__);
$button = empty($_REQUEST['btn']) ? 0 : (int)$_REQUEST['btn'];
$buttonFile = $dir . "/button-$button.html";
if (!$enabled) { ?>
	Köszönöm, össze gyűlt a pénz.
<?php } elseif ($button && is_file($buttonFile)) {
	readfile($buttonFile);
} else { ?>
	The requested button does not exists.
<?php
}
?>
</body>
</html>
