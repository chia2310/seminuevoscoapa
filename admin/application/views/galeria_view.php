<div id='error_borrar' class='alert alert-error' style='display: none;'>
                <p>Error al borrar la imagen. Contacte a su administrador.</p>
            </div>
            <?php echo form_open_multipart('foto/subir');?>
            <input type='hidden' name='id' value='<?php echo $auto;?>' />
            <input type="file" multiple='multiple' name="userfile[]" id="file_upload" accept='image/*'/>
            <input type='submit' value='Subir' class='btn btn-success' id='enviar_imagen'/>
            <?php echo form_close();?>
            
                <?php
                foreach($imagenes as $i){?>
                <div id='div<?php echo $i['idimagen'];?>' class='span5' style='border: 1px solid #DCDCDC; height:400px;'>
                    <button id='borrar<?php echo $i['idimagen'];?>' type="button" class="close borrar" data-id="<?php echo $i['idimagen'];?>" style='color:#660000;' ><i class='icon icon-trash icon-2x'></i></button>
                    <button id='undo<?php echo $i['idimagen'];?>' type="button" class="close undo" style='color:#660000; display:none;' data-id="<?php echo $i['idimagen'];?>" ><i class='icon icon-undo icon-2x'></i></button>
                    <img src ="<?php echo base_url('articulos/'.$articulo['idarticulo'].'/img/'.$i['nombre'].$i['ruta']);?>" alt="<?php echo $i['nombre'];?>" />
                </div>
                <?php
                }
                ?>
<script type="text/javascript">
    $(document).ready(function(){
       $("#enviar_imagen").click(function(){
            var $fileUpload = $("#file_upload");
            if (parseInt($fileUpload.get(0).files.length)>11){
             alert("Sólo puedes subir 10 imágenes al mismo tiempo.");
             return false;
            }
            
            return true;
        }); 
    });
    </script>