<?php 
/*
 * Template Name: Philosophy
 */
?>

<?php get_header(); ?>

<main id="main" class="site-main" role="main">
	<div id="primary" class="main-content">
	<div class="spacer">
		&nbsp;
	</div>
		
				
		<div class="wdy-div">
			<div class="col-xs-12 nopadding tag-cont">
				<p class="tagline">WHY DIVIDENDS?</p>
				<p class="tagline sub-tags">Reduce Uncertainty. Increase Income.</p>
			</div>
			<div class="col-xs-12 nopadding under-purpose">
				<p><?php the_field('under_value'); ?></p>		
			</div>
		</div>

		
		<div class="our-culture">
		<div class="col-xs-12 col-md-6 nopadding tag-cont">
				<p class="tagline">Singularly<br/>Committed</br>&amp; Aligned</p>
			</div>
			<div class="col-xs-12 col-md-6 nopadding blue-curve-txt">
				<h1>Our Culture</h1>
				<?php the_field('client_value'); ?>			
			</div>
			<div class="col-xs-12 nopadding under-purpose">
				<p><?php the_field('under_value'); ?></p>		
			</div>
			<div class="color-blocks">
				<?php

			// check if the repeater field has rows of data
			if( have_rows('culture_blocks') ):


			 	// loop through the rows of data
			    while ( have_rows('culture_blocks') ) : the_row();

				// display a sub field value
			        $background = get_sub_field('background_color');
			        $header = get_sub_field('header');
			        $copy = get_sub_field('copy');


			        ?>
			        	<div class="col-xs-12 col-md-6 col-lg-3 nopadding block" style="background-color: <?=$background;?>;">
			        		<b><?=$header;?></b>
			        		<p><?=$copy;?></p>
			        	</div>

			        <?

			    endwhile;

			else :

			    // no rows found

			endif;

			?>
			</div>
		</div>

		<div class="our-history">
			<div class="col-xs-12 col-md-6 nopadding blue-curve-txt">
				<h1>Our History</h1>
				<?php the_field('under_history'); ?>			
			</div>
			<div class="col-xs-12 col-md-6 nopadding tag-cont">
				<p class="tagline">ONE VISION,</p>
				<p class="tagline orange tags">SINCE DAY</br>ONE.</p>
			</div>
			<div class="col-xs-12 nopadding under-purpose">
				<p><?php the_field('history'); ?></p>		
			</div>
		</div>

	</div>
</main>


<?php get_footer(); ?>