<?php 
/*
 * Template Name: About Us
 */
?>

<?php get_header(); ?>

<main id="main" class="site-main" role="main">
	<div id="primary" class="main-content">
	<div class="spacer">
		&nbsp;
	</div>
		<div class="about-grow">
		
			<div class="col-xs-12 col-md-6 nopadding tag-cont">
				<p class="tagline">PROTECTING<br/>WEALTH.</p>
				<p class="tagline orange tags">GROWING</br>INCOME.</p>
			</div>
			<div class="col-xs-12 col-md-6 nopadding blue-curve-txt">
			<h1>Our Purpose</h1>
					<?php the_field('our_purpose'); ?>			
			</div>
			<div class="col-xs-12 nopadding under-purpose">
				<p><?php the_field('under_purpose'); ?></p>		
			</div>
		</div>

		<div class="col-xs-12 nopadding stats">
			<div class="stat-block">
				<p class="orange-number">
				22.7B<sup>*</sup>
				</p>
				<p class="sub-num">under management/<br/>advisement as of 3/31/18</p>
			</div>
			<div class="stat-block">
				<p class="orange-number">
				100%
				</p>
				<p class="sub-num">employee owned</p>
			</div>
			<div class="stat-block">
				<p class="orange-number">
				27yrs
				</p>
				<p class="sub-num">expertise investing in high<br/>quality dividend growth stocks</p>
			</div>
			<div class="sub-script">
			<p>* Bahl &amp; Gaynor assets under management were $10.9B and SMA platform assets under advisement were $11.8B as of 3/31/18. Source: Bahl &amp; Gaynor</p>
			</div>
		</div>

		<div class="our-firm">
			<h1>Our Firm</h1>		
			<?php the_field('our_firm'); ?>		
		</div>

		<div class="client-value">
			<div class="col-xs-12 col-md-6 nopadding blue-curve-txt">
				<h1>Client Value</h1>
				<?php the_field('client_value'); ?>			
			</div>
			<div class="col-xs-12 col-md-6 nopadding tag-cont">
				<p class="tagline">PERSONAL<br/>TOUCH.</p>
				<p class="tagline orange tags">COLLECTIVE</br>EXPERTISE.</p>
			</div>
			<div class="col-xs-12 nopadding under-purpose">
				<p><?php the_field('under_value'); ?></p>		
			</div>
		</div>

		<div class="four-blocks">
			<?php

			// check if the repeater field has rows of data
			if( have_rows('four_blocks') ):


			 	// loop through the rows of data
			    while ( have_rows('four_blocks') ) : the_row();

				// display a sub field value
			        $bold = get_sub_field('bold_text');
			        $headline = get_sub_field('headline');
			        $copy = get_sub_field('copy');


			        ?>
			        	<div class="col-xs-12 col-md-6 nopadding block">
			        		<b><?=$bold;?></b>
			        		<h2><?=$headline;?></h2>
			        		<p><?=$copy;?></p>
			        	</div>

			        <?

			    endwhile;

			else :

			    // no rows found

			endif;

			?>
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