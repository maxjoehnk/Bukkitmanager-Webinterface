<?php 
if (isset($_POST['installer'])) {
  if ($_POST['installer'] == 'config') file_put_contents('config.php', str_replace('&lt;', '<', str_replace('&gt', '>', str_replace('&nbsp;', ' ', $_POST['content']))));
  if ($_POST['installer'] == 'finish') {
  	unlink('setupDb.php');
	unlink('installer-0.php');
	unlink('installer-1.php');
	unlink('installer-2.php');
	unlink('installer-3.php');
	unlink('installer-4.php');
  }
  exit;
}
include_once('util.php');?>
<html>
  <head>
    <title>Install Bukkitmanager Webinterface</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/installer.css" rel="stylesheet">
    <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui-1.9.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/installer.js" type="text/javascript"></script>
    <script>var host = '<?php echo get_host(); ?>';</script>
  </head>
  <body>
    <?php require_once('installer-0.php');?>
    <?php require_once('installer-1.php');?>
    <?php require_once('installer-2.php');?>
    <?php require_once('installer-3.php');?>
    <?php require_once('installer-4.php');?>
  </body>
</html>
