
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Seminuevos Coapa</title>
	
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" id="pagesheet"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css" id="pagesheet"/>
    
    <script type="text/javascript">
function limita(elEvento, maximoCaracteres) {
  var elemento = document.getElementById("texto");

  // Obtener la tecla pulsada 
  var evento = elEvento || window.event;
  var codigoCaracter = evento.charCode || evento.keyCode;
  // Permitir utilizar las teclas con flecha horizontal
  if(codigoCaracter == 37 || codigoCaracter == 39) {
    return true;
  }

  // Permitir borrar con la tecla Backspace y con la tecla Supr.
  if(codigoCaracter == 8 || codigoCaracter == 46) {
    return true;
  }
  else if(elemento.value.length >= maximoCaracteres ) {
    return false;
  }
  else {
    return true;
  }
}

function actualizaInfo(maximoCaracteres) {
  var elemento = document.getElementById("texto");
  var info = document.getElementById("info");

  if(elemento.value.length >= maximoCaracteres ) {
    info.innerHTML = "M�ximo "+maximoCaracteres+" caracteres";
  }
  else {
    info.innerHTML = "Puedes escribir hasta "+(maximoCaracteres-elemento.value.length)+" caracteres adicionales";
  }
}

</script>


</head>

<body  bgcolor="#FFFFFF" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">

<a href="admin2/panel.php"><div align="center"><br><img src="../images/seminuevos_logo.jpg" alt="Volver al panel"></div></a>
<div class="clearfix" id="page" align="center"><br><img src="../images/coapa_logo.jpg" alt=""><br><br>

<div align="center">
<table width="80%" border-style:groove; border="1px" cellspacing="0" cellpadding="15px">
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

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="a�o">A�o</label>
  <div class="controls">
    <input id="a�o" name="a�o" type="text" placeholder="A�o del auto" class="input-large">
    
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

<!-- File Button --> 
<div class="control-group">
  <label class="control-label" for="imagen">imagen</label>
  <div class="controls">
    <input id="imagen" name="imagen" class="input-file" type="file">
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="descripcion" id="info">Puedes escribir m�ximo 255 caracteres</label>
  <div class="controls">                     
    <textarea id="texto" name="texto" onKeyPress="return limita(event, 255);" onKeyUp="actualizaInfo(255)" rows="6" cols="30"></textarea>
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
