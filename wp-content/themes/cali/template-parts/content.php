<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cali
 */

$show_excerpt = get_theme_mod( 'cali_index_excerpt_regular', 0 );
$hide_thumb   = get_theme_mod( 'cali_index_hide_thumb', 0 );
$hide_cats    = get_theme_mod( 'cali_index_hide_cats', 0 );
$hide_meta	  = get_theme_mod( 'cali_index_hide_meta', 0 );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('regular-post'); ?>>

	<?php cali_post_thumbnail(); ?>

	<header class="entry-header">

		<?php if ( !$hide_cats ) : ?>
        <div class="cat-links ca-category">
            <?php cali_get_first_cat(); ?>
        </div>
		<?php endif; ?>
		
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( !$hide_meta ) : ?>
        <div class="entry-meta">
            <?php cali_posted_on(); ?>
        </div>
        <?php endif; ?>

	</header>

	<?php if ( $show_excerpt ) : ?>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
	<?php endif; ?>

</article>
