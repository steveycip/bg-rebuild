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
		
				
		<div class="why-div">
			<div class="col-xs-12 nopadding tag-cont">
				<p class="tagline">WHY DIVIDENDS?</p>
				<p class="tagline sub-tag">Reduce Uncertainty. Increase Income.</p>
			</div>

			<?php the_field('why_dividends'); ?>

				<?php

			// check if the repeater field has rows of data
			if( have_rows('icon_list') ):


			 	// loop through the rows of data
			    while ( have_rows('icon_list') ) : the_row();

				// display a sub field value
			        $icon = get_sub_field('icon');
			        $title = get_sub_field('title');
			        $list_copy = get_sub_field('list_copy');


			        ?>
			        	<div class="col-xs-12 nopadding icon-list">
			        		<img src="<?=$icon;?>">
			        		<div class="icon-list-right">
				        		<h2><?=$title;?></h2>
				        		<p><?=$list_copy;?></p>
			        		</div>
			        	</div>

			        <?

			    endwhile;

			else :

			    // no rows found

			endif;

			?>
		</div>

		<div class="inv-com">
			<div class="col-xs-12 nopadding tag-cont">
				<p class="tagline">INVESTMENT COMMITTEE</p>
			</div>
			<div class="col-xs-12 nopadding under-purpose">
				<p><?php the_field('investment_committee'); ?></p>		
			</div>
		</div>

	</div>
</main>


<?php get_footer(); ?>