<?php

include("sistema/index.php");

$paginas = 10;

$paginacion = AM_paginacion($paginas);

$get = $_GET;

$off = (isset($get['o'])) ? $get['o'] : 0;

$act = (isset($get['a'])) ? $get['a'] : 0;

$autos = AM_get_inventario($paginas,$off,'idauto_venta as idauto,marca_descripcion as marca,modelo_descripcion as modelo,precio as precio');

?>

<!DOCTYPE html>

<html class="html">

    <head>



        <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>

        <meta name="generator" content="6.0.751.219"/>

        <link rel="shortcut icon" href="images/a-pagina-maestra-favicon.ico?486103517"/>

        <title>Inventario de autos</title>

        <!-- CSS -->





        <link rel="stylesheet" type="text/css" href="css/index.css?359703833" id="pagesheet"/>

        <link rel="stylesheet" type="text/css" href="css/site_global.css?117226940"/>

        <link rel="stylesheet" type="text/css" href="css/master_a-pagina-maestra.css?4201905536"/>

        <link rel="stylesheet" type="text/css" href="css/inventario-de-autos.css?507598799" id="pagesheet"/>

        <!-- Other scripts -->

        <script type="text/javascript">

            document.documentElement.className += ' js';

        </script>
        
        <!--SMOOTHMENU-->
<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
/*
ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
*/
</script>
<!--SMOOTHMENU-->

    </head>

    <body>



        <div class="clearfix" id="page"><!-- column -->

            <div class="position_content" id="page_position_content">

                <a class="nonblock nontext colelem" id="u75" href="index.php"><!-- image --><img class="block" id="u75_img" src="images/logo-sc.png" alt="" width="408" height="109"/></a>

                <?php include "includes/header.php"; ?>

                <?php include "includes/buscador.php"; ?>



                <div class="clearfix colelem" id="pu316-4"><!-- group -->

                    <div class="clearfix grpelem" id="u316-4"><!-- content -->

                        <p>Autos en venta</p>

                    </div>

                    <div class="botonrojo gradient grpelem" id="u314"><!-- simple frame --></div>

                </div>

                <div class="clearfix colelem" id="pu1650-3"><!-- group -->

                    <div class="clearfix grpelem" id="u1650-3"><!-- content -->

                        <p>&nbsp;</p>

                    </div>

                    <div class="clearfix grpelem" id="u4374"><!-- group -->

                        <div class="grpelem" id="u4373"><!-- simple frame --></div>

                    </div>

                    <div class="clearfix grpelem" id="u4375-64"><!-- content -->
                    
                    <br><br>
                    <div id="smoothmenu1" class="ddsmoothmenu">

                        <div>

                            <?php

                            if(count($paginacion) > 1){?>

                            <div class='paginacion'>

                                <ul>

                                    <?php

                                    foreach($paginacion as $p => $v){

                                        if($act == $p){?>

                                    <li class="btn active"><?php echo $p+1;?></li>

                                    <?php

                                        }else{?>

                                    <li><a class="btn" href="inventario-de-autos.php?a=<?php echo $p;?>&o=<?php echo $v;?>"><?php echo $p+1;?></a></li>

                                    <?php

                                        }

                                    }

                                    ?>

                                </ul>

                            </div>
                            

                            <?php

                            }

                            ?>

                            <br><br><br><br>

                            <?php
							

                            if(!empty($autos)){?>

                            <table width="100%" border="0px" cellspacing="6px" cellpadding="10px">

                                <tr>

                                <?php

                                $cont = 0;

                                foreach($autos as $a){

                                    $cont++;?>

                                

                                    <td>

                                        <div>

                                            <?php $img = (empty($a['imagenes'])) ? 'admin/fotos/generico/188x114/sin-imagen.jpg' : 'admin/fotos/'.$a['idauto'].'/188x114/'.$a['imagenes'][0]['nombre'];?>

                                            <img src="<?php echo $img;?>" alt='<?php echo $a['marca'].' '.$a['modelo'];?>' /><br />

                                            <p>Marca: <?php echo $a['marca'];?> </p>

                                            <p>Modelo: <?php echo $a['modelo'];?></p>

                                            <p>Precio: <?php echo $a['precio'];?></p>

                                            <p><a href="auto-detalle1.php?a=<?php echo $a['idauto'];?>">Ver Más >></a> </p>

                                        </div>

                                    </td>

                                

                                <?php

                                    if($cont == 5){

                                        echo '</tr><tr>';

                                    }

                                }

                                

                                for($i = $cont; $i < 5; $i++){

                                    echo '<td style="width:20%;">&nbsp;</td>';

                                }

                                ?>

                                </tr>

                                

                            </table>

                            <?php

                            }else{?>

                              <p>No se ha encontrado información</p>  

                            <?php

                            }

                            ?>

                        </div>





                    </div>

                </div>





                <? include "includes/footer.php"; ?>

            </div>

        </div>

        <!-- JS includes -->

        <script type="text/javascript">

            if (document.location.protocol != 'https:')

                document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');

        </script>

        <script type="text/javascript">

            window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');

        </script>

        <script src="scripts/museutils.js?441941709" type="text/javascript"></script>

        <script src="scripts/jquery.musemenu.js?3788803530" type="text/javascript"></script>

        <script src="scripts/jquery.musepolyfill.bgsize.js?3956991090" type="text/javascript"></script>

        <script src="scripts/webpro.js?197321703" type="text/javascript"></script>

        <script src="scripts/musewpslideshow.js?4283859919" type="text/javascript"></script>

        <script src="scripts/jquery.museoverlay.js?3836522771" type="text/javascript"></script>

        <script src="scripts/touchswipe.js?4156838003" type="text/javascript"></script>

        <script src="scripts/jquery.watch.js?4068933136" type="text/javascript"></script>

        <!-- Other scripts -->

        <script type="text/javascript">

            $(document).ready(function() {

                try {

                    Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */

                    Muse.Utils.prepHyperlinks(true);/* body */

                    Muse.Utils.initWidget('.MenuBar', function(elem) {

                        return $(elem).museMenu();

                    });/* unifiedNavBar */

                    Muse.Utils.initWidget('#pamphletu1073', function(elem) {

                        new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime: 'loose', event: 'mouseover_canRollout', deactivationEvent: 'mouseout_trigger', autoPlay: false, displayInterval: 3000, transitionStyle: 'fading', transitionDuration: 500, hideAllContentsFirst: true, shuffle: false, enableSwipe: true});

                    });/* #pamphletu1073 */

                    Muse.Utils.fullPage('#page');/* 100% height page */

                    Muse.Utils.showWidgetsWhenReady();/* body */

                    Muse.Utils.transformMarkupToFixBrowserProblems();/* body */

                } catch (e) {

                    Muse.Assert.fail('Error calling selector function:' + e);

                }

            });

        </script>

    </body>

</html>

