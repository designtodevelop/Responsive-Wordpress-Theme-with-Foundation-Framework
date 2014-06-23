<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<div class="large-4 columns" role="main">
	<article id="post-<?php the_ID(); ?>" <?php post_class('panel'); ?> data-equalizer-watch>
		<header>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</header>
		<div class="entry-content">
			<figure><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('large'); } ?></a></figure> 
			<?php the_excerpt(); ?>
			<p>Posted on <?php the_time('F jS, Y'); ?> in <?php the_category(', '); ?></p>
			<p class="byline author">Written by <?php the_author_posts_link(); ?></p>
			<?php // FoundationPress_entry_meta(); ?>
			<a href="<?php the_permalink(); ?>" class="button">Read more</a>
		</div>
		<footer>
			<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
		</footer>
	</article>
</div>