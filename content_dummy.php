

				<script type="text/javascript">
					$(document).ready(function() { // DISPLAY / HIDE MAP
							$("a.show_map_2").click(function(){
								if ($("div.node_nr_1_content").find("div.map_container_node_nr_1").is(":hidden")) {
									$('div.map_container_node_nr_1').load('<?=base_path()?>/sites/all/themes/imaginarium/map_2.html', function() {
										$("div.node_nr_1_content").find("div.map_container_node_nr_1:hidden").slideDown("slow"); 
									});
								}
								else {
									$("div.node_nr_1_content").find("div.map_container_node_nr_1:visible").slideUp("slow");				
								}
							});
						});
				
				</script>

			
	  			<div class="size_40 float_left relative"><!-- user avatar -->
	  				<a href="#">
						<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/demo/avatar_al.jpg" class="size_40 absolute" alt="avatar" />
						<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/40px_avatar_sq.png" class="absolute" alt="avatar_brdrs" />
					</a>
				</div>

				<div class="float_left margin_left_medium push_up_very_small">	<!-- user and tool name -->				
					<a href="#" class="black no_decoration">
						<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/icon_lock.gif" alt="private" class="size_10" />
						Al Pacino<span class="gray">:</span>
					</a>
					<a href="#" class="no_decoration">&nbsp;Müüa</a>
				</div>

				<div class="float_right gray push_up_very_small" ><!-- metadata & edit -->
					<a href="#" class="gray no_decoration">link</a> |
					<a href="#" class="modalframe-child"><img src="<?=base_path()?>/sites/all/themes/imaginarium/img/icon_edit_gray.gif" alt="edit" class="size_10" /></a> |
					14. aprill 2010 |
					<a href="#" class="show_map_2 no_decoration" onClick="return false;" ><img src="<?=base_path()?>/sites/all/themes/imaginarium/img/icon_location.png" alt="location" class="size_14 push_down_very_small" /> Times Square, NY</a>
				</div>
			
				<h2><a href="#" class="no_decoration">&nbsp;Müüa takso, heas korras, kollast värvi</a></h2>
			
				<div class="node_nr_1_content darkest_gray margin_top_medium">
					<div class="map_container_node_nr_1 hidden margin_bottom margin_top">
					</div>
					
					<a href="#"><img class="float_right border_lightest_gray margin_left margin_bottom" alt="yellow_cab.jpg" src="<?=base_path()?>/sites/all/themes/imaginarium/img/demo/yellow_cab.jpg" /></a>
					
					Ma pean ütlema, et kui ma seda kõike nägin ja kogesin, siis ma olin pahviks löödud, pehmelt väljendudes.
					ma hakkasin higistama, muutusin närvilseks, sebisin ringi, ahmisin õhku. kirusin ennast, et piisavalt vene keelt ei mõista.
					see oli just umbes siis, kui minu kodu miinused mulle selgeks said, just umbes siis kui mõistsin, et minu vahendid ei luba mul seda millegi unistustele vastavama vastu vahetada.
					laur kaunissaare leitud autojuht, kes meid david garejat vaatama viis, rääkis tagasiteel, et tal on väike kollektsioon, kas tahame näha. paar korda tõi selle tagasihoidlikult teemaks, meie kõik jäime äraootavale...		
				
					<br />
					<a href="#"><img class="border_lightest_gray margin_right_small margin_top_small borderspace size_50" alt="taxi_1.jpg" src="<?=base_path()?>/sites/all/themes/imaginarium/img/demo/taxi_1.jpg" /></a>
					<a href="#"><img class="border_lightest_gray margin_right_small margin_top_small borderspace size_50" alt="taxi_2.jpg" src="<?=base_path()?>/sites/all/themes/imaginarium/img/demo/taxi_2.jpg" /></a>
				</div>
				
				<div class="comments_container center margin_top_medium">
					<div class="comment_background_top"></div>
					<div class="comment_background_middle">
						
						<a href="#" class="no_decoration float_left margin_left_medium margin_top_small">8 kommentaari</a>
						<div class="float_right margin_right_medium margin_top_small">
							<a href="#" class="no_decoration">Jaga</a> | <a href="#"><img class="push_down_small" src="<?=base_path()?>/sites/all/themes/imaginarium/img/like.gif" alt="like" /></a> 
						</div>
						<div class="clearer size_10" ></div>
						

<script type="text/javascript">
	$(document).ready(function() {
			$("a.show_all_comments_1").click(function(){
					$("a.show_all_comments_1:visible").hide("fast"); 
					$("a.show_last_5_comments_1:hidden").show("fast"); 
					$("div.hidden_comments_nr_1:hidden").show(); 
			});

			$("a.show_last_5_comments_1").click(function(){
					$("a.show_all_comments_1:hidden").show("fast"); 
					$("a.show_last_5_comments_1:visible").hide("fast"); 
					$("div.hidden_comments_nr_1:visible").hide(); 
			});
		});
</script>


						<div class="comment_cell_container push_up_small container_for_show_more_comments_1"><!-- one commentcell -->
							<div class="comment_cell_top"></div>
							<div class="comment_cell_middle">
								<div class="comment_cell_content_show_all_comments darkest_gray">						
									<a href="#" onClick="return false;" class="no_decoration show_all_comments_1">
										-- Näita kõiki kommentaare (3 veel) --
									</a> 
									<a href="#" onClick="return false;" class="no_decoration hidden show_last_5_comments_1">
										-- Näita ainult viimased 5 kommentaari --
									</a> 
								</div>
							</div>
							<div class="comment_cell_bottom"></div>
						</div> <!-- one commentcell end -->

						<div class="hidden_comments_nr_1 hidden">
							<div class="comment_cell_container push_up_small"><!-- one commentcell -->
								<div class="comment_cell_top"></div>
								<div class="comment_cell_middle">
									<div class="comment_cell_content darkest_gray">						
							  			<div class="size_40 float_left relative margin_right_medium push_up_very_small"><!-- user avatar / same as news header -->
							  				<a href="#">
												<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/demo/avatar_nicole.jpg" class="size_40 absolute" alt="avatar" />
												<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/40px_avatar_sq.png" class="absolute" alt="avatar_brdrs" />
											</a>
										</div>
										<div class="float_right margin_right_small gray">
											14. aprill 2011 18:57 <a href="#" class="dark_red no_decoration">x</a>
										</div>
										<a href="#" class="black no_decoration"><strong>Nicole Kidman:</strong></a><br />
										3 Pika teksti test <br>
										Ma pean ütlema, et kui ma seda kõike nägin ja kogesin, siis ma olin pahviks löödud, pehmelt väljendudes. ma hakkasin higistama, muutusin närvilseks, sebisin ringi, ahmisin õhku. kirusin ennast, et piisavalt vene keelt ei mõista. see oli just umbes siis, kui minu kodu miinused mulle selgeks said, just umbes siis kui mõistsin, et minu vahendid ei luba mul seda millegi unistustele vastavama vastu vahetada. laur kaunissaare leitud autojuht, kes meid david garejat vaatama viis, rääkis tagasiteel, et tal on väike kollektsioon, kas tahame näha. paar korda tõi selle tagasihoidlikult teemaks, meie kõik jäime äraootavale...	

									</div>
								</div>
								<div class="comment_cell_bottom"></div>
							</div> <!-- one commentcell end -->
							<div class="comment_cell_container push_up_small"><!-- one commentcell -->
								<div class="comment_cell_top"></div>
								<div class="comment_cell_middle">
									<div class="comment_cell_content darkest_gray">						
							  			<div class="size_40 float_left relative margin_right_medium push_up_very_small"><!-- user avatar / same as news header -->
							  				<a href="#">
												<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/demo/avatar_nicole.jpg" class="size_40 absolute" alt="avatar" />
												<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/40px_avatar_sq.png" class="absolute" alt="avatar_brdrs" />
											</a>
										</div>
										<div class="float_right margin_right_small gray">
											14. aprill 2011 18:57 <a href="#" class="dark_red no_decoration">x</a>
										</div>
										<a href="#" class="black no_decoration"><strong>Nicole Kidman:</strong></a><br />
										2 
									</div>
								</div>
								<div class="comment_cell_bottom"></div>
							</div> <!-- one commentcell end -->
							<div class="comment_cell_container push_up_small"><!-- one commentcell -->
								<div class="comment_cell_top"></div>
								<div class="comment_cell_middle">
									<div class="comment_cell_content darkest_gray">						
							  			<div class="size_40 float_left relative margin_right_medium push_up_very_small"><!-- user avatar / same as news header -->
							  				<a href="#">
												<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/demo/avatar_nicole.jpg" class="size_40 absolute" alt="avatar" />
												<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/40px_avatar_sq.png" class="absolute" alt="avatar_brdrs" />
											</a>
										</div>
										<div class="float_right margin_right_small gray">
											14. aprill 2011 18:57 <a href="#" class="dark_red no_decoration">x</a>
										</div>
										<a href="#" class="black no_decoration"><strong>Nicole Kidman:</strong></a><br />
										1 
									</div>
								</div>
								<div class="comment_cell_bottom"></div>
							</div> <!-- one commentcell end -->
						</div><!-- hidden comments end -->









						<div class="comment_cell_container push_up_small"><!-- one commentcell -->
							<div class="comment_cell_top"></div>
							<div class="comment_cell_middle">
								<div class="comment_cell_content darkest_gray">						
						  			<div class="size_40 float_left relative margin_right_medium push_up_very_small"><!-- user avatar / same as news header -->
						  				<a href="#">
											<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/demo/avatar_nicole.jpg" class="size_40 absolute" alt="avatar" />
											<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/40px_avatar_sq.png" class="absolute" alt="avatar_brdrs" />
										</a>
									</div>
									<div class="float_right margin_right_small gray">
										14. aprill 2011 18:57 <a href="#" class="dark_red no_decoration">x</a>
									</div>
									<a href="#" class="black no_decoration"><strong>Nicole Kidman:</strong></a><br />
									Päriselt ka müüd maha või?
								</div>
							</div>
							<div class="comment_cell_bottom"></div>
						</div> <!-- one commentcell end -->
	
						<div class="comment_cell_container push_up_small"> <!-- one commentcell -->
							<div class="comment_cell_top"></div>
							<div class="comment_cell_middle">
								<div class="comment_cell_content darkest_gray">						
						  			<div class="size_40 float_left relative margin_right_medium push_up_very_small"><!-- user avatar / same as news header -->
						  				<a href="#">
											<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/demo/avatar_al.jpg" class="size_40 absolute" alt="avatar" />
											<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/40px_avatar_sq.png" class="absolute" alt="avatar_brdrs" />
										</a>
									</div>
									<div class="float_right margin_right_small gray">
										14. aprill 2011 18:58 <a href="#" class="dark_red no_decoration">x</a>
									</div>
									<a href="#" class="black no_decoration"><strong>Al Pacino:</strong></a><br />
									Nii on, kullake.	
								</div>
							</div>
							<div class="comment_cell_bottom"></div>
						</div><!-- one commentcell end -->
	
						<div class="comment_cell_container push_up_small"> <!-- one commentcell -->
							<div class="comment_cell_top"></div>
							<div class="comment_cell_middle">
								<div class="comment_cell_content darkest_gray">						
						  			<div class="size_40 float_left relative margin_right_medium push_up_very_small"><!-- user avatar / same as news header -->
						  				<a href="#">
											<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/demo/avatar_matt.jpg" class="size_40 absolute" alt="avatar" />
											<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/40px_avatar_sq.png" class="absolute" alt="avatar_brdrs" />
										</a>
									</div>
									<div class="float_right margin_right_small gray">
										14. aprill 2011 18:59 <a href="#" class="dark_red no_decoration">x</a>
									</div>
									<a href="#" class="black no_decoration"><strong>Matt Damon:</strong></a><br />
									Kuule, see pilt on Sul täiega photoshopitud. 
								</div>
							</div>
							<div class="comment_cell_bottom"></div>
						</div><!-- one commentcell end -->
	
						<div class="comment_cell_container push_up_small"> <!-- one commentcell -->
							<div class="comment_cell_top"></div>
							<div class="comment_cell_middle">
								<div class="comment_cell_content darkest_gray">						
						  			<div class="size_40 float_left relative margin_right_medium push_up_very_small"><!-- user avatar / same as news header -->
						  				<a href="#">
											<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/demo/avatar_al.jpg" class="size_40 absolute" alt="avatar" />
											<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/40px_avatar_sq.png" class="absolute" alt="avatar_brdrs" />
										</a>
									</div>
									<div class="float_right margin_right_small gray">
										14. aprill 2011 19:00 <a href="#" class="dark_red no_decoration">x</a>
									</div>
									<a href="#" class="black no_decoration"><strong>Al Pacino:</strong></a><br />
									Nii on. 
								</div>
							</div>
							<div class="comment_cell_bottom"></div>
						</div><!-- one commentcell end -->

						<div class="comment_cell_container push_up_small"> <!-- one commentcell -->
							<div class="comment_cell_top"></div>
							<div class="comment_cell_middle">
								<div class="comment_cell_content darkest_gray">						
						  			<div class="size_40 float_left relative margin_right_medium push_up_very_small"><!-- user avatar / same as news header -->
						  				<a href="#">
											<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/demo/avatar_al.jpg" class="size_40 absolute" alt="avatar" />
											<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/40px_avatar_sq.png" class="absolute" alt="avatar_brdrs" />
										</a>
									</div>
									<div class="float_right margin_right_small gray">
										14. aprill 2011 19:00 <a href="#" class="dark_red no_decoration">x</a>
									</div>
									<a href="#" class="black no_decoration"><strong>Al Pacino:</strong></a><br />
									Ostan jalgratta. 
								</div>
							</div>
							<div class="comment_cell_bottom"></div>
						</div><!-- one commentcell end -->

						<div class="comment_cell_container push_up_small"> <!-- one commentcell -->
							<div class="comment_cell_top"></div>
							<div class="comment_cell_middle">
								<div class="comment_cell_content darkest_gray">						
						  			<div class="size_40 float_left relative margin_right_medium push_up_very_small"><!-- user avatar / same as news header -->
						  				<a href="#">
											<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/demo/avatar_al.jpg" class="size_40 absolute" alt="avatar" />
											<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/40px_avatar_sq.png" class="absolute" alt="avatar_brdrs" />
										</a>
									</div>
									
							        <pre style="display:none;">$('textarea').autogrow();</pre>
									<form>
										<div class="comment_buttons" style="width: 60px; float: right;">
											<img src="<?=base_path()?>/sites/all/themes/imaginarium/img/demo/test_wysiwg.gif" style="margin-left: 5px;" />
											<a href="#" onClick="return false;">Save</a>
										</div>
										<textarea style="width: 390px; max-width: 390px; height: 40px;"></textarea>
									</form>
									<script type='text/javascript'>
										$( "button, input:submit, a", ".comment_buttons" ).button();
										$( "button, input:submit, a", ".comment_buttons" ).css({ 'background': '#0066cc', 'border': '1px solid #0066cc', 'color': '#ffffff'});				

									  $(function() {
									    $('textarea').autogrow();
									  });
									</script>
								</div>
							</div>
							<div class="comment_cell_bottom"></div>
						</div><!-- one commentcell end -->
	
	
	
					</div>
					<div class="comment_background_bottom"></div>
					
					
				</div><!-- comments container end -->
			
			
			


				<hr />		
