<?php
if ($seccion == "inventario") {
    ?>
    <?php echo form_open(current_url(),array("method"=>"GET")); ?>
    <div  style=" margin-left:5%; width:85%; float:left;">
        <table style="width:100%;">
            <tr>
                <td width="20%" height="10px">
                    <b>Modelo</b>
                </td>
                <td width="20%">
                    <b>Marca</b>
                </td>
                <td width="20%">
                    <b>Año</b>
                </td>
                <td width="20%">
                    <b>Estatus</b>
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <input id="modelo" name="modelo" autocomplete="off" value="<?php echo $modelo; ?>" type="text" placeholder="Todos*" style="width:94%" class="span2">
                </td>
                <td width="20%">
                    <?php
                    echo crea_selects($Marcas, 'marca', $marca, "style='width:100%;'", "0", "Todos*");
                    ?>
                </td>
                <td width="20%">
                    <?php
                    echo crea_selects($Years, 'years', $years, "style='width:100%;'", "0", "Todos*");
                    ?>
                </td>
                <td width="20%">
                    <?php
                    echo crea_selects($Estatus, 'estatus', $estatus, "style='width:100%;'", "3", "Todos*");
                    ?>
                </td>
            </tr>
        </table>
    </div>
    <div  style="width:10%; float:left; margin-top:22px;">
        <input type="submit" name="buscar" value="Buscar" class="btn btn-success">
    </div>
    <?php
    echo form_close();
    if ($visible == "1") {
        ?>
        <table class="table table-striped table-bordered table-condensed">
            <tbody>
                <tr>
                    <td width="5%"></td>
                    <td width="18.75%"><h4>Marca</h4></td>
                    <td width="18.75%"><h4>Modelo</h4></td>
                    <td width="18.75%"><h4>Año</h4></td>
                    <td width="18.75%"><h4>Precio</h4></td>
                    <td width="5%"><h4>Home</h4></td>
                    <td width="5%"><h4>Promoción</h4></td>
                    <td width="5%"><h4>Fotos</h4></td>
                    <td width="5%"><h4>Editar</h4></td>
                </tr>
                <?php
                if (is_array($info) AND count($info) > 0) {
                    foreach ($info AS $arreglo) {
                        $idauto_venta=$arreglo["idauto_venta"];
                        $marca = $arreglo["marca"];
                        $modelo = $arreglo["modelo"];
                        $years = $arreglo["years"];
                        $precio = $arreglo["precio"];
                        $vendido = $arreglo["vendido"];
                        $promocion = $arreglo["promocion"];
                        ?>
                        <tr>
                            <td>
                    <center>
                        <a class="btn btn-danger btn-small" href="<?php echo site_url("panel/elimina/".$idauto_venta."?".$_SERVER["QUERY_STRING"]); ?>">
                            <i class="icon-trash" style="color:white;"></i>
                        </a>
                    </center>
                </td>
                <td><?php echo $marca ?></td>
                <td><?php echo $modelo ?></td>
                <td><?php echo $years ?></td>
                <td>$<?php echo $precio ?></td>
                <td>
                    <center>
                        <input type="checkbox" name="vendido" disabled="disabled" <?php echo ($vendido=="1")? "checked='checked'":""; ?> id="vendido">
                    </center>
                </td>
                <td>
                    <center>
                        <input type="checkbox" name="promocion" disabled="disabled" <?php echo ($promocion=="1")? "checked='checked'":""; ?> id="promocion">
                    </center>
                </td>
                <td>
                    <center>
                        <a class="btn btn-single btn-small" href="<?php echo site_url("foto/galeria/".$idauto_venta); ?>">
                            <i class="icon-camera" style="color:black;"></i>
                        </a>
                    </center>
                </td>
                <td>
                    <center>
                        <a class="btn btn-info btn-small" href="<?php echo site_url("panel/alta/".$idauto_venta."?".$_SERVER["QUERY_STRING"]); ?>">
                            <i class="icon-edit" style="color:white;"></i>
                        </a>
                    </center>
                </td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
        </table>  
    <?php } ?>
    <div class="clearfix"></div>
    <?php
}
?>
<?php
if ($seccion == "nada") {
    ?>
    <div style="width:27%; float:left; border:1px solid white;">
        
    </div>
    <div class="span2">
        <p>
            <a class="btn btn-large btn-primary" style="width:100px;" href="<?php echo site_url("panel/inventario?modelo=&marca=0&years=0&estatus=3&buscar=Buscar")?>">
                <i class="icon-list-alt icon-4x"></i>
                <br>Inventario</a>
        </p>
    </div>
    <div class="span2">
        <p>
            <a class="btn btn-large btn-primary" style="width:100px;" href="<?php echo site_url("panel/alta")?>">
                <i class="icon-edit-sign icon-4x"></i><br> Subir Auto</a>
        </p>
    </div>
    <div class="span2">
        <p>
            <a class="btn btn-large btn-primary" style="width:100px;"  href="../admin2/carrusel.php">
                <i class="icon-picture icon-4x"></i>
                <br> carrusel</a>
        </p>
    </div>
                <?php
            }
            ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#modelo').typeahead({
            source: function (query, process) {
                // implementation
                var liga = '<?php echo site_url('panel/auto'); ?>';
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