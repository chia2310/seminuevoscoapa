
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

<div align="center"><br><img src="../images/seminuevos_logo.jpg" alt=""></div>
<div class="clearfix" id="page" align="center"><br><img src="../images/coapa_logo.jpg" alt=""><br><br></div>
<div class="container">
<div  align="center">
  Bienvenido, aqui podras actualizar tus productos
    <p style="font-size:9px">recomendamos usar Chrome</p>
<div class="span7"><a href="admin2/inventario.php"> Inventario de Autos </a></div><div class="span2;"> <a href="admin2/subir-auto.php">Subir auto</a> </div>



</div>
</div>

</body>
</html>
