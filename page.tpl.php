<?php

//printr($user); exit;
//printr($cmtls); exit;

?><!DOCTYPE html>
<html dir="<?php print $language->dir; ?>" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
<?php  print $head; // turn off for faster pageloads ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>

<?php print $scripts; ?>

</head>

<body class="test" style="background: url(<?=base_path()?>/sites/all/themes/imaginarium/img/demo/gray_gradient_back.gif) repeat-x;">

<?php print $header; // block-imagimodule-0.tpl.php prints top stripe. Ideally it would be here - print $top_stripe; ?>

<div class="centerfold content_plus_navi_with" >

<?php print $headerimage; // block-imagimodule-2.tpl.php prints header image + map. ?>

	<div class="content_and_navigation content_plus_navi_with">
    
	<div class="navigation">
		<?  print $im_navigation; // block-imagimodule-1.tpl.php prints main navigation ?>
    </div>	
		
    <div class="content_container content_width" >

	<? print $group_header; // block-imagimodule-3.tpl.php prints group header ?>

		<?php print $tabs; ?>
        <?php print $tabs2; ?>
        <?php if ($show_messages && $messages): print $messages; endif; ?>
        <?php print $help; ?>

		<?php  print $content; // enable me for reality ?>
		<? // include "content_dummy.php"; ?>
        

         <?php print $footer_message . $footer ?>
    
    
		
		</div><!-- CONTENT CONTAINER end -->
	
		<div class="clearer"></div>
	
	</div><!-- content_and_navigation end -->
         
</div><!-- centerfold end -->
<?php print $closure ?>
</body>
</html>