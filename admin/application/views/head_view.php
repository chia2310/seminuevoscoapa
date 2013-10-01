<!DOCTYPE HTML>



<html>

<head>

	<title><?php echo $title ?></title>
	<meta charset="utf-8"/>
	

    <link rel="stylesheet" type="text/css" href="<?php echo base_url("bootstrap/css/bootstrap.css"); ?>" id="pagesheet"/>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap.js"); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url("../scripts/validanumerico.js"); ?>"></script>

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">



</head>



<body  bgcolor="#FFFFFF" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<div style="margin-left:95%" class:"pull-right"><i class="icon-signout icon-large"></i></div>

<div align="center"><br><img src="<?php echo base_url("../images/seminuevos_logo.jpg"); ?>" alt=""></div>

<div class="clearfix" id="page" align="center"><br><img src="<?php echo base_url("../images/coapa_logo.jpg"); ?>" alt=""><br><br>

    <?php 

		$tmp = $this->phpsession->flashget('acierto');

		if(!empty($tmp)){?>

			<div class="alert alert-success">

				<a href="#" class="close" data-dismiss="alert">×</a>

				<?php echo ($tmp); ?>

			</div>

		<?php

		}

		?>



		<?php 

		$tmp = $this->phpsession->flashget('error');

		if(!empty($tmp)){?>

			<div class="alert alert-error">

				<a href="#" class="close" data-dismiss="alert">×</a>

				<?php echo ($tmp); ?>

			</div>

		<?php

		}

		?>



		<?php 

		$tmp = validation_errors();

		if(!empty($tmp)){?>

			<div class="alert alert-error">

				<a href="#" class="close" data-dismiss="alert">×</a>

				<?php echo (validation_errors()); ?>

			</div>

		<?php

		}

		?>

    <?php

    $user = $this->phpsession->get('user');

        if (!empty($user)) {

    ?>

    <div>
<?php if($seccion=="nada"){
    
} else{
    ?>
    <a class="btn btn-primary" href="<?php echo site_url("panel/inventario?modelo=&marca=0&years=0&estatus=3&buscar=Buscar")?>">
    Inventario de autos
    </a>

    <a class="btn btn-primary"  href="<?php echo site_url("panel/alta")?>">
    Alta auto
    </a>
<?php }?>
    </div>

    <?php

    }

    ?>

    </div>

<div style="margin: 2%; width:96%; height: 100%; border:1px solid red;">