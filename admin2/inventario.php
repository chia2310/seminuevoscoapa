<!DOCTYPE HTML>
<html>
<head>

	<title>Seminuevos Coapa</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" id="pagesheet"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css" id="pagesheet"/>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    
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

<a href="../admin/panel.php"><div align="center"><br><img src="../images/seminuevos_logo.jpg" alt="Volver al panel"></div></a>
<div class="clearfix" id="page" align="center"><br><img src="../images/coapa_logo.jpg" alt=""><br><br>
<h2>Filtrar busqueda</h2>




<div class="container">
<div class="row">
  <div class="span9">
    
    <div class="row">
      <div class="span1 ofset1"><label class="control-label" for="modelo">Modelo</label>
        <div class="controls">
          <input id="modelo" name="modelo" type="text" placeholder="Modelo" class="input-medium search-query">
          
          </div></div>
      <div class="span1 offset1"><label class="control-label" for="modelo">Marca</label>
         <div class="controls">
              <select id="marca" name="marca" class="input-medium">
                <option>- Marca -</option>
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
            </div></div>
      <div class="span1 offset1"><label class="control-label" for="modelo">Año</label>
        <div class="controls">
          <select id="anio" name="anio" class="input-medium">
              <option>- Año -</option>
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
          
          </div></div>
          <div class="span1 offset1"><label class="control-label" for="modelo">Vendido</label>
         <div class="controls">
              <select id="vendidos" name="vendidos" class="input-medium">
                <option>- ---- -</option>
                <option>Vendido</option>
                <option>No Vendido</option>
               
              </select>
            </div></div>
    </div>
  </div>
</div>



<table width="100%" border-style:groove; border="1px" cellspacing="0" cellpadding="10px">
  <tr>
  
    <th scope="col">Auto</th>
    <th scope="col">Marca</th>
    <th scope="col">Año</th>
    <th scope="col">Fotos</th>
    
  </tr>
  <tr>
    <td>aqui se jalara el nombre del auto, como un seat</td>
    <td>aqui se mostrara marca</td>
    <td>2014</td>
    <td align="center"><a style="color:#333"><i class="icon-camera icon-large"><br>Subir</i></a></td>
    <th scope="col"> Vendido
      <label class="checkbox inline" for="home-0">
      <input type="checkbox" name="vendido" id="vendido-0" value="promocionar en home">
      
    </label>
    </th>
    <th scope="col">
     Promoción 
       <label class="checkbox inline" for="home-0">
      <input type="checkbox" name="promocion" id="promocion-0" value="promocionar en home">
      
    </label>
    </th>
     
   
    <th align="center" scope="col"><a style="color:#333"><i class="icon-remove icon-large"><br>Remover</i></a></th>&nbsp;&nbsp;&nbsp;
    <th align="center" scope="col">
    <a style="color:#333"><i class="icon-edit icon-large"><br>Editar</i></a>&nbsp;&nbsp;&nbsp;
   
  
   </th>
  </tr>
  
</table>


</div>
</div>


</body>
</html>
