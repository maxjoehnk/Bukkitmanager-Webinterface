<div class="container" id="step4" style="display: none;">
  <h1>Installation - Step 4</h1>
  <ul class="breadcrumb">
    <li class="breadcrumb0"><a href="#step0">Start</a> </li>
    <li class="breadcrumb1"><span class="divider">/</span><a href="#step1">Enter Serverinformation</a> </li>
    <li class="breadcrumb2"><span class="divider">/</span><a href="#step2">Connect with Database</a> </li>
    <li class="breadcrumb3"><span class="divider">/</span><a href="#step3">Setup Administrator Account</a> </li>
    <li class="breadcrumb4 active"><span class="divider">/</span>Finish the Installation</li>
  </ul>
  <div class="well well-small" id="serverinfo">
  	<h4>Serverinformation</h4>
  	Servername: %servername%<br/>
  	Server-IP: %serverip%<br/>
  	Server-Port: %serverport%<br/>
  	Bukkitmanager-Port: %bmport%<br/>
  	Setup Password: %setuppassword%
  </div>
  <div class="well well-small" id="databaseinfo">
  	<h4>Database</h4>
  	Database Host: %dbhost%<br/>
  	Database Name: %dbname%<br/>
  	Database User: %dbusername%<br/>
  	Database Password: %dbpassword%
  </div>
  <div class="well well-small" id="admininfo">
  	<h4>Administrator</h4>
  	Username: %adminusername%<br/>
  	Password: %adminpassword%<br/>
  	E-Mail: %adminemail%<br/>
  	Minecraft Username: %minecraftusername%
  </div>
  <ul class="pager">
    <li class="previous"><a href="#step3">&larr; Back</a></li>
    <li class="next"><a href="#finish" onclick="finishSetup()" data-toggle="modal">Finish</a></li>
  </ul>
</div>
<div id="finish" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="finishLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3 id="finishLabel">Finish the Setup</h3>
  </div>
  <div class="modal-body">
    <pre id="configStatus">Generating config.php...</pre>
    <p id="dbStatus"></p>
    <div class="progress progress-striped active">
      <div class="bar" style="width: 100%;"></div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Cancel</button>
  </div>
</div>
