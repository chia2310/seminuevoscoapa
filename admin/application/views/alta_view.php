<legend>Ingresa los siguientes datos para dar de alta un nuevo vehículo</legend>
<div style="margin-left:10%;">
    <?php echo form_open(current_url()); ?>
<table class="tabla_captura_cliente" class="zebra-striped" style="width:100%">
    <?php
    if($idauto>0){
    ?>
    <tr>
        <td width="20%" align="left" valign="middle">Vendido:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <input type="checkbox" name="vendido" <?php echo ($info["vendido"]==1)? "checked='checked'":""; ?> id="vendido">
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="middle">auto en promoción:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <input type="checkbox" name="promocion" <?php echo ($info["promocion"]==1)? "checked='checked'":""; ?> id="promocion">
        </td>
    </tr>
    <?php    
    }
    ?>
    <tr>
        <td width="20%" align="left" valign="middle">Marca:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <?php
                echo crea_selects($Marcas, 'marca',$info["marca"]);
                ?>
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="middle">Modelo:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <input type="text" name="modelo" value="<?php echo $info['modelo']; ?>" id="modelo" class="span4" data-provide="typeahead"
                   data-items="2" autocomplete="off" placeholder="Modelo del auto">
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="middle">Versión:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <input id="version" name="version" type="text" value="<?php echo $info['version']; ?>" placeholder="Versión del auto" class="span4">
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="middle">Año:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <?php
                echo crea_selects($Years, 'years',$info['years']);
                ?>
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="middle">Kilometraje:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <div class="input-append">
      <input id="kilometraje" name="kilometraje" class="span2 moneda" value="<?php echo $info['kilometraje']; ?>" placeholder="Kilometraje del auto" type="text">
      <span class="add-on">Kms</span>
    </div>
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="middle">Combustible:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <input id="combustible" name="combustible" type="text" value="<?php echo $info['combustible']; ?>" placeholder="Combustible" class="span4">
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="middle">Transmisión:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <input id="transmision" name="transmision" type="text" value="<?php echo $info['transmision']; ?>" placeholder="Tipo de transmision" class="span4">
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="middle">Precio:</td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <div class="input-prepend">
            <span class="add-on">$</span>
            <input id="precio" name="precio" type="text" value="<?php echo $info['precio']; ?>" placeholder="Precio del auto" class="span2 moneda">
            </div>
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="top">
            <label class="control-label" for="descripcion" style="display:inline;" id="info">Descripción:</label>
        </td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <textarea id="texto" class="span4" name="texto" onKeyPress="return limita(event, 255);" onKeyUp="actualizaInfo(255)" rows="6" cols="300"><?php echo $info['texto']; ?></textarea>
        </td>
    </tr>
    <tr>
        <td width="20%" align="left" valign="top">
        </td>
        <td width="80%" colspan="2" align="left" valign="middle">
            <input type="submit" name="Guardar" value="Guardar" class="btn btn-success">
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
<script type="text/javascript">
    $(document).ready(function(){
    $('#modelo').typeahead({
                        source: function (query, process) {
                            // implementation
                            var liga = '<?php echo site_url('panel/auto');?>';
                            var get = {modelo: query};    
                            
                            $.get(liga, get, function (data) {
                               
                                items = [];
                                map = {};                                                                
                                
                                $.each(data, function (i, item) {                                     
                                    map[item.nom] = item;
                                    items.push(item.nom);
                                });
                                process(items);
                            }, 'json');
                            
                        },
                        updater: function (item) {
                            // implementation                            
                            return item;
                        },
                        matcher: function (item) {
                            // implementation
                            if (item.toLowerCase().indexOf(this.query.trim().toLowerCase()) != -1) {
                                return true;
                            }
                        },
                        sorter: function (items) {
                            // implementation
                            return items.sort();
                        },
                        highlighter: function (item) {
                            // implementation
                            var regex = new RegExp( '(' + this.query + ')', 'gi' );
                            return item.replace( regex, "<strong>$1</strong>" );
                            
                        }
                    });
            });
</script>