<?php
error_reporting(E_ALL^E_NOTICE);
function menu(){
?>

	<?php
		include ('seguridadm.php');
		
		if($_SESSION["autentificado"] != "SI"){
	?>
	<table>
		<tr>
			<td>
					<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="210" height="105" onmouseover="sesion" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="sesion_2.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" /><embed src="img/sesion_2.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="210" height="105" name="sesion_2" id="sesion" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>

			</td>
		</tr>
		<tr>
			<td>
				<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="210" height="105" id="mision" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="mision.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" /><embed src="img/mision.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="210" height="105" name="mision" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
			</td>
		</tr>
		<tr>
			<td>
				<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="210" height="105" id="sesion_1" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="sesion_1.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" /><embed src="img/sesion_1.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="210" height="105" name="sesion_1" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
			</td>
		</tr>
		<tr>
			<td>
				<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="210" height="105" id="sesion_4" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="sesion_4.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" /><embed src="img/sesion_4.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="210" height="105" name="sesion_4" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
			</td>
		</tr>
	</table>
	<?php
		//session_destroy();
		}
	else {
	?>
						<?php
						if($_SESSION["nivel"]=="1")
							{
					?>
						<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="210" height="480" id="menu_nivel1" align="middle" >
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="menu_nivel2.swf" /><param name="quality" value="best" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" /><embed src="../img/menu_nivel1.swf" quality="best" wmode="transparent" bgcolor="#ffffff" width="210" height="450" name="menu_nivel2" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
					<?php
							}
					?>
					<?php
						if($_SESSION["nivel"]=="2")
							{
					?>
						<!--<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="190" height="105" id="menu_nivel2" align="middle" class="menu_flash">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="menu_nivel2.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" /><embed src="../img/menu_nivel2.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="300" height="430" name="menu_nivel2" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>-->
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="210" height="480" id="menu_nivel2" align="middle" >
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="menu_nivel2.swf" /><param name="quality" value="best" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" /><embed src="../img/menu_nivel2.swf" quality="best" wmode="transparent" bgcolor="#ffffff" width="210" height="450" name="menu_nivel2" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
					<?php
							}
					?>
					
					<?php
						if($_SESSION["nivel"]=="3")
							{
					?>
						<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="auto" height="auto" id="menu_nivel4" align="middle" class="menu_flash">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="menu_nivel3.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" /><embed src="../img/menu_nivel3.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="300" height="430" name="menu_nivel4" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
					<?php
							}
					?>
					
					<?php
						}						
					?>
			</ul>
<?php
						
}

?>
