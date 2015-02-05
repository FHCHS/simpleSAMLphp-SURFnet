<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title><?php echo $this->t('{login:user_pass_header}'); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Custom styles for this template -->
  <link href="<?php echo SimpleSAML_Module::getModuleURL('themeSURFnet/signin.css'); ?>" rel="stylesheet">
</head>
<body class="login">
	<div id="login" class="container">
		<div class="jumbotron">
			<img class="img-responsive" alt="logo" src="<?php echo SimpleSAML_Module::getModuleURL('themeSURFnet/logo.png') ?>" style="margin: 0 auto;" />
			<form name="loginform" id="loginform" action="?" method="post" class="form-signin">
				<h3 class="form-signin-heading text-center"><?php echo $this->t('{login:user_pass_header}'); ?></h3>

				<?php if (isset($this->data['error'])) { ?>
				<div id="error" class="alert alert-danger" role="alert">
					<i class="glyphicon glyphicon-exclamation-sign"></i>
					<strong><?php echo $this->t('{error:error_header}'); ?></strong>
					<?php echo $this->t($this->data['error']); ?>
				</div>
				<?php } ?>		
						
				<?php	if ($this->data['errorcode'] !== NULL) { ?>
				<div id="error" class="alert alert-danger" role="alert">
					<i class="glyphicon glyphicon-exclamation-sign"></i>
					<strong><?php echo $this->t('{errors:title_' . $this->data['errorcode'] . '}'); ?></strong><br />
					<?php echo $this->t('{errors:descr_' . $this->data['errorcode'] . '}'); ?>
				</div>
				<?php } ?>

				<label for="username" class="sr-only"><?php echo $this->t('{login:username}'); ?></label>
				<input type="text" name="username" id="username" class="input form-control" placeholder="Username" autofocus required tabindex="1" />
	
				<label for="user_pass" class="sr-only"><?php echo $this->t('{login:password}'); ?></label>
				<input type="password" name="password" id="user_pass" class="input form-control" placeholder="Password" required tabindex="2" />

				<button class="btn btn-lg btn-primary btn-block" type="submit" name="wp-submit" id="wp-submit" ><?php echo $this->t('{login:login_button}'); ?></button>

				<?php	
					foreach ($this->data['stateparams'] as $name => $value) {
						echo('<input type="hidden" name="' . htmlspecialchars($name) . '" value="' . htmlspecialchars($value) . '" />');
					} 
				?>
			</form>

			<form action="https://my.adu.edu/login-help" class="form-signin" id="need-help">
    		<button class="btn btn-lg btn-default btn-block" type="submit">Need Help?</button>
			</form>
		</div>
	</div>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"> -->

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body>
</html>