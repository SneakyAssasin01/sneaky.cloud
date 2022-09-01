<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Computer_Repair
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-image">
		<?php 
			if( is_sticky() ){
				echo '<div class="sticky_post_icon pull-right" title="' . esc_html__( 'Sticky Post', 'computer-repair' ) . '"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></div>';
			}
		?>
		<?php
		$link_title = get_post_meta(get_the_ID(), 'framework-link-title', true);
		$link = get_post_meta(get_the_ID(), 'framework-link', true);
		if($link){
		?>
		<a href="<?php the_permalink()?>"><?php the_post_thumbnail('full')?></a>
		<div class="post-link-wrapper">
			 <div class="vert-wrapper">
				  <div class="vert"> <a href="<?php echo esc_url($link)?>" class="post-link"><?php echo esc_html($link_title);?></a> </div>
			 </div>
		</div>
		<?php } ?>
	</div>
	<?php computer_repair_services_posted_on();?> 
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