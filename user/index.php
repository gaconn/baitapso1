<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--  HTML CSS Template Designed by w w w . t e m p l a t e m o . c o m  --> 

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Photography Website, Photo Gallery, Free CSS Templates</title>

<meta name="keywords" content="Photography Website, Photo Gallery, Gallery Website, free website templates, CSS HTML, templatemo.com" />

<meta name="description" content="Photography Website or Photo Gallery - free HTML CSS layout provided by TemplateMo.com" />

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="jquery-1.2.6.min.js"></script>

<script type="text/javascript" src="jquery.galleriffic.js"></script>

</head>

<body>

<div id="templatemo_container">
  <?php include "./subpages/section1.php" ?>
  <?php include "./subpages/section2.php" ?>
  <?php include "./subpages/section3.php" ?>
  <?php include "./subpages/section4.php" ?>
  <?php include "./subpages/section5.php" ?>
  <?php include "./subpages/contentLeft.php" ?>
  <?php include "./subpages/contentRight.php" ?>
</div>

<div id="templatemo_footer_link">

  <?php include "./subpages/footerMenu.php" ?>

</div>

<div id="templatemo_footer">

  <?php include "./subpages/footerInfo.php" ?>

</div>

<script type="text/javascript">			

			$(document).ready(function() {

				var gallery = $('#gallery').galleriffic('#navigation', {

					delay:                2000,

					numThumbs:            12,

					imageContainerSel:    '#slideshow',

					controlsContainerSel: '#controls',

					titleContainerSel:    '#image-title',

					descContainerSel:     '#image-desc',

					downloadLinkSel:      '#download-link'

				});


				gallery.onFadeOut = function() {

					$('#details').fadeOut('fast');

				};


				gallery.onFadeIn = function() {

					$('#details').fadeIn('fast');

				};

			});

</script>

</body>
<!--  HTML CSS Template Designed by w w w . t e m p l a t e m o . c o m  --> 
</html>