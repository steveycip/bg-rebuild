<?php
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
			<div class="meat <?php if(is_page('13')){
					echo 'contact';
					}  ?>"><!-- main content field-->

				<div class="max-width-container column">

				<?php //loop to get content
					if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>


					<? 

					// // check if the repeater field has rows of data
					// if( have_rows('repeater_field_name') ):

					//  	// loop through the rows of data
					//     while ( have_rows('repeater_field_name') ) : the_row();

					//         // display a sub field value
					//         the_sub_field('sub_field_name');

					//     endwhile;

					// else :

					//     // no rows found

					// endif;

					switch($post->post_name)
					{
					    case "portfolio" :
					    ?>
					    	<div class="about-mike">
					    		<h1 class="col-xs-12"> About the Swag Daddy </h1>
					    	<?
					        //echo 'class="project"';
						   ?>
						        <div class="col-xs-12 col-md-4 headshot">
									<img src="<?php the_field('headshot');?>" width="auto" height="500px">
								</div> 
						        <div class="col-xs-12 col-md-8 text">
						        	<?=get_field('about_text');?>
								</div>
							</div>
							<div class=" jams">
								<h1 class="col-xs-12"> Peep the Jams </h1>
								<?
						    	if( have_rows('sample_track') ):

									// $i=0;

						    		while ( have_rows('sample_track') ) : the_row(); 
								
								$type=get_sub_field('type');
								$title=get_sub_field('title');
								$embed=get_sub_field('link');

								switch($type){

									case"full_mix":

									?>
									<div class="type col-xs-12">
									<p> Here is a selection of tracks that I have done full mixes on. </p>
									</div>
									<div class="full-mix">
									<?
										if( have_rows('tracks') ):
											while ( have_rows('tracks') ) : the_row(); 

											$track=get_sub_field('track');

										?>
											<div class="track col-xs-6 ">
												 <?=$track;?> 
												<!-- count = <?=$i;?> -->
											</div>
										<?
										endwhile;
										?>
											<div class="clear"></div>
										</div>
										<?
										endif;
									break;

									case"tracking_only":
									?>
									<div class="type col-xs-12">
									<p> Here is a selection of tracks that I have tracked and were mixed elsewhere. </p>
									</div>
									<div class="full-mix">
									<?
										if( have_rows('tracks') ):
											while ( have_rows('tracks') ) : the_row(); 

											$track=get_sub_field('track');

										?>
											<div class="track col-xs-12 col-md-6">
												 <?=$track;?> 
												<!-- count = <?=$i;?> -->
											</div>
										<?
										endwhile; 
										?>
											<div class="clear"></div>
										</div>
										<?
										endif;
									break;
									case"mix_only":
									?>
									<div class="type col-xs-12 col-md-6">
									<p> Here is a selection of tracks that were mixed out of house and I have mixed. </p>
									</div>
									<div class="full-mix">
									<?
										if( have_rows('tracks') ):
											while ( have_rows('tracks') ) : the_row(); 

											$track=get_sub_field('track');

										?>
										<div class="track col-xs-12 col-md-6 ">
												 <?=$track;?> 
												<!-- count = <?=$i;?> -->
											</div>
										<?
										endwhile;
										?>
											<div class="clear"></div>
										</div>
										<?
										endif;
									break;
									case"vocals":
									?>
									<div class="type col-xs-12">
									<p> Here is a selection of tracks I recorded/edited vocals for. </p>
									</div>
									<div class="full-mix">
									<?
										if( have_rows('tracks') ):
											while ( have_rows('tracks') ) : the_row(); 

											$track=get_sub_field('track');

										?>
											<div class="track col-xs-12 col-md-6">
												 <?=$track;?> 
												<!-- count = <?=$i;?> -->
											</div>
										
										<?
										endwhile;
										?>
											<div class="clear"></div>
										</div>
										<?
										endif;
									break;
								}
							// $i++;
							endwhile; // end text content
							endif;
						    ?>
						    </div>
						    <?
							
					        break;
					    case "home" :
					        echo 'class="home"';
					        break;
				        case "studio" :
						    // check if the repeater field has rows of data
							if( have_rows('main_text') ):

							 	// loop through the rows of data
							    while ( have_rows('main_text') ) : the_row(); 

									$heading=get_sub_field('heading');
									$br=get_sub_field('background_image');
									$text=get_sub_field('styled_text');
									?>
									<div class="about-container" style="background-image: url('<?=$br;?>');">
					        			<div class="about-text-container">
					        				<h1><?=$heading;?></h1>
					        				<?=$text;?>
					        			</div>	
					        		</div>
					        		<?
								endwhile; // end text content
											  
							else :

								echo "<h1> No Content to display </h1>";

							endif;

					
					        break;
					    case "book-a-session" :
					        ?>
					        <div class="contact-form">
					        <?
					       		the_content(); 
					        ?>
					        </div>
					        <div class="contact-info">
					        	<div class="info-container">
						        	<div class="logo">
										<a class="home-link" href="/">
											<img src="<?php bloginfo('template_url'); ?>/images/no-3rd-logo.png"/ alt="North Third Logo"> <!---->
										</a>
									</div>
									<div class="real-info">
										<p>Michael "Swag Daddy" Dermek<br/>
										<span class="title">Owner/Engineer</span></p>
										<p>732.648.9249</p>
									</div>
								</div>
				        	</div>
					        <?
					        break;
					}

					?>

					<? endwhile; // end text content
										  
						else :

							echo "<h1> No Content to display </h1>";

						endif;

					?>

		
				</div><!-- ends max width container-->

			</div><!-- end meat-->
			<div class="clear">  </div>
	</main><!-- .site-main -->


</div><!-- .content-area -->
<?php
get_footer();
?>