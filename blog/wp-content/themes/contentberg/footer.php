<?php 
/**
 * Footer template for the site footer
 * 
 * The footer is split into three sections:
 * 
 *  - Upper footer with widgets
 *  - Instagram section
 *  - Copyright and Back to top button
 */

do_action('bunyad_pre_footer');

?>

	<?php 
		/**
		 * Default Light Footer
		 */
		if (!Bunyad::options()->footer_layout): 
	?>

	<footer class="main-footer">

		<?php if (Bunyad::options()->footer_upper && is_active_sidebar('contentberg-footer')): ?>	
		
		<section class="upper-footer">
			<div class="wrap">
				
				<ul class="widgets ts-row cf">
					<?php dynamic_sidebar('contentberg-footer'); ?>
				</ul>

			</div>
		</section>
		
		<?php endif; ?>
		
		
		<?php if (is_active_sidebar('contentberg-instagram')): ?>
		
		<section class="mid-footer cf">
			<?php dynamic_sidebar('contentberg-instagram'); ?>
		</section>
		
		<?php endif; ?>
		

		<?php if (Bunyad::options()->footer_lower): ?>
		
		<section class="lower-footer cf">
			<div class="wrap">
				<p class="copyright"><?php 
					echo do_shortcode(
						wp_kses_post(Bunyad::options()->footer_copyright) 
					); ?>
				</p>
				
				<?php if (Bunyad::options()->footer_back_top): ?>
				<div class="to-top">
					<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i> <?php esc_html_e('Top', 'contentberg'); ?></a>
				</div>
				<?php endif; ?>
			</div>
		</section>
		
		<?php endif; ?>
	
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
<!-- Get Free Qoute -->
	
	
	<?php 
		/**
		 * Contrast/Dark Footer OR Alternate Footer Style  
		 */
		else: 
		
			get_template_part('partials/footer/layout-' . sanitize_file_name(Bunyad::options()->footer_layout));
		
		endif;
	?>
	
	
</div> <!-- .main-wrap -->


<?php

$mobile_menu = 'contentberg-mobile';

// Fallback to main menu for AMP if mobile is missing
if (!has_nav_menu('contentberg-mobile') && Bunyad::amp()->active()) {
	$mobile_menu = 'contentberg-main';
}

?>

<div class="mobile-menu-container off-canvas" id="mobile-menu">

	<a href="#" class="close"><i class="fa fa-times"></i></a>
	
	<div class="logo">
		<?php Bunyad::get('helpers')->mobile_logo(); ?>
	</div>
	
	<?php if (has_nav_menu($mobile_menu)): ?>

		<?php 
		wp_nav_menu(array(
			'container' => '', 
			'menu_class' => 'mobile-menu', 
			'theme_location' => $mobile_menu,
			'walker' => class_exists('Bunyad_Theme_Amp_MenuWalker') ? new Bunyad_Theme_Amp_MenuWalker : ''
		)); 
		?>

	<?php else: ?>
	
		<ul class="mobile-menu"></ul>

	<?php endif;?>
</div>

<?php get_template_part('partials/search-modal'); ?>

<?php wp_footer(); ?>

</body>
</html>