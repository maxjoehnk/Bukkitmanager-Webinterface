<div class="container" id="step3" style="display: none;">
  <h1>Installation - Step 3</h1>
    <ul class="breadcrumb">
    <li class="breadcrumb0"><a href="#step0">Start</a> </li>
    <li class="breadcrumb1"><span class="divider">/</span><a href="#step1">Enter Serverinformation</a> </li>
    <li class="breadcrumb2"><span class="divider">/</span><a href="#step2">Connect with Database</a> </li>
    <li class="breadcrumb3 active"><span class="divider">/</span>Setup Administrator Account </li>
    <li class="breadcrumb4" style="display: none"><span class="divider">/</span><a href="#step4">Finish the Installation</a></li>
  </ul>
  <form>
  	<table style="width: 100%;">
  		<tr>
  			<td>Username</td>
  			<td><input type="text" onchange="localStorage.adminusername = value" id="adminusername" class="infoTooltip" title="Your username" placeholder="Username" value="admin"/></td>
  		</tr>
  		<tr>
  			<td>Password</td>
  			<td><input type="password" id="adminpassword" class="infoTooltip" title="Your Password" placeholder="Password"/></td>
  		</tr>
 		<tr>
  			<td>Repeat Password</td>
  			<td><input type="password" class="infoTooltip" title="Repeat your Password" placeholder="Password"/></td>
  		</tr>
  		<tr>
  			<td>E-Mail (optional)</td>
  			<td><input type="email" onchange="localStorage.adminemail = value" id="adminemail" class="infoTooltip" title="Your E-Mail is used for Notifications and Passwordreset" placeholder="E-Mail"/></td>
  		</tr>
  		<tr>
  			<td>Minecraft Username (optional)</td>
  			<td><input type="text" onchange="localStorage.minecraftusername = value" id="minecraftusername" class="infoTooltip" title="Links the Adminstrator Account with a Minecraft Account" placeholder="Minecraft Username"/></td>
  		</tr>
  	</table>
  </form>
  <ul class="pager">
    <li class="previous"><a href="#step2">&larr; Back</a></li>
    <li class="next"><a href="#step4">Next &rarr;</a></li>
  </ul>
</div>
