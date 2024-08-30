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
<?php echo form_open('Newcontroller/index',['method'=>'post','enctype'=>'multipart-formdata']);
?>
<input type="email" name="uemail" placeholder="email">
<input type="text" name="uname" placeholder="name">
<input type="password" name="upass" placeholder="password">

<?php echo form_submit(['value'=>'login','class'=>'form-control btn btn-success','id'=>'submitcontainer']);?>
<?php echo form_close();
?>
</body>
</html>
