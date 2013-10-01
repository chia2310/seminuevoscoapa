<?php
include("sistema/index.php");
$get = $_GET;
$id = (isset($get['a'])) ? $get['a'] : 0;
$auto = AM_get_one($id);
?>
<!DOCTYPE html>
<html class="html">
    <head>

        <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
        <meta name="generator" content="6.0.751.219"/>
        <link rel="shortcut icon" href="images/a-pagina-maestra-favicon.ico?486103517"/>
        <title>auto detalle1</title>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/index.css?359703833" id="pagesheet"/>
        <link rel="stylesheet" type="text/css" href="css/site_global.css?117226940"/>
        <link rel="stylesheet" type="text/css" href="css/master_a-pagina-maestra.css?4201905536"/>
        <link rel="stylesheet" type="text/css" href="css/auto-detalle1.css?4223298083" id="pagesheet"/>
        <!-- Other scripts -->
        <script type="text/javascript">
            document.documentElement.className += ' js';
        </script>
    </head>
    <body>

        <div class="clearfix" id="page"><!-- column -->
            <div class="position_content" id="page_position_content">
                <a class="nonblock nontext colelem" id="u75" href="index.php"><!-- image --><img class="block" id="u75_img" src="images/logo-sc.png" alt="" width="408" height="109"/></a>
                <?php include "includes/header.php"; ?>
                <?php include "includes/buscador.php"; ?>
                <?php
                if(!empty($auto)){?>
                <div class="botonrojo clearfix colelem" id="u1275"><!-- group -->
                    <div class="clearfix grpelem" id="u1289-4"><!-- content -->
                        <p><span class="lucida-14-whit-bold"><?php echo $auto['modelo_descripcion'];?></span></p>
                    </div>
                </div>
                <div class="clearfix colelem" id="pslideshowu1126"><!-- group -->
                    
                    <!-- INICIO CARROUSEL 1 -->
                    <div class="SlideShowWidget clearfix grpelem" id="slideshowu1126"><!-- group -->
                        <div class="popup_anchor" id="u1168popup">
                            <div class="SlideShowContentPanel clearfix" id="u1168"><!-- stack box -->
                                <div class="SSSlide shadow clearfix grpelem" id="u1414"><!-- image -->
                                    <div id="u1414_clip">
                                        <?php $img = (!isset($auto['imagenes'][0]['nombre'])) ? 'admin/fotos/generico/460x360/sin-imagen.jpg' : 'admin/fotos/'.$auto['idauto_venta'].'/460x360/'.$auto['imagenes'][0]['nombre'];?>
                                        <img class="ImageInclude position_content" id="u1414_img" data-src="<?php echo $img;?>" src="images/blank.gif" alt="" data-width="480" data-height="383"/>
                                    </div>
                                </div>
                                <div class="SSSlide invi shadow clearfix grpelem" id="u1423"><!-- image -->
                                    <div id="u1423_clip">
                                        <img class="ImageInclude position_content" id="u1423_img" data-src="images/2.jpg" src="images/blank.gif" alt="" data-width="492" data-height="360"/>
                                    </div>
                                </div>
                                <div class="SSSlide invi shadow clearfix grpelem" id="u1432"><!-- image -->
                                    <div id="u1432_clip">
                                        <img class="ImageInclude position_content" id="u1432_img" data-src="images/3.jpg" src="images/blank.gif" alt="" data-width="590" data-height="360"/>
                                    </div>
                                </div>
                                <div class="SSSlide invi shadow clearfix grpelem" id="u1441"><!-- image -->
                                    <div id="u1441_clip">
                                        <img class="ImageInclude position_content" id="u1441_img" data-src="images/4.jpg" src="images/blank.gif" alt="" data-width="531" data-height="360"/>
                                    </div>
                                </div>
                                <div class="SSSlide invi shadow clearfix grpelem" id="u1450"><!-- image -->
                                    <div id="u1450_clip">
                                        <img class="ImageInclude position_content" id="u1450_img" data-src="images/5.jpg" src="images/blank.gif" alt="" data-width="480" data-height="399"/>
                                    </div>
                                </div>
                                <div class="SSSlide invi shadow clearfix grpelem" id="u1459"><!-- image -->
                                    <div id="u1459_clip">
                                        <img class="ImageInclude position_content" id="u1459_img" data-src="images/6.jpg" src="images/blank.gif" alt="" data-width="480" data-height="469"/>
                                    </div>
                                </div>
                                <div class="SSSlide invi shadow grpelem" id="u1468"><!-- image -->
                                    <img class="block ImageInclude" id="u1468_img" data-src="images/7.jpg" src="images/blank.gif" alt="" data-width="480" data-height="360"/>
                                </div>
                                <div class="SSSlide invi shadow grpelem" id="u1477"><!-- image -->
                                    <img class="block ImageInclude" id="u1477_img" data-src="images/8.jpg" src="images/blank.gif" alt="" data-width="480" data-height="360"/>
                                </div>
                                <div class="SSSlide invi shadow clearfix grpelem" id="u1486"><!-- image -->
                                    <div id="u1486_clip">
                                        <img class="ImageInclude position_content" id="u1486_img" data-src="images/9.jpg" src="images/blank.gif" alt="" data-width="480" data-height="387"/>
                                    </div>
                                </div>
                                <div class="SSSlide invi shadow grpelem" id="u1495"><!-- image -->
                                    <img class="block ImageInclude" id="u1495_img" data-src="images/10.jpg" src="images/blank.gif" alt="" data-width="480" data-height="360"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="SlideShowWidget clearfix widget_invisible grpelem" id="slideshowu3758"><!-- group -->
                        <div class="popup_anchor" id="u3794popup">
                            <div class="SlideShowContentPanel rgba-background clearfix" id="u3794"><!-- stack box -->
                                <div class="SSSlide grpelem" id="u3885"><!-- image -->
                                    <img class="block ImageInclude" id="u3885_img" data-src="images/12.jpg" src="images/blank.gif" alt="" data-width="844" data-height="674"/>
                                </div>
                                <div class="SSSlide invi grpelem" id="u3894"><!-- image -->
                                    <img class="block ImageInclude" id="u3894_img" data-src="images/dsc_1163.jpg" src="images/blank.gif" alt="" data-width="933" data-height="569"/>
                                </div>
                                <div class="SSSlide invi grpelem" id="u3903"><!-- image -->
                                    <img class="block ImageInclude" id="u3903_img" data-src="images/dsc_1160.jpg" src="images/blank.gif" alt="" data-width="921" data-height="674"/>
                                </div>
                                <div class="SSSlide invi grpelem" id="u3912"><!-- image -->
                                    <img class="block ImageInclude" id="u3912_img" data-src="images/dsc_1168.jpg" src="images/blank.gif" alt="" data-width="811" data-height="674"/>
                                </div>
                                <div class="SSSlide invi grpelem" id="u3921"><!-- image -->
                                    <img class="block ImageInclude" id="u3921_img" data-src="images/dsc_1170.jpg" src="images/blank.gif" alt="" data-width="933" data-height="666"/>
                                </div>
                                <div class="SSSlide invi grpelem" id="u3930"><!-- image -->
                                    <img class="block ImageInclude" id="u3930_img" data-src="images/dsc_1173.jpg" src="images/blank.gif" alt="" data-width="899" data-height="674"/>
                                </div>
                                <div class="SSSlide invi grpelem" id="u3939"><!-- image -->
                                    <img class="block ImageInclude" id="u3939_img" data-src="images/dsc_1176.jpg" src="images/blank.gif" alt="" data-width="836" data-height="674"/>
                                </div>
                                <div class="SSSlide invi grpelem" id="u3948"><!-- image -->
                                    <img class="block ImageInclude" id="u3948_img" data-src="images/dsc_1182-1-.jpg" src="images/blank.gif" alt="" data-width="899" data-height="674"/>
                                </div>
                                <div class="SSSlide invi grpelem" id="u3957"><!-- image -->
                                    <img class="block ImageInclude" id="u3957_img" data-src="images/dsc_1188.jpg" src="images/blank.gif" alt="" data-width="933" data-height="457"/>
                                </div>
                                <div class="SSSlide invi grpelem" id="u3966"><!-- image -->
                                    <img class="block ImageInclude" id="u3966_img" data-src="images/dsc_1193.jpg" src="images/blank.gif" alt="" data-width="690" data-height="674"/>
                                </div>
                            </div>
                        </div>
                        <div class="popup_anchor" id="u3762popup">
                            <div class="SSSlideLinks clearfix" id="u3762"><!-- horizontal-rows box -->
                                <div class="SSSlideLink clearfix grpelem" id="u3888"><!-- image -->
                                    <div id="u3888_clip">
                                        <img class="position_content" id="u3888_img" src="images/160x48.jpg" alt="" width="60" height="48"/>
                                    </div>
                                </div>
                                <div class="SSSlideLink clearfix grpelem" id="u3897"><!-- image -->
                                    <div id="u3897_clip">
                                        <img class="position_content" id="u3897_img" src="images/dsc_116374x45.jpg" alt="" width="74" height="45"/>
                                    </div>
                                </div>
                                <div class="SSSlideLink clearfix grpelem" id="u3906"><!-- image -->
                                    <div id="u3906_clip">
                                        <img class="position_content" id="u3906_img" src="images/dsc_116062x45.jpg" alt="" width="62" height="45"/>
                                    </div>
                                </div>
                                <div class="SSSlideLink clearfix grpelem" id="u3915"><!-- image -->
                                    <div id="u3915_clip">
                                        <img class="position_content" id="u3915_img" src="images/dsc_116860x50.jpg" alt="" width="60" height="50"/>
                                    </div>
                                </div>
                                <div class="SSSlideLink clearfix grpelem" id="u3924"><!-- image -->
                                    <div id="u3924_clip">
                                        <img class="position_content" id="u3924_img" src="images/dsc_117064x45.jpg" alt="" width="63" height="45"/>
                                    </div>
                                </div>
                                <div class="SSSlideLink grpelem" id="u3933"><!-- image -->
                                    <img class="block" id="u3933_img" src="images/dsc_117360x45.jpg" alt="" width="60" height="45"/>
                                </div>
                                <div class="SSSlideLink clearfix grpelem" id="u3942"><!-- image -->
                                    <div id="u3942_clip">
                                        <img class="position_content" id="u3942_img" src="images/dsc_117660x49.jpg" alt="" width="60" height="48"/>
                                    </div>
                                </div>
                                <div class="SSSlideLink grpelem" id="u3951"><!-- image -->
                                    <img class="block" id="u3951_img" src="images/dsc_1182-1-60x45.jpg" alt="" width="60" height="45"/>
                                </div>
                                <div class="SSSlideLink clearfix grpelem" id="u3960"><!-- image -->
                                    <div id="u3960_clip">
                                        <img class="position_content" id="u3960_img" src="images/dsc_118892x45.jpg" alt="" width="92" height="45"/>
                                    </div>
                                </div>
                                <div class="SSSlideLink clearfix grpelem" id="u3969"><!-- image -->
                                    <div id="u3969_clip">
                                        <img class="position_content" id="u3969_img" src="images/dsc_119360x59.jpg" alt="" width="60" height="59"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix grpelem" id="u1295-27"><!-- content -->
                        <p id="u1295-2"><span class="lucida-gris">Precio</span></p>
                        <p id="u1295-3">&nbsp;</p>
                        <p id="u1295-5"><span class="lucida-gris">Año</span></p>
                        <p id="u1295-6">&nbsp;</p>
                        <p id="u1295-8"><span class="lucida-gris">Kilometraje</span></p>
                        <p id="u1295-9">&nbsp;</p>
                        <!--<p id="u1295-11"><span class="lucida-gris">Combustible:</span></p>
                        <p id="u1295-12">&nbsp;</p>-->
                        <p id="u1295-14"><span class="lucida-gris">Transmisión:</span></p>
                        <p id="u1295-15">&nbsp;</p>
                        <p id="u1295-17"><span class="lucida-gris">Marca:</span></p>
                        <p id="u1295-18">&nbsp;</p>
                        <p id="u1295-20"><span class="lucida-gris">Modelo:</span></p>
                        <p id="u1295-21">&nbsp;</p>
                        <p id="u1295-23"><span class="lucida-gris">Versión:</span></p>
                        <p id="u1295-24">&nbsp;</p>
                        <p id="u1295-25">&nbsp;</p>
                    </div>
                    <div class="clearfix grpelem" id="pu1329-4"><!-- column -->
                        <div class="clearfix colelem" id="u1329-4"><!-- content -->
                            <p><span class="lucida-rojo">$<?php echo $auto['precio']; ?></span></p>
                        </div>
                        <div class="clearfix colelem" id="u1332-4"><!-- content -->
                            <p><span class="lucida-rojo"><?php echo $auto['anio']; ?></span></p>
                        </div>
                        <div class="clearfix colelem" id="u1333-4"><!-- content -->
                            <p><span class="lucida-rojo"><?php echo $auto['kilometraje']; ?></span></p>
                        </div>
                        <!--<div class="clearfix colelem" id="u1334-4">
                            <p><span class="lucida-rojo"><?php echo $auto['combustible']; ?></span></p>
                        </div>-->
                        <div class="clearfix colelem" id="u1335-4"><!-- content -->
                            <p><span class="lucida-rojo"><?php echo $auto['transmision']; ?></span></p>
                        </div>
                        <div class="clearfix colelem" id="u1336-4"><!-- content -->
                            <p><span class="lucida-rojo"><?php echo $auto['marca_descripcion']; ?></span></p>
                        </div>
                        <div class="clearfix colelem" id="u1337-4"><!-- content -->
                            <p><span class="lucida-rojo"><?php echo $auto['modelo_descripcion']; ?></span></p>
                        </div>
                        <div class="clearfix colelem" id="u1338-4"><!-- content -->
                            <p><span class="lucida-rojo"><?php echo $auto['version']; ?></span></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix colelem" id="u1308-4"><!-- content -->
                    <p><span class="lucida-gris">Descripción</span></p>
                </div>
                <div class="shadow rounded-corners clearfix colelem" id="u1546"><!-- group -->
                    <div class="clearfix grpelem" id="u1547-10"><!-- content -->
                        <p>
                            <span class="lucida-gris" id="u1547">
                                <?php echo $auto['descripcion']; ?>
                            </span>
                        </p>
                    </div>
                </div>
                <?php
                }else{?>
                <p>Upps... Link Roto</p>
                <?php
                }
                ?>
                <div class="clearfix colelem" id="u1535-7"><!-- content -->
                    <p><span class="lucida-gris" id="u1535">ACEPTAMOS TODAS LAS TARJETAS DE CRÉDITO Y DÉBITO (VISA Y MASTER CARD).</span></p>
                    <p><span class="lucida-gris" id="u1535-3">CONTAMOS CON PLANES DE FINANCIAMIENTO CON ENGANCHE DESDE EL 25% Y PLAZOS DE HASTA 36 MENSUALIDADES. (APLICAN RESTRICCIONES).</span><span class="lucida-gris" id="u1535-4"></span></p>
                </div>
                <div class="shadow rounded-corners clearfix colelem" id="u1533-11"><!-- content -->
                    <p id="u1533-2"><span class="lucida-gris" id="u1533">ESTAMOS UBICADOS AL SUR DE LA CIUDAD.</span></p>
                    <p id="u1533-4"><span class="lucida-gris" id="u1533-3">LLÁMENOS A LOS TELÉFONOS</span></p>
                    <p id="u1533-6"><span class="lucida-gris" id="u1533-5">63474016 (I.D. 92*20*1545)&nbsp; o 43250094 (I.D. 62*978739*4)</span></p>
                    <p id="u1533-8"><span class="lucida-gris" id="u1533-7">CON GUSTO LO ATENDEREMOS.</span></p>
                    <p id="u1533-9">&nbsp;</p>
                </div>
                <div class="clearfix colelem" id="u1536-4"><!-- content -->
                    <p>Entrega de nuestras unidades en el DF, Zona Metropolitana así como en el interior de la Republica Mexicana (aplica costo de envío).</p>
                </div>
                <?php include "includes/footer.php"; ?>
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
                    Muse.Utils.initWidget('#slideshowu1126', function(elem) {
                        new WebPro.Widget.ContentSlideShow(elem, {autoPlay: true, displayInterval: 3000, slideLinkStopsSlideShow: false, transitionStyle: 'fading', lightboxEnabled_runtime: false, shuffle: false, transitionDuration: 500, enableSwipe: true});
                    });/* #slideshowu1126 */
                    Muse.Utils.initWidget('#slideshowu3758', function(elem) {
                        new WebPro.Widget.ContentSlideShow(elem, {autoPlay: true, displayInterval: 3000, slideLinkStopsSlideShow: false, transitionStyle: 'fading', lightboxEnabled_runtime: true, shuffle: false, transitionDuration: 500, enableSwipe: true});
                    });/* #slideshowu3758 */
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
