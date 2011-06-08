<div class="top_stripe" >

	<div class="top_stripe_left">
		<a href="http://www.communitytools.info" target="_blank" class="no_decoration"><img class="ct_logo" src="<?=base_path()?>/sites/all/themes/imaginarium/img/ct.png" alt="Community Tools logo" /></a>
		<a href="<?=base_path()?>" class="no_decoration black strong"><?=$GLOBALS['conf']['site_name'];?></a> - beta
	</div>

<script type="text/javascript">
	$(function() { // GENERATE BUTTONS FOR TOP STRIPE MENU
		$( "button, input:submit, a", ".top_stripe_buttons" ).button();
		$( "a", ".top_stripe_buttons" ).css({ 'padding-top': '3px', 'padding-bottom': '0px', 'font-size': '9pt', 'color': '#333333'});				
		$( "a", ".top_stripe_buttons" ).click(function() { return false; });
	});
</script>

	<div class="top_stripe_buttons" >
		<a href="#" ><?=t('Forum')?></a>	
		<a href="#" ><?=t('Gallery')?></a>	
		<a href="#" ><?=t('Videos')?></a>	
		<a class="show_map" href="#" ><?=t('Map')?></a>	
	</div>

	<div class="top_stripe_right">
    
    <?php if($user->uid): ?>
		<?=$user->name?> <span class="gray small">(</span>
        <?php print  l(t('Settings'), 'cmtls/'.$cmtls['main_group']->nid.'/member/'.$user->uid, array('attributes' => array('class' => 'gray no_decoration small'))); ?>
         - 
        <?php print  l(t('Profile'), 'cmtls/'.$cmtls['main_group']->nid.'/member/'.$user->uid.'/edit/', array('attributes' => array('class' => 'gray no_decoration small modalframe-child'))); ?>
         - 
		<?php print l(t('Log out'), 'logout', array('attributes' => array('class' => 'gray no_decoration small modalframe-child'))); ?>         <span class="gray small">)</span>
        
	<?php else: ?>

        <?php print l(t('Login'), 'cmtls/login', array('attributes' => array('class' => 'gray no_decoration small modalframe-child'))); ?>
        -
        <?php print l(t('Register'), 'cmtls/register', array('attributes' => array('class' => 'gray no_decoration small modalframe-child'))); ?>

    <?php endif; ?>
        
	</div>	
</div>