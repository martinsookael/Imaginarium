
<script type="text/javascript">
	$(document).ready(function() { // DISPLAY / HIDE MAP
			$("a.show_map").click(function(){
				if ($("div.header_container").find("div.header_map").is(":hidden")) {
					$('div.header_map').load('<?=base_path()?>/sites/all/themes/imaginarium/map.html', function() {
						$("div.top_stripe_buttons").find("a.show_map").css({color:"#0066cc"}); // I want to be dynamic!
						$("div.header_container").find("div.header_map:hidden").slideDown("slow"); 
						$("div.header_container").find("div.header_image:visible").hide(); 
					});
				}
				else {
					$("div.header_container").find("div.header_map:visible").slideUp("slow", 
						function() {
							$("div.top_stripe_buttons").find("a.show_map").css({color:"#000000"}); // I want to be dynamic!
							$("div.header_container").find("div.header_image:hidden").slideDown();							$("div.header_container").find("div.header_image:visible").css({postion:"absolute",top:"0"}); // I want to be dynamic!
					
						}
					);				
				}
			});
		});




	$(document).ready(function() { // WIDTHPREVIEW PURPOPSES
		$( "button, input:submit, a", ".width_demo_area" ).button();
	
			$("a.width_870").click(function(){
				$(".content_plus_navi_with").css({'width': '870px'}); 
				$(".content_width").css({'width': '650px'}); 
			});

			$("a.width_970").click(function(){
				$(".content_plus_navi_with").css({ 'width': '970px'}); 
				$(".content_width").css({ 'width': '750px'}); 
			});
	
			$("a.width_775").click(function(){
				$(".content_plus_navi_with").css({ 'width': '775px'}); 
				$(".content_width").css({ 'width': '550px'}); 
			});

			$("a.width_700").click(function(){
				$(".content_plus_navi_with").css({ 'width': '700px'}); 
				$(".content_width").css({ 'width': '470px'}); 
			});


		});

</script>

	<div class="header_container content_plus_navi_with">
		<div class="header_map hidden content_plus_navi_with" >
		</div>
		
		<div class="header_image content_plus_navi_with" >
			<a class="header_link" href="#"><?=$GLOBALS['conf']['site_name'];?></a>
		</div>
        
        <div class="width_demo_area margin_left" style="margin-top: -35px;" > <!-- this div is for preview purposes - do not include to code -->
			<a href="#" class="width_700" >700</a>	
			<a href="#" class="width_775" >775</a>	
			<a href="#" class="width_870" >870</a>	
			<a href="#" class="width_970" >970</a>	
        	
        </div>
	</div><!-- header container end -->