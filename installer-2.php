<div class="container" id="step2" style="display: none;">
  <h1>Installation - Step 2</h1>
    <ul class="breadcrumb">
    <li class="breadcrumb0"><a href="#step0">Start</a> </li>
    <li class="breadcrumb1"><span class="divider">/</span><a href="#step1">Enter Serverinformation</a> </li>
    <li class="breadcrumb2 active"><span class="divider">/</span>Connect with Database </li>
    <li class="breadcrumb3" style="display: none"><span class="divider">/</span><a href="#step3">Setup Administrator Account</a> </li>
    <li class="breadcrumb4" style="display: none"><span class="divider">/</span><a href="#step4">Finish the Installation</a></li>
  </ul>
  <div class="alert alert-info">
  	<button type="button" class="close" data-dismiss="alert">&times;</button>
  	<h4>Import Settings</h4>
  	You can import your Database Settings direct from Bukkitmanager<br/>
  	<a href="#importDb" role="button" data-toggle="modal" class="btn btn-primary importBtn">Import now</a>
  </div>
  <form>
  	<table style="width: 100%">
  		<tr>
  			<td>Database Host</td>
  			<td><input type="text" onchange="localStorage.dbhost = value" id="dbhost" class="infoTooltip" title="The host your Database is located. Usually localhost works fine." placeholder="Host" value="localhost"/></td>
  		</tr>
  		<tr>
  			<td>Database Name</td>
  			<td><input type="text" onchange="localStorage.dbname = value" id="dbname" class="infoTooltip" title="The Database Name" placeholder="Database Name"/></td>
  		</tr>
  		<tr>
  			<td>Database User</td>
  			<td><input type="text" onchange="localStorage.dbusername = value" id="dbusername" class="infoTooltip" title="The User which should be used to connect to the database" placeholder="User"/></td>
  		</tr>
  		<tr>
  			<td>Database Password</td>
  			<td><input type="password" id="dbpassword" class="infoTooltip" title="The Password which should be used to connect to the database" placeholder="Password"/></td>
  		</tr>
  	</table>
  </form>
  
  <ul class="pager">
    <li class="previous"><a href="#step1">&larr; Back</a></li>
    <li class="next"><a href="#step3" style="margin-left: 5px">Continue without testing &rarr;</a> </li>
    <li class="next"><a href="#testDb" data-toggle="modal">Test Connection</a></li>
  </ul>
</div>
<div id="importDb" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="importDbLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3 id="importDbLabel">Import from Database</h3>
  </div>
  <div class="modal-body">
    <p id="importDbStatus">Connecting...</p>
    <div class="progress progress-striped active">
      <div class="bar" style="width: 100%;"></div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    <button class="btn btn-primary disabled">Import</button>
  </div>
</div>
<div id="testDb" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="testDbLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3 id="testDbLabel">Test Database Connection</h3>
  </div>
  <div class="modal-body">
    <p id="testDbStatus">Connecting...</p>
    <div id="testDbProgress" class="progress progress-striped active">
      <div class="bar" style="width: 100%;"></div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" id="testDbCloseBtn" data-dismiss="modal" aria-hidden="true">Cancel</button>
  </div>
</div>