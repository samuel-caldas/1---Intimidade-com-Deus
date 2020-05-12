<?php header('Content-type:text/css'); ?>
@charset "utf-8";
.pag, .paw{
	height: <?php echo($_GET['h']) ?>px;
}
#inicio{
	height: <?php echo($_GET['h']) ?>px;
}
#capa{
    width: <?php echo($_GET['w']-250) ?>px;
}
#tabcover{
	height: <?php echo($_GET['h']) ?>px;
	width: <?php echo($_GET['w']-250) ?>px;
}
*{
	font-family: "Segoe UI";
	font-weight: lighter;
    -webkit-transition: all 1s;
	-moz-transition: all 1s;
	-ms-transition: all 1s;
	-o-transition: all 1s;
	transition: all 1s;
}