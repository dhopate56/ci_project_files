<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<title></title>
</head>
<body>
<div class="container">this is crud</div>
		<div class="container">welcome</div>

<div class="container">
	<div class="row">
		<div class="col-md-6 bg-primary">
			<?php echo form_open('Samplecontroller/myf',['method'=>'post','id'=>'my-form', 'class'=>'my-form', 'enctype'=>'multipart-formdata']);
?>
<input type="text" name="uname" class="form-control" placeholder="username">
			<input type="text" name="uemail" class="form-control" placeholder="email">
			<input type="password" name="upass" class="form-control" placeholder="password">
<?php echo form_submit(['class'=>'form-control btn btn-success','id'=>'submitcontainer' ,'value'=>'login']);
?>
<?php echo form_close();
?>
			</div>
	</div>

	</div>

</div>
</body>
</html>