<?php
/*
Template Name: Ads
*/

get_header(); ?>

<!-- PAGE HERO -->

<?php get_template_part('partials/global/page-hero');?>

<div class="page-content"> 

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('partials/global/page-content'); ?>
	<?php endwhile; // end of the loop. ?>

	<div class="container">
        <div class="row">

			<?php get_template_part('partials/loops/advertisers-loop'); ?>

		</div>
	</div>
</div>
	<?php get_template_part('partials/content/media-kit'); ?>
</div>


<?php get_footer();?>
