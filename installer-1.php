<div class="container" id="step1" style="display: none;">
  <h1>Installation - Step 1</h1>
  <ul class="breadcrumb">
    <li class="breadcrumb0"><a href="#step0">Start</a> </li>
    <li class="breadcrumb1 active"><span class="divider">/</span>Enter Serverinformation </li>
    <li class="breadcrumb2" style="display: none"><span class="divider">/</span><a href="#step2">Connect with Database</a> </li>
    <li class="breadcrumb3" style="display: none"><span class="divider">/</span><a href="#step3">Setup Administrator Account</a> </li>
    <li class="breadcrumb4" style="display: none"><span class="divider">/</span><a href="#step4">Finish the Installation</a></li>
  </ul>
  <form>
  	<table style="width: 100%">
  		<tr>
  			<td>Servername</td>
  			<td><input type="text" onchange="localStorage.servername = value" class="infoTooltip" id="servername" title="This will be the Name displayed in the Webinterface" placeholder="Server Name"/></td>
  		</tr>
  		<tr>
  			<td>Server IP</td>
  			<td><input type="text" onchange="localStorage.serverip = value" class="infoTooltip" id="serverip" title="This is the IP of your Server" placeholder="IP"/></td>
  		</tr>
  		<tr>
  			<td>Server Port</td>
  			<td><input type="text" onchange="localStorage.serverport = value" class="infoTooltip" id="serverport" title="This is the Port of your Server (Can be found in server.properties File)" placeholder="Port"/></td>
  		</tr>
  		<tr>
  			<td>Bukkitmanager Port</td>
  			<td><input type="text" onchange="localStorage.bmport = value" class="infoTooltip" id="bmport" title="This is the Port Bukkitmanager listens for Remotecontrol on (Can be found in config.yml)" placeholder="Bukkitmanager Port"</td>
  		</tr>
  		<tr>
  			<td>Setup Password (Optional)</td>
  			<td><input type="password" class="infoTooltip" id="bmpassword" title="This is the Setup Password, Bukkitmanager needs to verify you are allowed to set a Remotecontrol up (Can be found in config.yml)" placeholder="Password"/></td>
  		</tr>
  	</table>
  </form>
  <ul class="pager">
    <li class="previous"><a href="#step0">&larr; Back</a></li>
    <li class="next"><a href="#step2" style="margin-left: 5px">Continue without testing &rarr;</a> </li>
    <li class="next"><a href="#testServer" data-toggle="modal">Test Connection</a></li>
  </ul> 
</div>
<div id="testServer" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="testServerLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3 id="testServerLabel">Test Server Connection</h3>
  </div>
  <div class="modal-body">
    <p id="testServerStatus">Connecting...</p>
    <div class="progress progress-striped active">
      <div class="bar" style="width: 100%;"></div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Cancel</button>
  </div>
</div>
