<?php
/**
 * @package Newp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 col-sm-12 grid'); ?>>

		<div class="featured-thumb col-md-4 col-sm-4">
			<?php if (has_post_thumbnail()) : ?>	
				<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('newp-pop-thumb',array('alt' => trim(strip_tags( $post->post_title )))); ?></a>
			<?php else: ?>
				<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><img src="<?php echo get_template_directory_uri()."/assets/images/placeholder2.jpg"; ?>"></a>
			<?php endif; ?>
		</div><!--.featured-thumb-->
			
		<div class="out-thumb col-md-8 col-sm-8">
			<header class="entry-header">
				<h3 class="entry-title title-font"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				<div class="postedon"><?php newp_posted_on(); ?></div>
				<span class="entry-excerpt"><?php the_excerpt(); ?></span>
				<span class="readmore"><a class="hvr-underline-from-center" href="<?php the_permalink() ?>"><?php esc_html_e('Read More','newp'); ?></a></span>
			</header><!-- .entry-header -->
		</div><!--.out-thumb-->
					
</article><!-- #post-## -->