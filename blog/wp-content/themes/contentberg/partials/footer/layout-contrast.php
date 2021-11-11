<?php
/**
 * Partial: Footer contrast layout
 */
?>

	
	<footer class="main-footer contrast">

		<?php if (Bunyad::options()->footer_upper): ?>	
		
		<section class="upper-footer">
			<div class="wrap">
				<?php if (is_active_sidebar('contentberg-footer')): ?>
				
				<ul class="widgets ts-row cf">
					<?php dynamic_sidebar('contentberg-footer'); ?>
				</ul>
				
				<?php endif; ?>
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
			
			<?php if (Bunyad::options()->footer_logo): ?>
				<div class="footer-logo">
					<img <?php
						/**
						 * Get escaped attributes and add optionally add srcset for retina
						 */ 
						Bunyad::markup()->attribs('footer-logo', array(
							'src'    => Bunyad::options()->footer_logo,
							'class'  => 'logo',
							'alt'    => get_bloginfo('name', 'display'),
							'srcset' => array(Bunyad::options()->footer_logo => '', Bunyad::options()->footer_logo_2x => '2x')
						)); ?> />
				</div>
					
			<?php endif;?>
			
				<div class="bottom cf">
					<p class="copyright"><?php 
						echo do_shortcode(
							wp_kses_post(Bunyad::options()->footer_copyright) 
						); ?>
					</p>

					
					<ul class="social-icons">
					
					<?php 
						
						/**
						 * Show Social icons
						 */
						$services = Bunyad::get('social')->get_services();
						$links    = Bunyad::options()->social_profiles;
						
						foreach ( (array) Bunyad::options()->footer_social as $icon):
							$social = $services[$icon];
							$url    = !empty($links[$icon]) ? $links[$icon] : '#';
						?>
							<li>
								<a href="<?php echo esc_url($url); ?>" class="social-link" target="_blank"><i class="fa fa-<?php echo esc_attr($social['icon']); ?>"></i>
									<span class="label"><?php echo esc_html($social['label']); ?></span></a>
							</li>
						
					<?php
						endforeach;
					?>
						
						
					</ul>
				</div>
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