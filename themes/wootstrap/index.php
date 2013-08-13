<?php get_header(); ?>
<div id="main" class="col-8">
This is some content first:
<h1 style="color:blue;"><span class="glyphicon glyphicon-ok"> Some glyph icon content too</span></h1>

		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
</div><!-- end #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>