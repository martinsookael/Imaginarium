			<script type="text/javascript">
				$(function() { // GENERATE BUTTONS FOR CONTENT HEADER CONTROLS
					$( "button, input:submit, a", ".content_header_controls" ).button();
					$( "a", ".content_header_controls" ).css({ 'padding-top': '0px', 'padding-bottom': '0px', 'font-size': '8pt'});				
					$( "a.gray", ".content_header_controls" ).css({ 'background': '#999999', 'border': '1px solid #999999', 'color': '#ffffff'});				
					$( "a.default", ".content_header_controls" ).css({ 'background': '#0066cc', 'border': '1px solid #0066cc', 'color': '#ffffff'});				
					$( "a", ".content_header_controls" ).click(function() { return false; });
				});
			</script>
			
			<div class="content_header_controls float_right">
				<a href="#" >Lahku</a>	
				<a href="#" class="gray" >Seaded</a>	
				<a href="#" class="gray" >Liikmed</a>	
				<a href="#" class="default" >+ Lisa</a>	
			</div>
		
			<div class="group_icon_container_big float_left">
				<a href="#"><img src="<?=base_path()?>/sites/all/themes/imaginarium/img/demo/group_imaginaarium_big.jpg" class="size_70" alt="Imaginaarium" /></a>			
			</div>
		
	        <h1><a href="#" class="no_decoration black" >
	        	Imaginaarium 
	        </a></h1>
			
			<span class="gray">
				kirjuta, pildista, joonista, luuleta, postita
			</span>
		
			<br />
						
			<div class="breadcrumbs" >	
			<!--		
					<form>
						<select>
							<option value="1" >CI 15 - Marko Kivimäe (12)</option>
							<option value="1" >CI 13.3 - Marko Kivimäe (6)</option>
							<option value="1" >CI 6 - Marko Kivimäe (25)</option>
							<option value="1" >CI 13 - Liisa Täherand (41)</option>
							<option value="1" >CI 5 - Marko Kivimäe (24)</option>
							<option value="1" >CI 4 - Marko Kivimäe (20)</option>
							<option value="1" >CI 4 -Liina Luhats (67)</option>
						</select>
						 > IMG_1234.JPG
					</form>	
					<div class="clearer"></div>
			-->
			</div>	
