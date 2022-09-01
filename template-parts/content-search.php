<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Computer_Repair
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
	<div class="post-image">
		<?php 
			if( is_sticky() ){
				echo '<div class="sticky_post_icon pull-right" title="' . esc_html__( 'Sticky Post', 'computer-repair' ) . '"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></div>';
			}
		?>
	</div>
	<ul class="post-meta">
		<li class="post-author"><?php esc_html_e('by&nbsp;', 'computer-repair')?><?php the_author();?></li>
		<li><i class="icon icon-clock"></i>
			<?php if ( is_single() ){ ?>
			<span><?php echo get_the_date('d M Y')?></span>
			<?php } else { ?>
			<a href="<?php the_permalink(); ?>">
				<span><?php echo get_the_date('d M Y')?></span>
			</a>
			<?php } ?>
		</li>
		<li><i class="icon icon-talk"></i><span><?php comments_number( '0', '1', '%' ); ?></span></li>
	</ul>
	<?php if ( is_single() ){ ?>
	<div class="post-author">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 86 ); ?>
		<i><?php esc_html_e('by', 'computer-repair'); ?></i> <b><?php printf(esc_html__('%s', 'computer-repair'), get_the_author())?></b>
	</div>
	<?php } ?>
	<div class="inside">
		<?php if ( is_single() ){ ?>
		<?php the_title( '<h2 class="post-title">', '</h2>' ); ?>
	    <?php } else { ?>
		<h2 class="post-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
	    <?php } ?>
		<div class="post-teaser">
			<?php 
				if ( is_single() ){
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'computer-repair' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
					wp_link_pages( array(
						'before'      => '<div class="page-pagination"><div class="page-numbers"><span class="page-links-title">' . esc_html__( 'Pages:', 'computer-repair' ) . '</span>',
						'after'       => '</div></div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'computer-repair' ) . ' </span>%',
						'separator'   => ', ',
					) );
				}else{
					if( get_option('rss_use_excerpt') ){
						the_excerpt();
						echo '<a href="'. get_the_permalink() .'" class="readmore btn">'. esc_html__('Continue Reading', 'computer-repair') . '</a>';
					} else{
						the_content( sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'computer-repair' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );
					}
				}
			?>
		</div>
		<?php 
			if ( is_single() ){
				echo get_the_tag_list('<ul class="tags-links tags-list"><li>','</li><li>','</li></ul>');
			}
		?>
	</div>
</div>