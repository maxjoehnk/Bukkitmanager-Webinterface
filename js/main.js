var page, ramChart, cpuChart;
$(function() {
  $('.bmTooltip').tooltip();
  $(document).on('click', '.enable-plugin-btn', function() {$.post('connector.php', {'action':'enableplugin','plugin':$(this).attr('data-plugin')}, function(data) {console.log(data);});});
  $(document).on('click', '.disable-plugin-btn', function() {$.post('connector.php', {'action':'disableplugin','plugin':$(this).attr('data-plugin')}, function(data) {console.log(data);});});
  $(document).on('click', '.restart-plugin-btn', function() {$.post('connector.php', {'action':'restartplugin','plugin':$(this).attr('data-plugin')}, function(data) {console.log(data);});});
  $('#logoutBtn').click(function() {$.post('index.php', {'logout':''});location.reload();});
  setInterval(function() {
  	$.post('connector.php', {'action':'playerlist'}, function(data) {
  	  var jsonData = jQuery.parseJSON(data);
  	  $('#playerDropdown').children('a').children('span').html(jsonData.length);
  	  if (jsonData.length == 0) {
  	  	$('#playerDropdown').children('a').children('span').addClass('hidden');
  	  	$('#playerDropdown').children('a').children('b').addClass('hidden');
  	  	$('#playerDropdown').children('a').addClass('disabled');
  	  }else {
  	  	$('#playerDropdown').children('a').children('span').removeClass('hidden');
  	  	$('#playerDropdown').children('a').children('b').removeClass('hidden');
  	  	$('#playerDropdown').children('a').removeClass('disabled');
  	  }
  	  $('#playerDropdown').children('ul').html("");
  	  for (var i = 0; i < jsonData.length; i++) {
  	  	var parsedJson = jQuery.parseJSON(jsonData[i]);
  	    $('#playerDropdown').children('ul').append('<li><a href="#' + parsedJson.name + '">' + parsedJson.name + '</a></li>')
  	  }
  	  if (page == 'server/overview' && ramChart != undefined && cpuChart != undefined) {
  	  	var ramPoint = ramChart.series[0].points[0],
			cpuPoint = cpuChart.series[0].points[0],
			jsonData;      
		$.post('connector.php', {'action':'serverinfo'}, function(data) {
			jsonData = jQuery.parseJSON(data);
			ramPoint.update(jsonData.usedmem);
			cpuPoint.update(jsonData.cpuload);
			ramChart.yAxis[0].removePlotBand('allocatedmem');
			ramChart.yAxis[0].addPlotBand({'id':'allocatedmem', 'from':0, 'to':jsonData.allocatedmem, 'color':'#DDDF0D'});
			ramChart.yAxis[0].removePlotBand('unusedmem');
			ramChart.yAxis[0].addPlotBand({'id':'unusedmem', 'from':jsonData.allocatedmem, 'to':jsonData.maxmem, 'color':'#55BF3B'});
			$('#uptimeValue').html(jsonData.uptime);
		});
  	  }
  	})
  }, 1000);
});

function loadContent(title) {
  page = title;
  $('#contentContainer').load('content/' + title + '.php');
}

function loadContent(title, element) {
  page = title;
  $('#contentContainer').load('content/' + title + '.php');
  $('#sidebar').children('.active').removeClass('active');
  $(element).parent().addClass('active');
}
