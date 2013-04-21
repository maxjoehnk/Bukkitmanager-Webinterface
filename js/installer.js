var pageId = 0, serverConnection = true;
$(function() {
  loadFromLocalStorage();
  updateLastPage();
  var startId = window.location.hash;
  if (startId == null || !startId || startId == '') startId = '#step0';
  $(startId).css('display', 'block');
  startId = startId.split('step');
  pageId = parseInt(startId[1]);
  $('.infoTooltip').tooltip({placement: 'right'});
  $('a').click(function() {
  	if ($(this).attr('href') == '#testDb') testDbConnectionFallback();
  	if ($(this).attr('href') == '#testServer') testServerConnection();
  	if ($(this).attr('href') == '#importDb') importDatabase();
  	if ($(this).attr('href').indexOf('step') === -1) return;
  	updateLastPage();
  	var newId = $(this).attr('href');
  	newId = newId.split('step');
  	newId = parseInt(newId[1]);
  	if (newId > pageId) {
      $('#step' + pageId).hide('slide', {direction: 'left'}, function() {
     	$('.breadcrumb' + newId).css('display', 'inline-block');
  	    $('#step' + newId).show('slide',{direction: 'right'});
      });
  	}else {
      $('#step' + pageId).hide('slide', {direction: 'right'}, function() {
  	  	$('.breadcrumb' + newId).css('display', 'inline-block');
        $('#step' + newId).show('slide',{direction: 'left'});
      });
  	}
  	pageId = newId;
  });
});

function loadFromLocalStorage() {
  $('#servername').val(localStorage.servername);
  $('#serverip').val(localStorage.serverip);
  $('#serverport').val(localStorage.serverport);
  $('#bmport').val(localStorage.bmport);
  $('#dbhost').val(localStorage.dbhost);
  if ($('#dbhost').val() == '') $('#dbhost').val('localhost'); 	
  $('#dbusername').val(localStorage.dbusername);
  $('#dbname').val(localStorage.dbname);
  $('#adminusername').val(localStorage.adminusername);
  $('#adminemail').val(localStorage.adminemail);
  $('#minecraftusername').val(localStorage.minecraftusername);
}

function testDbConnection() {
  $('#testDbStatus').html('Connecting...');
  $('#testDbProgress').show();
  $('#testDbCloseBtn').html('Cancel');
  try {
  $.post('database.php', {installer: 'test'}, function(data) {
  	console.log(data);
  });
  var connection = new WebSocket('ws://' + host + ':8000/database.php');
  connection.onopen = function() {
  	console.log('socket opened');
  	connection.send($('#dbhost').val());
  	connection.send($('#dbusername').val());
  	connection.send($('#dbpassword').val());
  	connection.send($('#dbname').val());
  }
  connection.onmessage = function(e) {
  	$('#testDbStatus').html(e.data);
  	console.log(e);
  }
  connection.onerror = function() {
  	console.log('loading fallback test');
  	testDbConnectionFallback();
  }
  connection.onclose = function() {
  	$('#testDbCloseBtn').html('Close');
	$('#testDbProgress').hide();
  }
  }catch (err) {
  	testDbConnectionFallback();
  }
}

function testDbConnectionFallback() {
  var everythingOk = true;
  $.post('database.php', {installer: 'connection', host: $('#dbhost').val(), username: $('#dbusername').val(), password: $('#dbpassword').val()}, function(data) {
  	if (data == '' || !data || data == null) {
  	  $('#testDbStatus').html('<span class="icon-ok-circle"></span> Connected<br/>Checking for Database \'' + $('#dbname').val() + '\'...');
  	  $.post('database.php', {installer: 'database', host: $('#dbhost').val(), username: $('#dbusername').val(), password: $('#dbpassword').val(), database: $('#dbname').val()}, function(data) {
  		if (data == 'db_exists') $('#testDbStatus').html('<span class="icon-ok-circle"></span> Connected<br/><span class="icon-ok-circle"></span> Database \'' + $('#dbname').val() + '\' exists'/*'<br/>Checking permissions...'*/);
  		else if (data == 'db_doesnt_exists') {
  		  everythingOk = false;
  		  $('#testDbStatus').html('<span class="icon-ok-sign"></span> Connected<br/><span class="icon-warning-sign"></span> Database \'' + $('#dbName').val() + '\' doesn\'t exists'/*<br/>Checking permissions...'*/);
		}
  		/*$.post('database.php', {installer: 'permissions', host: $('#dbHost').val(), username: $('#dbUsername').val(), password: $('#dbPassword').val(), database: $('#dbName').val()}, function(data) {
  		  console.log(data);
  		});*/
  	  });
  	}else {
  	  everythingOk = false;
  	  $('#testDbStatus').html('<span class="icon-remove-circle"></span> ' + data);
  	}
  	if (everythingOk) $('#testDbStatus').html($('#testDbStatus').html() + '<br/><span class="icon-ok-circle"></span> Everything is looking fine :)');
	$('#testDbCloseBtn').html('Close');
	$('#testDbProgress').hide();
  });	
}

function testServerConnection() {
  $('#testServerStatus').html('Connecting...');
  $('#testServerProgress').show();
  $('#testServerCloseBtn').html('Cancel');
  try {
  	var pingCon = new WebSocket('ws://' + $('#serverhost').val() + ':' + $('#serverport').val());
  	pingCon.onopen = function() {
  		console.log("Server is running");
  	}
  	var connection = new WebSocket('ws://' + $('#serverhost').val() + ':' + $('#bmport').val() + '');
  	
  }catch (e) {
  	console.log('loading fallback: ' + e);
  	testServerConnectionFallback();
  }
}

function testServerConnectionFallback() {
  var everythingOk = true;
  $.post('connector.php', {installer: 'connection', host: $('#dbhost').val(), username: $('#dbusername').val(), password: $('#dbpassword').val()}, function(data) {
  	if (data == '' || !data || data == null) {
  	  $('#testServerStatus').html('<span class="icon-ok-circle"></span> Connected<br/>Checking for Database \'' + $('#dbname').val() + '\'...');

  	}else {
  	  everythingOk = false;
  	  $('#testServerStatus').html('<span class="icon-remove-circle"></span> ' + data);
  	}
  	if (everythingOk) $('#testServerStatus').html($('#testServerStatus').html() + '<br/><span class="icon-ok-circle"></span> Everything is looking fine :)');
	$('#testServerCloseBtn').html('Close');
	$('#testServerProgress').hide();
  })
  	
}

function importDatabase() {
	
}

function updateLastPage() {
  $('#serverinfo').html($('#serverinfo').html().replace('%servername%', updateInfo('servername')).replace('%serverip%', updateInfo('serverip')).replace('%serverport%', updateInfo('serverport')).replace('%bmport%', updateInfo('bmport')));
  $('#databaseinfo').html($('#databaseinfo').html().replace('%dbhost%', updateInfo('dbhost')).replace('%dbname%', updateInfo('dbname')).replace('%dbusername%', updateInfo('dbusername')));
  $('#admininfo').html($('#admininfo').html().replace('%adminusername%', updateInfo('adminusername')).replace('%adminemail%', updateInfo('adminemail')).replace('%minecraftusername%', updateInfo('minecraftusername')));
  var tempPassword = $('#dbpassword').val(), pwLength = tempPassword.length;
  tempPassword = '';
  for (i = 0; i < pwLength; i++) tempPassword += '*';
  if (tempPassword != '') $('#databaseinfo').html($('#databaseinfo').html().replace('%dbpassword%', tempPassword));
  
  tempPassword = $('#bmpassword').val(), pwLength = tempPassword.length;
  tempPassword = '';
  for (i = 0; i < pwLength; i++) tempPassword += '*';
  if (tempPassword != '') $('#serverinfo').html($('#serverinfo').html().replace('%setuppassword%', tempPassword));
  
  tempPassword = $('#adminpassword').val(), pwLength = tempPassword.length;
  tempPassword = '';
  for (i = 0; i < pwLength; i++) tempPassword += '*';
  if (tempPassword != '') $('#admininfo').html($('#admininfo').html().replace('%adminpassword%', tempPassword));
}

function updateInfo(entry) {
  if ($('#' + entry).val() == '' || !$('#' + entry).val() || $('#' + entry).val() == null) return '%' + entry + '%';
  else return $('#' + entry).val();
}

function finishSetup() {
  generateConfig();
  setupDatabase();
}

function generateConfig() {
  $('#configStatus').html("&lt?php\n"
  + "&nbsp;&nbsp;define('SERVER_NAME', '" + $('#servername').val() + "');\n"
  + "&nbsp;&nbsp;define('SERVER_IP', '" + $('#serverip').val() + "');\n"
  + "&nbsp;&nbsp;define('SERVER_PORT', " + $('#serverport').val() + ");\n"
  + "&nbsp;&nbsp;define('BM_PORT', " + $('#bmport').val() + ");\n"
  + "&nbsp;&nbsp;define('PATH', '/bm_webinterface');\n"
  + "&nbsp;&nbsp;define('DB_HOST', '" + $('#dbhost').val() + "');\n"
  + "&nbsp;&nbsp;define('DB_NAME', '" + $('#dbname').val() + "');\n"
  + "&nbsp;&nbsp;define('DB_USER', '" + $('#dbusername').val() + "');\n"
  + "&nbsp;&nbsp;define('DB_PASSWORD', '" + $('#dbpassword').val() + "');\n"
  + "?&gt");
  $.post('install.php', {installer: 'config', content: $('#configStatus').html()}, function(data) {console.log(data);});
}

function setupDatabase() {
  $('#dbStatus').html("Setting up Database...<br/><pre>CREATE DATABASE IF NOT EXISTS `" + $('#dbname').val() + "`;\n"
    + "CREATE TABLE IF NOT EXISTS `" + $('#dbname').val() + "`.`user`"
    );
  $.post('database.php', {installer: 'setup', host: $('#dbhost').val(), username: $('#dbusername').val(), password: $('#dbpassword').val(), name: $('#dbname').val()}, function() {
  	
  });
  /*$.post('database.php', {installer: 'setup'});
  var connection = new WebSocket('ws://' + host + '/database.php');
  connection.onopen = function() {
  	connection.send($('#dbhost').val());
  	connection.send($('#dbusername').val());
  	connection.send($('#dbpassword').val());
  }*/
}