<?php
  $plugins = json_decode(query("pluginlist"));
  $pluginUpdates = json_decode($plugins[0], true);
  $pluginUpdates = $pluginUpdates["updates"];
  $players = json_decode(query("playerlist"));
  $worlds = json_decode(query("worldlist"));
?>
<html lang="en"><head>
    <meta charset="utf-8">
    <title><?php echo SERVER_NAME; ?> - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
  	<link rel="stylesheet" href="css/style.css"/>
  	<!--<link rel="stylesheet" href="css/font-awesome.min.css"/>-->
  	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
  	<script src="js/jquery-ui-1.9.2.min.js" type="text/javascript"></script>
  	<script src="js/bootstrap.min.js" type="text/javascript"></script>
  	<script src="js/highcharts.js" type="text/javascript"></script>
  	<script src="js/highcharts-more.js" type="text/javascript"></script>
  	<script src="js/main.js" type="text/javascript"></script>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#"><?php echo SERVER_NAME;?></a>
          <p class="navbar-text pull-right">
            Logged in as <a href="#" class="navbar-link">admin</a>. <a href="#" id="logoutBtn" class="navbar-link">Logout</a>
          </p>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Dashboard</a></li>
              <li class="dropdown">
              	<a class="dropdown-toggle" data-toggle="dropdown" href="#server">Server <span class="badge badge-important">!</span> <b class="caret"></b></a>
              	<ul class="dropdown-menu">
              	  <li><a href="#updates">Install Update</a></li>
              	  <li class="divider"></li>
              	  <li class="disabled"><a href="#start">Start</a></li>
              	  <li><a href="#stop" onclick="$.post('connector.php', {'action':'stop'});">Stop</a></li>
              	  <li><a href="#restart">Restart</a></li>
                </ul>
              </li>
              <li class="dropdown">
              	<a class="dropdown-toggle" data-toggle="dropdown" href="#worlds">Worlds <b class="caret"></b></a>
              	<ul class="dropdown-menu">
                  <?php for ($i = 0; $i < count($worlds); $i++) {
              	    $world = json_decode($worlds[$i], true)?>
              	    <li class="dropdown-submenu">
              	      <a href="#<?php echo $world["name"];?>"><?php echo $world["name"];?></a>
              	      <ul class="dropdown-menu">
               	  	    <li><a href="#<?php echo $world["name"];?>Overview">Overview</a></li>
             	  	    <li><a href="#<?php echo $world["name"];?>map">Livemap</a></li>
              	  	    <li class="divider"></li>
              	  	    <li><a href="#<?php echo $world["name"];?>settings">Settings</a></li>
              	  	  </ul>
              	    </li>
                  <?php }?>
              	</ul>
              </li>
              <li class="dropdown" id="playerDropdown">
              	<a class="dropdown-toggle <?php if (count($players) == 0) echo "disabled";?>" data-toggle="dropdown" href="#player">Player <span class="<?php if (count($players) == 0) echo "hidden";?> badge badge-success"><?php echo count($players);?></span><b class="caret"></b></a>
              	<ul class="dropdown-menu">
              	  <?php for ($i = 0; $i < count($players); $i++) {$player = json_decode($players[$i], true);?><li><a href="#<?php echo $player["name"];?>"><?php echo $player["name"];?></a></li><?php }?>
              	</ul>
              </li>
              <li class="dropdown">
              	<a class="dropdown-toggle" data-toggle="dropdown" href="#plugins">Plugins <?php if ($pluginUpdates != 0) {?><span class="badge badge-important"><?php echo $pluginUpdates;?></span> <?php }?><b class="caret"></b></a>
              	<ul class="dropdown-menu">
              	  <?php if ($pluginUpdates != 0) {?>
              	    <li><a href="#updates">Install Updates</a></li>
              	    <li class="divider"></li>
              	  <?php }?>
              	  <?php for ($i = 1; $i < count($plugins); $i++) {?><li><a href="#plugin"><?php echo json_decode($plugins[$i], true)["name"];?></a></li><?php }?>
              	</ul>
              </li>
              <li><a href="#inbox">Inbox</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
          <div class="well sidebar-nav hidden-phone" style="margin-left: 20px; width: 225px;" data-spy="affix">
            <ul class="nav nav-list" id="sidebar">
              <li class="nav-header" style="cursor: pointer;" data-toggle="collapse" data-target=".navGeneral">General</li>
              <li class="active navGeneral collapse in" id="navGeneralDashboard"><a onclick="loadContent('general/dashboard', this);" href="#"><span class="icon-home"></span> Dashboard</a></li>
              <li class="navGeneral collapse in" id="navGeneralStatistics"><a href="#"><span class="icon-tasks"></span> Statistics</a></li>
              <li class="navGeneral collapse in" id="navGeneralFilebrowser"><a href="#"><span class="icon-folder-open"></span> Filebrowser</a></li>
              <li class="navGeneral collapse in" id="navGeneralConsole"><a href="#"><span class="icon-list-alt"></span> Console</a></li>
              <li class="navGeneral collapse in" id="navGeneralSettings"><a href="#"><span class="icon-cog"></span> Settings</a></li>
              
              <li class="nav-header" style="cursor: pointer;" data-toggle="collapse" data-target=".navServer">Server</li>
              <li class="navServer collapse in" id="navServerOverview"><a onclick="loadContent('server/overview', this)" href="#"><span class="icon-info-sign"></span> Overview</a></li>
              <li class="navServer collapse in" id="navServerUpdates"><a onclick="loadContent('server/versions', this)" href="#"><span class="icon-refresh"></span> Updates <span class="badge badge-important">!</span></a></li>
              <li class="navServer collapse in" id="navServerBackups"><a onclick="loadContent('server/backups', this)" href="#"><span class="icon-download-alt"></span> Backups</a></li>
              <li class="navServer collapse in" id="navServerTasks"><a onclick="loadContent('server/tasks', this)" href="#"><span class="icon-calendar"></span> Tasks</a></li>
              <li class="navServer collapse in" id="navServerSettings"><a onclick="loadContent('server/settings', this)" href="#"><span class="icon-cog"></span> Settings</a></li>
              
              <li class="nav-header" style="cursor: pointer;" data-toggle="collapse" data-target=".navWorlds">Worlds</li>
              <?php for ($i = 0; $i < count($worlds); $i++) {
              	$world = json_decode($worlds[$i], true)?>
              <li class="navWorlds collapse in"><a href="#"><span class="icon-globe"></span> <?php echo $world['name'];?></a></li>
              <?php }?>
              
              <li class="nav-header" style="cursor: pointer;" data-toggle="collapse" data-target=".navPlayer">Player</li>
              <li class="navPlayer collapse in"><a onclick="loadContent('player/players', this);" href="#"><span class="icon-list"></span> Players</a></li>
              <li class="navPlayer collapse in"><a onclick="loadContent('player/permissions', this);" href="#"><span class="icon-check"></span> Permissions</a></li>
              
              <li class="nav-header" style="cursor: pointer;" data-toggle="collapse" data-target=".navPlugins">Plugins</li>
              <li class="navPlugins collapse in" id="navPluginsList"><a onclick="loadContent('plugins/plugins', this);" href="#"><span class="icon-list"></span> Pluginlist</a></li>
              <?php if ($pluginUpdates != 0) {?><li class="navPlugins collapse in" id="navPluginsUpdates"><a onclick="loadContent('plugins/updates', this);" href="#"><span class="icon-refresh"></span> Updates <span class="badge badge-important"><?php echo $pluginUpdates;?></span></a></li><?php }?>
              <li class="navPlugins collapse in"><a href="#"><span class="icon-file"></span> Essentials</a></li>
              <li class="navPlugins collapse in"><a href="#"><span class="icon-file"></span> WorldGuard</a></li>
            </ul>
          </div><!--/.well -->
    <div style="margin-left: 250px;" class="container-fluid">
      <div class="row-fluid">
        <div class="span13" id="content">
          <div id="craftbukkit_update" class="alert alert-danger alert-block fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4 class="alert-heading">Update available!</h4>
            <p>A new Recommend Build (1.4.7-R1.0) is available.</p>
            <div class="btn-group"><button type="button" class="btn btn-danger" onclick="loadContent('server/versions', '#navServerUpdates');">Update now</button> <button type="button" class="btn" data-dismiss="alert" onclick="$('#craftbukkit_update').alert('close');">Dismiss</button></div>
          </div>
          <?php if ($pluginUpdates != 0) {?>
            <div id="plugin_update" class="alert alert-block fade in">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <h4 class="alert-heading">Updates available!</h4>
              <p>For <?php echo $pluginUpdates;?> of your Plugins are Updates available</p>
              <div class="btn-group"><button type="button" class="btn btn-warning" onclick="loadContent('plugins/updates', '#navPluginsUpdates');">Update now</button> <button type="button" class="btn" data-dismiss="alert" onclick="$('#plugin_update').alert('close');">Dismiss</button></div>
            </div>
          <?php }?>
          <!-- content loading -->
          <div id="contentContainer">
          	
            <?php include_once('content/general/dashboard.php');?>          	
          </div>
        </div>
      </div><!--/row-->
      <hr>
    </div><!--/.fluid-container-->
  </body>
</html>