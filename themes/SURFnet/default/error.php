<?php
/**
 * Do not allow to frame simpleSAMLphp pages from another location.
 * This prevents clickjacking attacks in modern browsers.
 *
 * If you don't want any framing at all you can even change this to
 * 'DENY', or comment it out if you actually want to allow foreign
 * sites to put simpleSAMLphp in a frame. The latter is however
 * probably not a good security practice.
 */
header('X-Frame-Options: SAMEORIGIN');
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<meta name="HandheldFriendly" content="true" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="robots" content="noindex, nofollow" />
	<meta name="googlebot" content="noarchive, nofollow" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	
	<title>
		<?php
		if(array_key_exists('header', $this->data)) {
		        echo $this->data['header'];
		} else {
		        echo 'simpleSAMLphp';
		}
		?>
	</title>

	<link rel="stylesheet" type="text/css" href="<?php echo SimpleSAML_Module::getModuleURL('themeSURFnet/signin.css'); ?>" />
</head>
<body class="storing">
	<div class="container">	
		<div class="well col-md-offset-2 col-md-8 col-xs-12">
			<img class="img-responsive" alt="logo" src="<?php echo SimpleSAML_Module::getModuleURL('themeSURFnet/logo.png') ?>" style="margin: 0 auto;" />
			<div class="text-left" style="word-wrap: break-word;">
				<h1 class="text-center"><?php echo $this->t($this->data['dictTitle']); ?></h1>
				<br />
				<p><?php
					echo htmlspecialchars($this->t($this->data['dictDescr'], $this->data['parameters']));?></p>
				<p>
          <?php echo $this->t('report_trackid'); ?>
          <?php echo $this->data['error']['trackId']; ?>
				</p>		
			</div>	
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
