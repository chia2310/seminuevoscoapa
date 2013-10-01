<div id='error_borrar' class='alert alert-error' style='display: none;'>
                <p>Error al borrar la imagen. Contacte a su administrador.</p>
            </div>
            <?php
            if($count<10){
            echo form_open_multipart('foto/subir');?>
            <input type='hidden' name='id' value='<?php echo $auto;?>' />
            <input type="file" multiple='multiple' name="userfile[]" id="file_upload" accept='image/*'/>
            <input type='submit' value='Subir' class='btn btn-success' id='enviar_imagen'/>
            <?php echo form_close();
            }?>
                <?php
                if(empty($info[0]["idfoto"])){?>
            <i class="icon-share-alt icon-rotate-270 icon-3x" style="color:blue;"></i> <b>No hay fotos cargadas para este auto.</b>
                    <?php
                }else{
                foreach($info as $i){?>
                <div id='div<?php echo $i['idfoto'];?>' class='span5' style='height:180px; width:190px; margin-left:60px;'>
                    <center>
                    <img src ="<?php echo base_url('fotos/'.$auto.'/188x114/'.$i['nombre']);?>" class="img-polaroid" alt="<?php echo $i['nombre'];?>" />
                    </center>
                    <a class="btn btn-small btn-block btn-danger" href="<?php echo site_url("foto/eliminar/".$auto."/".$i["idfoto"])?>">
                        <i class="icon-trash"></i>
                         Eliminar
                    </a>
                    <div class="clearfix"></div>
                </div>
                <?php
                }
                }
                ?>
            <div class="clearfix"></div>
<script type="text/javascript">
    $(document).ready(function(){
       $("#enviar_imagen").click(function(){
            var $fileUpload = $("#file_upload");
            if (parseInt($fileUpload.get(0).files.length)>11){
             alert("Sólo puedes subir 10 imágenes.");
             return false;
            }
            
            return true;
        }); 
    });
    </script>