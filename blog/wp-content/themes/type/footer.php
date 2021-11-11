<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-template-parts
 *
 * @package Type
 * @since Type 1.0
 */

?>
			</div><!-- .inside -->
		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
			<div class="widget-area" role="complementary">
				<div class="container">
					<div class="row">
						<div class="col-4 col-md-4" id="footer-area-1">
							<?php if ( is_active_sidebar( 'footer-1' ) ) {
								dynamic_sidebar( 'footer-1' );
							} // end footer widget area 1 ?>
						</div>	
						<div class="col-4 col-md-4" id="footer-area-2">
							<?php if ( is_active_sidebar( 'footer-2' ) ) {
								dynamic_sidebar( 'footer-2' );
							} // end footer widget area 2 ?>
						</div>
						<div class="col-4 col-md-4" id="footer-area-3">
							<?php if ( is_active_sidebar( 'footer-3' ) ) {
								dynamic_sidebar( 'footer-3' );
							} // end footer widget area 3 ?>
						</div>
					</div>
				</div><!-- .container -->
			</div><!-- .widget-area -->
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
			<div class="widget-area" role="complementary">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12" id="footer-area-4">
							<?php if ( is_active_sidebar( 'footer-4' ) ) {
								dynamic_sidebar( 'footer-4' );
							} // end footer widget area 4 ?>
						</div>	
					</div>
				</div><!-- .container -->
			</div><!-- .widget-area -->
		<?php endif; ?>
		
		<div class="footer-copy">
			<div class="container">
				<div class="row">
					<div class="col-6 col-sm-12">
						<div class="site-credits"><?php type_credits(); ?> - All rights Reserved</div>
					</div>
					<div class="col-6 col-sm-12">
						<div class="site-info">
<!-- 							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'type' ) ); ?>"><?php printf( __( 'Powered by %s', 'type' ), 'WordPress' ); ?></a> -->
							<a href=""></a>
							<span class="sep">  </span>
<!-- 							<a href="<?php echo esc_url( __( 'https://www.designlabthemes.com/', 'type' ) ); ?>" rel="nofollow"><?php printf( __( 'Theme by %s', 'type' ), 'Design Lab' ); ?></a> -->
							<a href="" rel="nofollow"></a>

						</div><!-- .site-info -->
					</div>
				</div>
			</div><!-- .container -->
		</div><!-- .footer-copy -->
		
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
<!-- Get Free Qoute --><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
