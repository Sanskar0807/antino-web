<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Type
 * @since Type 1.0
 */

// Sidebar Options
$post_sidebar_position = get_theme_mod('post_sidebar_position', 'content-sidebar');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
	<?php if ( get_theme_mod('post_style', 'fimg-classic') == 'fimg-classic' ) : ?>	
		<header class="entry-header">
			<div class="entry-meta entry-category">
				<span class="cat-links"><?php the_category( ', ' ); ?></span>
			</div>
			<?php the_title( '<h1 class="entry-title"><span>', '</span></h1>' ); ?>
			<div class="entry-meta">
				<?php type_posted_on(); ?>
			</div>
		</header><!-- .entry-header -->
		<?php if ( has_post_thumbnail() && get_theme_mod('post_has_featured_image', 1) ) : ?>
			<figure class="entry-thumbnail">
				<?php if ( 'content-centered' == $post_sidebar_position || 'content-fullwidth' == $post_sidebar_position ) {
					the_post_thumbnail('type-fullwidth');
					} else {
					the_post_thumbnail('type-large');	
					}
				?>
			</figure>
		<?php endif; // Featured Image ?>
	<?php endif; ?>	
	
	<div class="entry-content">
		<?php
			the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'type' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php type_entry_footer(); ?>
	</footer>


<!-- Get Free Qoute -->
<button class="open-button buttonmodal" onclick="openForm()">Get Free Quote</button>

<div class="form-popup" id="myForm">
    <form
    id="contact"
    name="contact"
    method="post"
    action="email.php"
    class="form-container"
    >
    <i class="btn cancel material-icons align-center d-flex justify-content-end mb-3" onclick="closeForm()">close</i>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        autocomplete="off"
                                        onfocus="displayFloatingLabels(this)"
                                        required
                                    />
                                    <span>Your name</span>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <input
                                        type="text"
                                        name="email"
                                        id="email"
                                        autocomplete="off"
                                        onfocus="displayFloatingLabels(this)"
                                        required
                                    />
                                    <span>Your e-mail</span>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <input
                                        type="text"
                                        name="subject"
                                        id="subject"
                                        autocomplete="off"
                                        onfocus="displayFloatingLabels(this)"
                                        required
                                       
                                    />
                                    <span>Subject</span>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <textarea
                                        name="message"
                                        id="message"
                                        autocomplete="off"
                                        onfocus="displayFloatingLabels(this)"
                                        required
                                    ></textarea>
                                    <span>Your message</span>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <button
                                        id="submit"
                                        type="submit"
                                        name="submit"
                                    >
                                        <strong
                                            >Submit Now<b></b> <i></i
                                        ></strong>
                                    </button>
                                </div>
                               
                              </form>
</div>
<!-- Get Free Qoute --><!-- .entry-footer -->
	
</article><!-- #post-## -->

<?php
	// Author bio.
	if ( get_theme_mod('show_author_bio') && is_single() && get_the_author_meta( 'description' ) ) {
		get_template_part( 'template-parts/post/author-bio' );
	}
?>
