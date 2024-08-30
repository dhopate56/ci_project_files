<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php echo form_open('Controller/tasking',['method'=>'post']);
?>
<input type="email" name="uemail" placeholder="email">
<input type="name" name="uname"  placeholder="name">
<input type="password" name="upass">
<?php echo form_submit(['value'=>'login'])
?>
<?php echo form_close();
?>
</body>
</html>