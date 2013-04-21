<?php
  require_once('../../config.php');
  require_once('../../connector.php');
  $players = json_decode(query('playerlist'));
?>
<div class="accordion" id="playerList">
  <?php
  for ($i = 0; $i < count($players); $i++) {
  	$player = json_decode($players[$i], true);
	$playerName = $player["name"];
  	?>
    <div class="accordion-group">
      <div class="accordion-heading">
  	    <a class="accordion-toggle" style="text-decoration: none;" data-toggle="collapse" data-parent="#playerList" href="#player<?php echo $playerName;?>"><?php echo $playerName;?></a>
  	  </div>
  	  <div class="accordion-body collapse <?php if ($i == 0) echo "in"; else echo "out";?>" id="player<?php echo $playerName;?>">
  	    <div class="accordion-inner tabbable tabs-left">
  	      <ul class="nav nav-tabs">
  	  	    <li class="active"><a href="#<?php echo $playerName;?>Overview" data-toggle="tab">Overview</a></li>
  	  	    <li><a href="#<?php echo $playerName;?>Control" data-toggle="tab">Control</a></li>
  	  	    <li><a href="#<?php echo $playerName;?>Permissions" data-toggle="tab">Permissions</a></li>
  	      </ul>  
  	  	  <div class="tab-content">
  	  	    <div class="tab-pane active" id="<?php echo $playerName;?>Overview">
  	  	    </div>
  	  	    <div class="tab-pane" id="<?php echo $playerName;?>Control">
  	  	    </div>
  	  	    <div class="tab-pane" id="<?php echo $playerName;?>Permissions">
  	  	      <table class="table table-striped table-hover">
  	  	      	<thead>
  	  	      	  <tr>
  	  	      	  	<th>Permission Node</th>
  	  	      	  	<th>Description</th>
  	  	      	  </tr>
  	  	      	</thead>
  	  	      	<tbody>
  	  	          <?php
  	  	  	      for ($i2 = 0; $i2 < count($player["permissions"]); $i2++) {
	  			  $permission = $player["permissions"][$i2];?>
	  			  <tr>
	  			  	<td><?php echo $permission[0];?></td>
	  			  	<td><?php echo $permission[1];?></td>
	  			  </tr>
	  			  <?php }?>
	  			</tbody>
			  </table>
  	  	    </div>
		  </div> 	
  	    </div>
  	  </div>
    </div>
  <?php } ?>
</div>