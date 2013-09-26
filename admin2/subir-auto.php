<!DOCTYPE HTML>

<html>
<head>
	<title>Seminuevos Coapa</title>
	
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" id="pagesheet"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css" id="pagesheet"/>
    
   


</head>

<body  bgcolor="#FFFFFF" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">

<a href="../admin/panel.php"><div align="center"><br><img src="../images/seminuevos_logo.jpg" alt="Volver al panel"></div></a>
<div class="clearfix" id="page" align="center"><br><img src="../images/coapa_logo.jpg" alt=""><br><br>

<div align="center">
<table width="80%" border="0px" cellspacing="0" cellpadding="15px">
  <tr>
    <td>
    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Ingresa los siguientes datos para dar de alta un nuevo veh�culo<p style="font-size:9px">recomendamos usar Chrome</p></legend>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="marca">Marca</label>
  <div class="controls">
    <select id="marca" name="marca" class="input-large">
      <option>Acura</option>
      <option>Alfa Romeo</option>
      <option>Aston Martin</option>
      <option>Audi</option>
      <option>Bentley</option>
      <option>BMW</option>
      <option>Buick</option>
      <option>Cadillac</option>
      <option>Chevrolet</option>
      <option>Chrysler</option>
      <option>Dodge</option>
      <option>Faw</option>
      <option>Ferrari</option>
      <option>Fiat</option>
      <option>Ford</option>
      <option>GM</option>
      <option>GMC</option>
      <option>Honda</option>
      <option>Hummer</option>
      <option>Hyundai</option>
      <option>Infiniti</option>
      <option>Jaguar</option>
      <option>Jeep</option>
      <option>Land Rover</option>
      <option>Lincoln</option>
      <option>Mazda</option>
      <option>Mercedes Benz</option>
      <option>Mercury</option>
      <option>Mini</option>
      <option>Mitsubishi</option>
      <option>Nissan</option>
      <option>Oldsmobile</option>
      <option>Opel</option>
      <option>Peugeot</option>
      <option>Pontiac</option>
      <option>Porsche</option>
      <option>Renault</option>
      <option>Rolls Royce</option>
      <option>Seat</option>
      <option>Smart</option>
      <option>Subaru</option>
      <option>Suzuki</option>
      <option>Toyota</option>
      <option>Volkswagen</option>
      <option>Volvo</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="modelo">Modelo</label>
  <div class="controls">
    <input id="modelo" name="modelo" type="text" placeholder="Modelo del auto" class="input-large">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="version">Versi�n</label>
  <div class="controls">
    <input id="version" name="version" type="text" placeholder="Versi�n del auto" class="input-large">
    
  </div>
</div>

 <div class="control-group">
  <label class="control-label" for="marca">A�o</label>
  <div class="controls">
    <select id="a�o" name="a�o" class="input-large">
      <option>- A�o -</option>
    
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
    <option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
    </select>
  </div>
</div>

<!-- Appended Input-->
<div class="control-group">
  <label class="control-label" for="kilometrqaje">Kilometraje</label>
  <div class="controls">
    <div class="input-append">
      <input id="kilometrqaje" name="kilometrqaje" class="input-large" placeholder="Kilometraje del auto" type="text">
      <span class="add-on">Km</span>
    </div>
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="combustible">Combustible</label>
  <div class="controls">
    <input id="combustible" name="combustible" type="text" placeholder="Combustible" class="input-large">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="transmision">Transmisi�n</label>
  <div class="controls">
    <input id="transmision" name="transmision" type="text" placeholder="Tipo de transmisi�n" class="input-large">
    
  </div>
</div>

<!-- Prepended text-->
<div class="control-group">
  <label class="control-label" for="precio">Precio</label>
  <div class="controls">
    <div class="input-prepend">
      <span class="add-on">$</span>
      <input id="precio" name="precio" class="input-large" placeholder="Precio del auto" type="text">
    </div>
    
  </div>
</div>



<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="descripcion" id="info">Descripción:</label>
  <div class="controls">                     
    <textarea id="texto" width="600px" name="texto" onKeyPress="return limita(event, 255);" onKeyUp="actualizaInfo(255)" rows="6" cols="300"></textarea>
  </div>
</div>



<!-- Button -->
<div class="control-group">
  <label class="control-label" for="hecho"></label>
  <div class="controls">
    <button id="hecho" name="hecho" class="btn btn-success">Hecho</button>
  </div>
</div>

</fieldset>
</form>



    
    </td>
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
  </tr>
  <tr>
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
    <td>&nbsp;</td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
  </tr>
</table>



</div>
</div>

</body>
</html>
