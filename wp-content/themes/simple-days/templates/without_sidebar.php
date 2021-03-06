<?php
/**
 * Template Name: Without sidebar
 * Template Post Type: post,page
 *
 * @package Simple Days
 *
 */
__( 'Without sidebar', 'simple-days' );
get_header();

get_template_part( 'template-parts/post/post','google_effect' );
$post_title_effects = simple_days_google_post_title_effects();

if(has_post_thumbnail()){
	get_template_part( 'template-parts/post/post','full_thum' );
	simple_days_full_width_thumbnail_post($post_title_effects);
}

?>
<div class="wrap_frame m_con f_box f_col110 jc_c001">
	<main id="post-<?php the_ID(); ?>" <?php post_class('contents post_content shadow_box single_post_content'); ?>>
		<?php while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/post','sort_order' );
			get_template_part( 'template-parts/post','order' );
			simple_days_post_order( 'post' , simple_days_sort_order_custom_post() , $post_title_effects , $post);

		endwhile; ?>
	</main>
</div>
<?php get_footer();

