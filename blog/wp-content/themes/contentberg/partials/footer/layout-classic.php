<?php
/**
 * Partial: Classic Dark layout
 */
?>

	
	<footer class="main-footer dark classic">
	
		
		<?php if (is_active_sidebar('contentberg-instagram')): ?>
		
		<section class="mid-footer cf">
			<?php dynamic_sidebar('contentberg-instagram'); ?>
		</section>
		
		<?php endif; ?>
		
		<div class="bg-wrap">

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
			
	
			<?php if (Bunyad::options()->footer_lower): ?>
			
			<section class="lower-footer cf">
				<div class="wrap">
				
					<div class="bottom cf">
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
				</div>
			</section>
			
			<?php endif; ?>
		
		</div>
		
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