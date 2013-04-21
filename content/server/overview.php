<?php
  require_once("../../config.php");
  require_once("../../connector.php");
  $info = json_decode(query("serverinfo"), true);
?>
<div class="row" style="margin-left: 0px">
  <div class="dashboard_frame span4 server_frame">
  	<table class="table">
  	  <tbody>
  	  	<tr>
  	  	  <td>Operating System</td>
  	  	  <td><?php echo $info["os"];?></td>
  	  	</tr>
  	  	<tr>
  	  	  <td>Architecture</td>
  	  	  <td><?php echo $info["arch"];?></td>
  	  	</tr>
  	  	<tr>
  	  	  <td>JVM Name</td>
  	  	  <td><?php echo $info["jvmname"];?></td>
  	  	</tr>
  	  	<tr>
  	  	  <td>JVM Version</td>
  	  	  <td><?php echo $info["jvmversion"];?></td>
  	  	</tr>
  	  	<tr>
  	  	  <td>Java Version</td>
  	  	  <td><?php echo $info["javaversion"];?></td>
  	  	</tr>
  	  	<tr>
  	  	  <td>Available CPUs</td>
  	  	  <td><?php echo $info['cpucount'];?></td>
  	  	</tr>
  	  	<tr>
  	  	  <td>Available Memory</td>
  	  	  <td><?php echo $info['maxmem'];?></td>
  	  	</tr>
  	  	<tr>
  	  	  <td>Uptime</td>
  	  	  <td id="uptimeValue"><?php echo $info["uptime"];?></td>
  	  	</tr>
  	  </tbody>
  	</table>
  </div>
  <div class="dashboard_frame span4 bukkit_frame">
  	<table class="table">
  	  <tbody>
  	  	<tr>
  	  	  <td>Minecraftversion</td>
  	  	  <td><?php echo $info["mc"];?></td>
  	  	</tr>
  	  	<tr>
  	  	  <td>Bukkit API Version</td>
  	  	  <td><?php echo $info["api"];?></td>
  	  	</tr>
  	  	<tr>
  	  	  <td>Bukkitbuild</td>
  	  	  <td><?php echo $info["build"];?></td>
  	  	</tr>
  	  	<tr>
  	  	  <td>Installed Plugins:</td>
  	  	  <td><?php echo $info["plugins"];?></td>
  	  	</tr>
  	  </tbody>
  	</table>
  </div>
  <div class="dashboard_frame span4 load_frame">
    <!--RAM:
  	<div class="progress" style="width: 90%; display: inline-block;margin-bottom: 0px">
  	  <div data-toggle="tooltip" title="Used Memory: <?php echo $info["usedmem"];?>" class="bmTooltip bar bar-warning" style="width: <?php echo $info["usedmem"]/$info["maxmem"]*100;?>%"></div>
  	  <div data-toggle="tooltip" title="Allocated Memory: <?php echo $info["allocatedmem"];?>" class="bmTooltip bar bar-info" style="width: <?php echo $info["allocatedmem"]/$info["maxmem"]*100;?>%;"></div>
  	  <div data-toggle="tooltip" title="Unused Memory: <?php echo $info["maxmem"]-$info["allocatedmem"];?>" class="bmTooltip bar bar-success" style="width: <?php echo 100 - (($info["usedmem"]/$info["maxmem"]*100) + ($info["allocatedmem"]/$info["maxmem"]*100));?>%;"></div>
  	</div>-->
    <div id="cpu-gauge" style="width: 230px; height: 270px; display: inline-block;"></div>
    <div id="ram-gauge" style="width: 230px; height: 270px; display: inline-block;"></div>
  </div>
</div>
<script>
$(function () {
    $('#ram-gauge').highcharts({
	    chart: {
	        type: 'gauge',
	        plotBackgroundColor: null,
	        plotBackgroundImage: null,
	        plotBorderWidth: 0,
	        plotShadow: false
	    },
	    title: {
	        text: 'Used Memory'
	    },
	    pane: {
	        startAngle: -150,
	        endAngle: 150,
	        background: [{
	            backgroundColor: {
	                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
	                stops: [
	                    [0, '#FFF'],
	                    [1, '#333']
	                ]
	            },
	            borderWidth: 0,
	            outerRadius: '109%'
	        }, {
	            backgroundColor: {
	                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
	                stops: [
	                    [0, '#333'],
	                    [1, '#FFF']
	                ]
	            },
	            borderWidth: 1,
	            outerRadius: '107%'
	        }, {
	            // default background
	        }, {
	            backgroundColor: '#DDD',
	            borderWidth: 0,
	            outerRadius: '105%',
	            innerRadius: '103%'
	        }]
	    },
	       
	    // the value axis
	    yAxis: {
	        min: 0,
	        max: <?php echo $info['maxmem'];?>,
	        
	        minorTickInterval: 'auto',
	        minorTickWidth: 1,
	        minorTickLength: 10,
	        minorTickPosition: 'inside',
	        minorTickColor: '#666',
	
	        tickPixelInterval: 30,
	        tickWidth: 2,
	        tickPosition: 'inside',
	        tickLength: 10,
	        tickColor: '#666',
	        labels: {
	            step: 2,
	            rotation: 'auto'
	        },
	        title: {
	            text: 'MB'
	        },
	        plotBands: [{
	        	id: 'allocatedmem',
	            from: 0,
	            to: <?php echo $info['allocatedmem'];?>,
	            color: '#DDDF0D' // green
	        }, {
	        	id: 'unusedmem',
	            from: <?php echo $info['allocatedmem'];?>,
	            to: <?php echo $info['maxmem'];?>,
	            color: '#55BF3B' // yellow
	        }]        
	    },
	
	    series: [{
	        name: 'Used Memory',
	        data: [<?php echo $info['usedmem'];?>],
	        tooltip: {
	            valueSuffix: ' MB'
	        }
	    }]
	
	}, 
	// Add some life
	function (chart) {ramChart = chart;});
});
$(function () {
	
    $('#cpu-gauge').highcharts({
	
	    chart: {
	        type: 'gauge',
	        plotBackgroundColor: null,
	        plotBackgroundImage: null,
	        plotBorderWidth: 0,
	        plotShadow: false
	    },
	    
	    title: {
	        text: 'CPU Usage'
	    },
	    
	    pane: {
	        startAngle: -150,
	        endAngle: 150,
	        background: [{
	            backgroundColor: {
	                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
	                stops: [
	                    [0, '#FFF'],
	                    [1, '#333']
	                ]
	            },
	            borderWidth: 0,
	            outerRadius: '109%'
	        }, {
	            backgroundColor: {
	                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
	                stops: [
	                    [0, '#333'],
	                    [1, '#FFF']
	                ]
	            },
	            borderWidth: 1,
	            outerRadius: '107%'
	        }, {
	            // default background
	        }, {
	            backgroundColor: '#DDD',
	            borderWidth: 0,
	            outerRadius: '105%',
	            innerRadius: '103%'
	        }]
	    },
	       
	    // the value axis
	    yAxis: {
	        min: 0,
	        max: 100,
	        
	        minorTickInterval: 'auto',
	        minorTickWidth: 1,
	        minorTickLength: 10,
	        minorTickPosition: 'inside',
	        minorTickColor: '#666',
	
	        tickPixelInterval: 30,
	        tickWidth: 2,
	        tickPosition: 'inside',
	        tickLength: 10,
	        tickColor: '#666',
	        labels: {
	            step: 2,
	            rotation: 'auto'
	        },
	        plotBands: [{
	            from: 0,
	            to: 50,
	            color: '#55BF3B' // green
	        }, {
	            from: 50,
	            to: 80,
	            color: '#DDDF0D' // yellow
	        }, {
	            from: 80,
	            to: 100,
	            color: '#DF5353' // red
	        }]        
	    },
	
	    series: [{
	        name: 'CPU Usage',
	        data: [<?php echo $info['cpuload'];?>],
	        tooltip: {
	            valueSuffix: ' %'
	        }
	    }]
	
	}, 
	// Add some life
	function (chart) {cpuChart = chart;});
});
</script>