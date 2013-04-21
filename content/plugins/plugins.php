<?php
  require_once('../../config.php');
  require_once('../../connector.php');
  $plugins = json_decode(query('pluginlist'));
  //echo json_encode($plugins);
?>
<!--<div class="accordion" id="pluginFilter">
  <div class="accordion-group">
  	<div class="accordion-heading">
  	  <a class="accordion-toggle" style="text-decoration: none;" data-toggle="collapse" data-parent="#pluginFilter" href="#filter">Filter</a>
  	</div>
  	<div class="accordion-body collapse out" style="border-top: 1px solid #e5e5e5;" id="filter">
  	  <div style="padding: 9px 15px;">
  	  	<div class="btn-group">
  	  	<button class="btn dropdown-toggle" data-toggle="dropdown">
          Action
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">bla</a></li>
        </ul>
        </div>
  	  </div>
  	</div>
  </div>
</div>-->
<div class="accordion" id="pluginList">
  <?php
  for ($i = 1; $i < count($plugins); $i++) {
  	$plugin = json_decode($plugins[$i], true);
	$pluginName = $plugin["name"];
	$authors = "";
	for ($i2 = 0; $i2 < count($plugin["authors"]); $i2++) {
	  if ($authors != "") $authors .= ", ";
	  $authors .= $plugin["authors"][$i2];
	}
	$softdepends = "";
	for ($i2 = 0; $i2 < count($plugin["softdepend"]); $i2++) {
	  if ($softdepends != "") $softdepends .= ", ";
	  $softdepends .= $plugin["softdepend"][$i2];
	}
	$depends = "";
	for ($i2 = 0; $i2 < count($plugin["depend"]); $i2++) {
	  if ($depends != "") $depends .= ", ";
	  $depends .= $plugin["depend"][$i2];
	}
  	?>
    <div class="accordion-group">
      <div class="accordion-heading">
  	    <a class="accordion-toggle" style="text-decoration: none;" data-toggle="collapse" data-parent="#pluginList" href="#plugin<?php echo $pluginName;?>">
  	    <?php if ($plugin["enabled"])  {?>
  	    	<span class="label label-success">Enabled</span>
  	    <?php }else {?>
  	    	<span class="label label-important">Disabled</span>
  	    <?php }?>
  	    <?php echo $pluginName;?> v.<?php echo $plugin["version"];?>
  	    <?php if ($plugin["update"]) {?>
  	    	<span class="label label-warning">Update Available</span>
  	    <?php }?>
  	  	</a>
  	  </div>
  	  <div class="accordion-body collapse <?php if ($i == 1) echo "in"; else echo "out";?>" id="plugin<?php echo $pluginName;?>">
  	    <div class="accordion-inner tabbable tabs-left">
  	      <ul class="nav nav-tabs">
  	  	    <li class="active"><a href="#<?php echo $pluginName;?>Overview" data-toggle="tab">Overview</a></li>
  	  	    <li><a href="#<?php echo $pluginName;?>Control" data-toggle="tab">Control</a></li>
  	  	    <li><a href="#<?php echo $pluginName;?>Commands" data-toggle="tab">Commands</a></li>
  	  	    <li><a href="#<?php echo $pluginName;?>Permissions" data-toggle="tab">Permissions</a></li>
  	  	    <li><a href="#<?php echo $pluginName?>Versions" data-toggle="tab">Versions <?php if ($plugin["update"]) {?><span class="badge badge-important">1</span><?php }?></a></li>
  	      </ul>  
  	  	  <div class="tab-content">
  	  	    <div class="tab-pane active" id="<?php echo $pluginName;?>Overview">
  	  	  	  <table class="table table-hover">
  	  	  	    <?php if (isset($plugin["authors"]) && $authors != "") {?>
  	  	  	    <tr>
  	  	  		  <td><b>Author</b></td>
  	  	  		  <td><?php echo $authors;?></td>
  	  	  	    </tr>
  	  	  	    <?php }?>
  	  	  	    <?php if (isset($plugin["desc"])) {?>
  	  	  	    <tr>
  	  	  		  <td><b>Description</b></td>
  	  	  		  <td><?php echo $plugin["desc"];?></td>
  	  	  	    </tr>
  	  	  	    <?php }?>
  	  	  	    <?php if (isset($plugin["website"])) {?>
  	  	  	    <tr>
  	  	  		  <td><b>Website</b></td>
  	  	  		  <td><a href="<?php echo $plugin["website"];?>"><?php echo $plugin["website"];?></a></td>
  	  	  	    </tr>
  	  	  	    <?php }?>
  	  	  	    <?php if (isset($plugin["depend"]) && $depends != "") {?>
  	  	  	    <tr>
  	  	  		  <td><b>Dependencies</b></td>
  	  	  		  <td><?php echo $depends;?></td>
  	  	  	    </tr>
  	  	  	    <?php }?>
  	  	  	    <?php if (isset($plugin["softdepend"]) && $softdepends != "") {?>
  	  	  	    <tr>
  	  	  		  <td><b>Soft Dependencies</b></td>
  	  	  		  <td><?php echo $softdepends;?></td>
  	  	  	    </tr>
  	  	  	    <?php }?>
  	  	      </table>
  	  	    </div>
  	  	    <div class="tab-pane" id="<?php echo $pluginName;?>Control">
  	  	  	  <div class="btn-group">
  	  	  	  	<?php if ($plugin["enabled"]) {?><button class="btn btn-danger disable-plugin-btn" data-plugin="<?php echo $pluginName;?>">Disable</button>
  	  	  	    <?php }else {?> <button class="btn btn-success enable-plugin-btn" data-plugin="<?php echo $pluginName;?>">Enable</button><?php }?>
  	  	  	  	<button class="btn btn-primary restart-plugin-btn" data-plugin="<?php echo $pluginName;?>">Restart</button>
  	  	  	  </div>
  	  	    </div>
  	  	    <div class="tab-pane" id="<?php echo $pluginName;?>Commands">
  	  	  	  <table class="table table-hover table-striped">
  	  	  	    <thead>
  	  	  	      <tr>
  	  	  	  	    <th>Command</th>
  	  	  	  	    <th>Syntax</th>
  	  	  	  	    <th>Permission</th>
  	  	  	  	    <th>Description</th>
  	  	  	  	  </tr>
  	  	  	    </thead>
  	  	  	    <tbody>
  	  	  	      <tr>
  	  	  	  	    <td>Help</td>
  	  	  	  	    <td><code>/help [searchterm] [2;3;4;5; etc...]</code></td>
  	  	  	  	    <td>essentials.help</td>
  	  	  	  	    <td>This displays the help commands for essentials</td>
  	  	  	      </tr>	  	  	  
  	  	  	    </tbody>
  	  	  	  </table>
  	  	    </div>
  	  	    <div class="tab-pane" id="<?php echo $pluginName;?>Permissions">
  	  	      <table class="table table-striped table-hover">
  	  	      	<thead>
  	  	      	  <tr>
  	  	      	  	<th>Permission Node</th>
  	  	      	  	<th>Description</th>
  	  	      	  </tr>
  	  	      	</thead>
  	  	      	<tbody>
  	  	          <?php
  	  	  	      for ($i2 = 0; $i2 < count($plugin["permissions"]); $i2++) {
	  			  $permission = $plugin["permissions"][$i2];?>
	  			  <tr>
	  			  	<td><?php echo $permission[0];?></td>
	  			  	<td><?php echo $permission[1];?></td>
	  			  </tr>
	  			  <?php }?>
	  			</tbody>
			  </table>
  	  	    </div>
  	  	    <div class="tab-pane" id="<?php echo $pluginName;?>Versions">
  	  	      <table class="table table-striped table-hover">
  	  	      	<thead>
  	  	      	  <tr>
  	  	      	  	<th>Name</th>
  	  	      	  	<th>Minecraft Version</th>
  	  	      	  	<th>Date</th>
  	  	      	  	<th>Installed</th>
  	  	      	  	<th></th>
  	  	      	  </tr>
  	  	      	</thead>
  	  	      	<tbody>
  	  	      	  <tr>
  	  	      	  	<td>Bukkitmanager Beta 1.2</td>
  	  	      	  	<td>1.5.1, 1.5.0</td>
  	  	      	  	<td>22.03.13</td>
  	  	      	  	<td>Yes</td>
  	  	      	  	<td><button class="btn">Install</button></td>
  	  	      	  </tr>
  	  	      	</tbody>
  	  	      </table>
  	  	    </div>
		  </div> 	
  	    </div>
  	  </div>
    </div>
  <?php } ?>
</div>