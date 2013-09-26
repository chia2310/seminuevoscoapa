<div style="width:37.5%;float:left; height: 200px;"></div>
<div style="width:25%; float:left; height: 200px;">
    <?php echo form_open(current_url(),array('class'=>'form_horizontal'));?>
    <table width="100%" cellspacing="4" cellpadding="4" border="0">
	<tr bgcolor="DDDDDD" style="width: 100%;">
		<td align="right" style="width: 20%;"><font class="desarrollo"><strong>Usuario:</strong></font></td>
		<td><input type="text" style="width: 80%;" name="user" id="user" size="25"></td>
	</tr>
	<tr bgcolor="DDDDDD" style="width: 100%;">
		<td align="right" style="width: 20%;"><font class="desarrollo"><strong>Clave:</strong></font></td>
		<td><input type="password" style="width: 80%;" name="pass" id="pass" size="25"></td>
	</tr>	
	<tr bgcolor="DDDDDD" style="width: 100%;">
		<td colspan="2" align="center"><input type="submit" name="mandar" value="Entrar" class="btn btn-primary">
		</td>
	</tr>
	</table>
    <font face="Arial, Helvetica, sans-serif"size="-2"><a href="http://www.estrategiasdigitales.com.mx">Sitio administrado por: Estrategias Digitales</a></font>
    <?php echo form_close();?>
</div>