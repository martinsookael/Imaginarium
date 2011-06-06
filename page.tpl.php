<?php

//printr($user); exit;
//printr($cmtls); exit;

?><!DOCTYPE html>
<html dir="<?php print $language->dir; ?>" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>

<script type="text/javascript" src="http://interruptus.ee/imaginarium/jquery/js/jquery-ui-1.8.10.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://interruptus.ee/imaginarium/jquery/css/edit-me/jquery-ui-1.8.10.custom.css" />

<link rel="stylesheet" type="text/css" href="http://interruptus.ee/imaginarium/edit_me.css" />


</head>


<body>


<div class="top_stripe" >

	<div class="top_stripe_left">
		<a href="http://www.communitytools.info" target="_blank" class="no_decoration"><img class="ct_logo" src="sites/all/themes/imaginarium/img/ct.png" alt="Community Tools logo" /></a>
		<a href="#" class="no_decoration black strong">Imaginaarium</a> - beta
	</div>

<script type="text/javascript">
	$(function() { // GENERATE BUTTONS FOR TOP STRIPE MENU
		$( "button, input:submit, a", ".top_stripe_buttons" ).button();
		$( "a", ".top_stripe_buttons" ).css({ 'padding-top': '3px', 'padding-bottom': '0px'});				
		$( "a", ".top_stripe_buttons" ).click(function() { return false; });
	});
</script>

	<div class="top_stripe_buttons" >
		<a href="#" >Foorum</a>	
		<a href="#" >Galerii</a>	
		<a href="#" >Videod</a>	
		<a class="show_map" href="#" >Kaart</a>	
	</div>

	<div class="top_stripe_right">
		Martin <a href="#" class="gray no_decoration small">(profiil</a> - <a href="#" class="gray no_decoration small">log out)</a>
	</div>	
</div>

</body>
</html>