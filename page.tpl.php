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
</head>


<body<?php $cmtls['current_group_properties']['background_image'] ? print ' style="background-image: url('.$cmtls['current_group_properties']['background_image'].'"' : NULL; ?>>


<div class="top_stripe" >

	<div class="top_stripe_left">
		<a href="http://www.communitytools.info" target="_blank" class="no_decoration"><img class="ct_logo" src="sites/all/themes/imaginarium/img/ct.png" alt="Community Tools logo" /></a>
		<a href="#" class="no_decoration black strong">Imaginaarium</a> - beta
	</div>

<script type="text/javascript">
	$(function() { // GENERATE BUTTONS FOR TOP STRIPE MENU
		$( "button, input:submit, a", ".top_stripe_buttons" ).button();
		$( "a", ".top_stripe_buttons" ).css({ 'padding-top': '3px', 'padding-bottom': '0px'});				
		//$( "a.gray", ".top_stripe_buttons" ).css({ 'background': '#999999 url(images/ui-bg_flat_100_999999_40x100.png) 50% 50% repeat-x', 'border': '1px solid #999999'});				
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

<? /*



	
	<div class="filters">
			<a href="javascript:void(0);" onclick="mapLocationSwitcer('map-only');"><?php print t('Map'); ?></a> |
			<a href="javascript:void(0);" onclick="mapLocationSwitcer('text-map');"><?php print t('Map and Text'); ?></a> |
			<a href="javascript:void(0);" onclick="mapLocationSwitcer('text-only');"><?php print t('Text'); ?></a>
	</div>
	
	<?php print $cmtls['map']['layer_switcher']; ?>

	<div id="header">
		<div class="header-container">

			<div id="cmtls-site-menu">
				<ul id="cmtls-select-group-menu">
					<li><a href="" class="select-group-menu"><span><?php print ($user->uid ? t('My groups') : t('Groups')); ?></span></a></li>
				</ul>
				<?php print $cmtls_site_menu; ?>
			</div>

			<?php if($user->uid): ?>
				<?php print views_embed_view('cmtls_groups', 'default', $user->uid); ?>
			<?php else: ?>
				<?php print views_embed_view('cmtls_groups', 'default'); ?>
			<?php endif; ?>

			<div class="community-name">
				<?php print l('', $base_url, array('attributes' => array('class' => 'logo'))); ?>
				<div class="community-title"><?php print l($site_name, 'cmtls/'.$cmtls['main_group']->nid); ?></div>
				<?php if($cmtls['main_group']->nid != $cmtls['current_group']->nid): ?>
					<div class="arrow-right">&gt;</div>
					<div class="current-group-name"><?php print l($cmtls['current_group']->title, 'cmtls/'.$cmtls['current_group']->nid, array('attributes' => array('class' => ($cmtls['current_group']->og_private ? 'closed' : '')))); ?></div>
				<?php endif; ?>
					<?php if($user->uid): ?>
						<?php if(og_is_group_member($cmtls['current_group'], FALSE)): ?>
							<?php print l(t('(Members)'), 'cmtls/'.$cmtls['current_group']->nid.'/members', array('attributes' => array('class' => 'ct-members-join'))); ?>
						<?php else: ?>
							<?php print l(t('(Join group)'), 'cmtls/'.$cmtls['current_group']->nid.'/join', array('attributes' => array('class' => 'ct-members-join modalframe-child'))); ?>
						<?php endif; ?>
					<?php endif; ?>				
			</div>

			<?php print l('', $base_url, array('attributes' => array('class' => 'back-to-website-button'))); ?>

		</div>

		<div class="background-image"<?php $cmtls['current_group_properties']['background_image'] ? print ' style="background-image: url('.$cmtls['current_group_properties']['background_image'].'"' : NULL; ?>></div>
		<div class="background"></div>


		<?php if($user->uid): ?>
		<div class="profile-background">
			<ul class="profile-selector">
				<li>
					<a href="javascript:void(0);"><?php print t('My stuff'); ?></a>
					<ul class="hidden">
						<li><?php print l(t('Profile'), 'cmtls/'.$cmtls['main_group']->nid.'/member/'.$user->uid); ?></li>
						<li><?php print l(t('Groups'), 'cmtls/list'); ?></li>
						<li><?php print l(t('Log out'), 'logout'); ?></li>
					</ul>
				</li>
			</ul>
		</div>

		<?php else: ?>
		<div class="profile-background">
			<ul class="profile-selector">
				<li>
					<a href="javascript:void(0);"><?php print t('Account'); ?></a>
					<ul class="hidden">
						<li><?php print l(t('Login'), 'cmtls/login', array('attributes' => array('class' => 'modalframe-child'))); ?></li>
						<li><?php print l(t('Register'), 'cmtls/register', array('attributes' => array('class' => 'modalframe-child'))); ?></li>
					</ul>
				</li>
			</ul>
		</div>
		<?php endif; ?>


	</div>

	<?php print views_embed_view('cmtls_apps', 'default', $cmtls['current_group']->nid); ?>

	<div id="content" class="<?php print $cmtls['map']['class'] ? $cmtls['map']['class'] : 'text-only'; ?>">
		<div id="text-container">
			<?php print $content; ?>
			<div id="pre-footer"></div>
			<div id="footer"><?php print $footer_message . $footer ?></div>
		</div>

		<div id="map"><?php print $cmtls['map']['output']; ?></div>
	</div>


	<?php print $closure ?>
*/ ?>
</body>
</html>