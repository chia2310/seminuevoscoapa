<legend>Ingresa los siguientes datos para dar de alta un nuevo vehículo</legend>
<div style="margin-left:10%;">
    <?php echo form_open(current_url()); ?>
<table class="tabla_captura_cliente" class="zebra-striped" style="width:100%">
    <tr>
        <td width="20%" align="left" valign="middle">Marca:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <?php
                echo crea_selects($Marcas, 'marca',"");
                ?>
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="middle">Modelo:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <input id="modelo" name="modelo" type="text" placeholder="Modelo del auto" class="span4">
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="middle">Versión:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <input id="version" name="version" type="text" placeholder="Versión del auto" class="span4">
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="middle">Año:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <?php
                echo crea_selects($Years, 'years',"");
                ?>
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="middle">Kilometraje:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <div class="input-append">
      <input id="kilometraje" name="kilometraje" class="span2 moneda" placeholder="Kilometraje del auto" type="text">
      <span class="add-on">Kms</span>
    </div>
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="middle">Combustible:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <input id="combustible" name="combustible" type="text" placeholder="Combustible" class="span4">
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="middle">Transmisión:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <input id="transmision" name="transmision" type="text" placeholder="Tipo de transmision" class="span4">
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="middle">Precio:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <div class="input-prepend">
            <span class="add-on">$</span>
            <input id="precio" name="precio" type="text" placeholder="Precio del auto" class="span2 moneda">
            </div>
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="top">
            <label class="control-label" for="descripcion" style="display:inline;" id="info">Descripción:</label>
        </td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <textarea id="texto" class="span4" name="texto" onKeyPress="return limita(event, 255);" onKeyUp="actualizaInfo(255)" rows="6" cols="300"></textarea>
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="top">
        </td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <button id="hecho" name="hecho" class="btn btn-success">Hecho</button>
        </td>
    </tr>
</table>
    <?php echo form_close(); ?>
    <br>
</div>
<script type="text/javascript">
    $('.moneda').autoNumeric('init'); 
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
            info.innerHTML = "Descripción:<br><font color='red'>Límite de caracteres alcanzado.</font>";
        }
        else {
            info.innerHTML = "Descripción:<br>Puedes escribir hasta "+(maximoCaracteres-elemento.value.length)+" caracteres adicionales";
        }
    }
</script>