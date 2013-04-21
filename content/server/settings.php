<ul class="nav nav-tabs affix" style="z-index: 50;width: 100%;margin-top: -19px;background-color: #f5f5f5;" id="configTabs">
  <li class="active" style="margin-top: 19px;"><a href="#server" data-toggle="tab">server.properties</a></li>
  <li style="margin-top: 19px;"><a href="#bukkit" data-toggle="tab">bukkit.yml</a></li>
</ul>
<div class="tab-content" style="height: 100%; overflow: visible;padding-top: 38px;">
  <div class="tab-pane active fade in" id="server">
  	<table class="table table-hover table-striped">
  	  <tbody>
  	  	<tr><td class="nav-header" colspan="2">General Options</td></tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="Message of the day"></td>
  	  	  <td>Message of the day</td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="IP"></td>
  	  	  <td>Server IP</td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" min="1" max="65534" placeholder="Port"></td>
  	  	  <td>Server Port</td>
  	  	</tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	    <input type="checkbox" value="None" id="settingEnableQuery" name="check" style="display:none" />
	  		<label for="settingEnableQuery"></label>
	  		</div>
  	  	  </td>
  	  	  <td>Enable Query</td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" min="1" max="65534" placeholder="Port"></td>
  	  	  <td>Query Port</td>
  	  	</tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	    <input type="checkbox" value="None" id="settingWhitelist" name="check" style="display:none" />
	  		<label for="settingWhitelist"></label>
	  		</div>
  	  	  </td>
  	  	  <td>Whitelist</td>
  	  	</tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	    <input type="checkbox" value="None" id="settingOnlinemode" name="check" style="display:none" />
	  		<label for="settingOnlinemode"></label>
	  		</div>
  	  	  </td>
  	  	  <td>Online Mode</td>
  	  	</tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	    <input type="checkbox" value="None" id="settingSnooper" name="check" style="display:none" />
	  		<label for="settingSnooper"></label>
	  		</div>
  	  	  </td>
  	  	  <td>Snooper Enabled</td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" min="1" max="2147483647" placeholder="Max Players"></td>
  	  	  <td>Max Players</td>
  	  	</tr>
  	  	<tr><td class="nav-header" colspan="2">RCON Options</td></tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	    <input type="checkbox" value="None" id="settingRcon" name="check" style="display:none" />
	  		<label for="settingRcon"></label>
	  		</div>
  	  	  </td>
  	  	  <td>RCON Enabled</td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="Password"></td>
  	  	  <td>RCON Password</td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" min="1" max="65534" placeholder="Port"></td>
  	  	  <td>RCON Port</td>
  	  	</tr>
  	  	<tr><td class="nav-header" colspan="2">Player Options</td></tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	    <input type="checkbox" value="None" id="settingAllowFlight" name="check" style="display:none" />
	  		<label for="settingAllowFlight"></label>
	  		</div>
  	  	  </td>
  	  	  <td>Allow Flight</td>
  	  	</tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	    <input type="checkbox" value="None" id="settingHardcore" name="check" style="display:none" />
	  		<label for="settingHardcore"></label>
	  		</div>
  	  	  </td>
  	  	  <td>Hardcore</td>
  	  	</tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	    <input type="checkbox" value="None" id="settingPvP" name="check" style="display:none" />
	  		<label for="settingPvP"></label>
	  		</div>
  	  	  </td>
  	  	  <td>PvP</td>
  	  	</tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="btn-group">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Survival <span class="caret"></span></a>
              <ul class="dropdown-menu">
              	<li><a href="#">Survival</a></li>
              	<li><a href="#">Creative</a></li>
              	<li><a href="#">Adventure</a></li>
              </ul>
            </div>
  	  	  </td>
  	  	  <td>Gamemode</td>
  	  	</tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="btn-group">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Easy <span class="caret"></span></a>
              <ul class="dropdown-menu">
              	<li><a href="#">Peaceful</a></li>
              	<li><a href="#">Easy</a></li>
              	<li><a href="#">Normal</a></li>
              	<li><a href="#">Hard</a></li>
              </ul>
            </div>
  	  	  </td>
  	  	  <td>Difficulty</td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" min="3" max="15" placeholder="View Distance"></td>
  	  	  <td>View Distance</td>
  	  	</tr>  	  	
  	  	<tr><td class="nav-header" colspan="2">Level Options</td></tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	    <input type="checkbox" value="None" id="settingAllowNether" name="check" style="display:none" />
	  		<label for="settingAllowNether"></label>
	  		</div>
  	  	  </td>
  	  	  <td>Allow Nether</td>
  	  	</tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	    <input type="checkbox" value="None" id="settingStructures" name="check" style="display:none" />
	  		<label for="settingStructures"></label>
	  		</div>
  	  	  </td>
  	  	  <td>Generate Structures</td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="Level Name"></td>
  	  	  <td>Level Name</td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="Level Seed"></td>
  	  	  <td>Level Seed</td>
  	  	</tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="btn-group">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Default <span class="caret"></span></a>
              <ul class="dropdown-menu">
              	<li><a href="#">Default</a></li>
              	<li><a href="#">Flat</a></li>
              	<li><a href="#">Large Biomes</a></li>
              </ul>
            </div>
  	  	  </td>
  	  	  <td>Level Type</td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="Generator Settings"></td>
  	  	  <td>Generator Settings</td>
  	  	</tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	    <input type="checkbox" value="None" id="settingSpawnNPCs" name="check" style="display:none" />
	  		<label for="settingSpawnNPCs"></label>
	  		</div>
  	  	  </td>
  	  	  <td>Spawn NPCs</td>
  	  	</tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	    <input type="checkbox" value="None" id="settingSpawnAnimals" name="check" style="display:none" />
	  		<label for="settingSpawnAnimals"></label>
	  		</div>
  	  	  </td>
  	  	  <td>Spawn Animals</td>
  	  	</tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	    <input type="checkbox" value="None" id="settingCommandblock" name="check" style="display:none" />
	  		<label for="settingCommandblock"></label>
	  		</div>
  	  	  </td>
  	  	  <td>Command Block</td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" min="1" max="256" placeholder="Build Height"></td>
  	  	  <td>Max Build Height</td>
  	  	</tr>
  	  </tbody>
  	</table>
  </div>
  <div class="tab-pane fade out" id="bukkit">
  	<table class="table table-striped table-hover">
  	  <tbody>
      	<tr><td class="nav-header" colspan="2">Settings</td></tr>
  	  	<tr class="bmTooltip" data-toggle="tooltip" title="Is the End enabled.">
  	  	  <td>
  	  	  	<div class="slideThree">
	 	      <input type="checkbox" value="None" id="settingAllowEnd" name="check" style="display:none" />
	  		  <label for="settingAllowEnd"></label>
	  		</div>
  	  	  </td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Is the End enabled.">Allow End</span></td>
  	  	</tr>
  	  	<tr class="bmTooltip" data-toggle="tooltip" title="Does the server show &quot;[WARNING] Can't keep up! Did the system time change, or is the server overloaded?&quot; messages.">
  	  	  <td>
  	  	  	<div class="slideThree">
	 	      <input type="checkbox" value="None" id="settingOverloadWarning" name="check" style="display:none" />
	  		  <label for="settingOverloadWarning"></label>
	  		</div>
  	  	  </td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Does the server show &quot;[WARNING] Can't keep up! Did the system time change, or is the server overloaded?&quot; messages.">Warn on Overload</span></td>
  	  	</tr>
  	  	<tr class="bmTooltip" data-toggle="tooltip" title="The name of your custom permissions file.">
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="Permissions File"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="The name of your custom permissions file.">Permissions File</span></td>
  	  	</tr>
  	  	<tr class="bmTooltip" data-toggle="tooltip" title="The name of the folder to put updated plugins in, which will be moved upon restart. NOTE: The folder MUST be in the plugins folder. Absolute paths do NOT work.">
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="Update Folder"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="The name of the folder to put updated plugins in, which will be moved upon restart. NOTE: The folder MUST be in the plugins folder. Absolute paths do NOT work.">Update Folder</span></td>
  	  	</tr>
  	  	<tr class="bmTooltip" data-toggle="tooltip" title=" How much packets a second the ingame ping list can use, maximum.">
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" placeholder="Ping Packet Limit"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title=" How much packets a second the ingame ping list can use, maximum.">Ping Packet Limit</span></td>
  	  	</tr>
  	  	<tr class="bmTooltip" data-toggle="tooltip" title="Since Minecraft added the feature of pushing entities out whenever they are stuck inside a block, players have often found themselves above the location they logged out of when logging back in (especially if they were in a cave). This setting allows servers to disable or enable this behavior. If true, we will bypass Vanilla's behaviour of checking for collisions and moving the player if needed when they login. If false, we will continue to follow Vanilla's behaviour and move players that 'collide' with objects when they login.">
  	  	  <td>
  	  	  	<div class="slideThree">
	 	      <input type="checkbox" value="None" id="settingExactLogin" name="check" style="display:none" />
	  		  <label for="settingExactLogin"></label>
	  		</div>
  	  	  </td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Since Minecraft added the feature of pushing entities out whenever they are stuck inside a block, players have often found themselves above the location they logged out of when logging back in (especially if they were in a cave). This setting allows servers to disable or enable this behavior. If true, we will bypass Vanilla's behaviour of checking for collisions and moving the player if needed when they login. If false, we will continue to follow Vanilla's behaviour and move players that 'collide' with objects when they login.">Use exact Login Location</span></td>
  	  	</tr>
  	  	<tr class="bmTooltip" data-toggle="tooltip" title="The name of a folder to store all the world directories in. If not included in your file, defaults to the current working directory.">
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="World Container"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="The name of a folder to store all the world directories in. If not included in your file, defaults to the current working directory.">World Container</span></td>
  	  	</tr>
  	  	<tr class="bmTooltip" data-toggle="tooltip" title="Allows the use of the command /timings. Used to measure time taken by plugin for events.">
  	  	  <td>
  	  	  	<div class="slideThree">
	 	      <input type="checkbox" value="None" id="settingPluginProfiling" name="check" style="display:none" />
	  		  <label for="settingPluginProfiling"></label>
	  		</div>
  	  	  </td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Allows the use of the command /timings. Used to measure time taken by plugin for events.">Plugin Profiling</span></td>
  	  	</tr>
  	  	<tr class="bmTooltip" data-toggle="tooltip" title="The delay before a client is allowed to connect again after a recent connection attempt. A value of 0 disables the connection throttle but leaves your server susceptible to attacks (only recommended for test servers).">
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" placeholder="Connection Throttle"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="The delay before a client is allowed to connect again after a recent connection attempt. A value of 0 disables the connection throttle but leaves your server susceptible to attacks (only recommended for test servers).">Connection Throttle</span></td>
  	  	</tr>
  	  	<tr class="bmTooltip" data-toggle="tooltip" title="Does the server return the list of plugins when queried remotely.">
  	  	  <td>
  	  	  	<div class="slideThree">
	 	      <input type="checkbox" value="None" id="settingQueryPlugins" name="check" style="display:none" />
	  		  <label for="settingQueryPlugins"></label>
	  		</div>
  	  	  </td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Does the server return the list of plugins when queried remotely.">Query Plugins</span></td>
  	  	</tr>
  	  	<tr class="bmTooltip" data-toggle="tooltip" title="Does the server show warnings when a plugin registers a deprecated event. A 'true'/'false' value works as a toggle for these warnings, while 'default' will always show a warning unless the event in question has been tagged by a developer as not requiring a warning when it is registered.">
  	  	  <td>
  	  	  	<div class="slideThree">
	 	      <input type="checkbox" value="None" id="settingDeprecatedVerbose" name="check" style="display:none" />
	  		  <label for="settingDeprecatedVerbose"></label>
	  		</div>
  	  	  </td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Does the server show warnings when a plugin registers a deprecated event. A 'true'/'false' value works as a toggle for these warnings, while 'default' will always show a warning unless the event in question has been tagged by a developer as not requiring a warning when it is registered.">Deprecated Verbose</span></td>
  	  	</tr>  	  	
  	  	<tr class="bmTooltip" data-toggle="tooltip" title="This is the message displayed to clients when the server stops.">
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="Shutdown Message"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="This is the message displayed to clients when the server stops.">Shutdown Message</span></td>
  	  	</tr>
      	<tr><td class="nav-header" colspan="2">Spawn Limits</td></tr>
  	  	<tr class="bmTooltip" data-toggle="tooltip" title="This bukkit.yml setting allows servers to set the amount of monsters that can spawn in a chunk (Minecraft default: 70).">
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" placeholder="Monsters"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="This bukkit.yml setting allows servers to set the amount of monsters that can spawn in a chunk (Minecraft default: 70).">Monsters</span></td>
  	  	</tr>
  	  	<tr class="bmTooltip" data-toggle="tooltip" title="This bukkit.yml setting allows servers to set the amount of animals that can spawn in a chunk (Minecraft default: 15).">
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" placeholder="Animals"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="This bukkit.yml setting allows servers to set the amount of animals that can spawn in a chunk (Minecraft default: 15).">Animals</span></td>
  	  	</tr>
  	  	<tr class="bmTooltip" data-toggle="tooltip" title="This bukkit.yml setting allows servers to set the amount of water animals that can spawn in a chunk (Minecraft default: 5).">
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" placeholder="Water Animals"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="This bukkit.yml setting allows servers to set the amount of water animals that can spawn in a chunk (Minecraft default: 5).">Water Animals</span></td>
  	  	</tr>
  	  	<tr class="bmTooltip" data-toggle="tooltip" title="This bukkit.yml setting allows servers to set the amount of ambient creatures (aka, bats) that can spawn in a chunk (Minecraft default: 15).">
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" placeholder="Ambient"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="This bukkit.yml setting allows servers to set the amount of ambient creatures (aka, bats) that can spawn in a chunk (Minecraft default: 15).">Ambient</span></td>
  	  	</tr>      	
      	<tr><td class="nav-header" colspan="2">Chunk GC</td></tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" placeholder="Period in Ticks"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Is the End enabled.">Period in Ticks</span></td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" placeholder="Load Threshold"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Is the End enabled.">Load Threshold</span></td>
  	  	</tr>
      	<tr><td class="nav-header" colspan="2">Ticks per</td></tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" min="0" placeholder="Animal Spawns"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Is the End enabled.">Animal Spawns</span></td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" min="0" placeholder="Monster Spawns"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Is the End enabled.">Monster Spawns</span></td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="number" min="0" placeholder="Autosave"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Is the End enabled.">Autosave</span></td>
  	  	</tr>
      	<tr><td class="nav-header" colspan="2">Auto Updater</td></tr>
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	      <input type="checkbox" value="None" id="settingAutoUpdater" name="check" style="display:none" />
	  		  <label for="settingAutoUpdater"></label>
	  		</div>
  	  	  </td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Is the End enabled.">Enabled</span></td>
  	  	</tr>  	  	
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	      <input type="checkbox" value="None" id="settingOPBroken" name="check" style="display:none" />
	  		  <label for="settingOPBroken"></label>
	  		</div>
  	  	  </td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Is the End enabled.">Warn OPs on broken</span></td>
  	  	</tr>  	  	
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	      <input type="checkbox" value="None" id="settingOPUpdate" name="check" style="display:none" />
	  		  <label for="settingOPUpdate"></label>
	  		</div>
  	  	  </td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Is the End enabled.">Warn OPs on update</span></td>
  	  	</tr>  	  	
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	      <input type="checkbox" value="None" id="settingConsoleBroken" name="check" style="display:none" />
	  		  <label for="settingConsoleBroken"></label>
	  		</div>
  	  	  </td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Is the End enabled.">Warn console on broken</span></td>
  	  	</tr>  	  	
  	  	<tr>
  	  	  <td>
  	  	  	<div class="slideThree">
	 	      <input type="checkbox" value="None" id="settingConsoleUpdate" name="check" style="display:none" />
	  		  <label for="settingConsoleUpdate"></label>
	  		</div>
  	  	  </td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Is the End enabled.">Warn console on update</span></td>
  	  	</tr>  	  	
  	  	<tr>
  	  	  <td>
  	  	  	<div class="btn-group">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Recommend <span class="caret"></span></a>
              <ul class="dropdown-menu">
              	<li><a href="#">Recommend</a></li>
              	<li><a href="#">Beta</a></li>
              	<li><a href="#">Development</a></li>
              </ul>
            </div>
  	  	  </td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Is the End enabled.">Preferred Channel</span></td>
  	  	</tr>
   	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="Host"></td>
  	  	  <td><span class="bmTooltip" data-toggle="tooltip" data-placement="right" title="Is the End enabled.">Host</span></td>
  	  	</tr>
      	<tr><td class="nav-header" colspan="2">Aliases</td></tr>
      	<tr><td colspan="2"><a href="#addAliasDialog" role="button" class="btn" data-toggle="modal">Add Alias</a></td></tr>
      	<tr><td class="nav-header" colspan="2">Database</td></tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="Username"></td>
  	  	  <td>Username</td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="Isolation"></td>
  	  	  <td>Isolation</td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="Driver"></td>
  	  	  <td>Driver</td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="Password"></td>
  	  	  <td>Password</td>
  	  	</tr>
  	  	<tr>
  	  	  <td><input style="height: 26px; margin-bottom: 0px;" type="text" placeholder="URL"></td>
  	  	  <td>URL</td>
  	  	</tr>
      	<tr><td class="nav-header" colspan="2">Worlds</td></tr>
      </tbody>
    </table>
  </div>
</div>
<div id="addAliasDialog" role="dialog" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Add Command Alias</h3>
  </div>
  <div class="modal-body">
    <input type="text" placeholder="Alias"><br/>
    <input type="text" placeholder="Command">
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    <button class="btn btn-primary">Add</button>
  </div>
</div>
<script>$('.bmTooltip').tooltip();</script>