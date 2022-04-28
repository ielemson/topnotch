<footer class="main-footer">
    
		<div class="auto-container">
        
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
						
							<!--Footer Column-->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget about-widget">
									<div class="logo">
										<a href="<?=base_url('/')?>"><img src="<?=base_url('images/footer-logo.png')?>" alt="" /></a>
									</div>
									<div class="text">TopNotch Engineering Limited is an Engineering company, with a vision to provide dependable, cost effective ..</div>
									<a href="<?=base_url('about')?>" class="theme-btn btn-style-four">About Company</a>
								</div>
							</div>
							
							<!--Footer Column-->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget services-widget">
									<h2>Our Services</h2>
									<ul class="footer-service-list">
										<!-- <li><a href="#">Sales</a></li>
										<li><a href="#">Repairs</a></li>
										<li><a href="#">Maintenance</a></li>
										<li><a href="#">Installation</a></li> -->
										
										<?php
                            if ($services) { ?>
                           
                                        <?php foreach ($services as $key => $service) { ?>
                                            <li class="text-capitalize"><a href="<?= base_url('service/'.$service['slug']);?>"><?=$service['title']?></a></li>
                                        <?php  } ?>
                                    
                            <?php } ?>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
						
							<!--Footer Column-->
							<div class="footer-column col-lg-7 col-md-6 col-sm-12">
								<div class="footer-widget post-widget">
									<h2>Quick Link</h2>
									<ul class="footer-service-list">
										<li><a href="<?=base_url('/')?>">Home</a></li>
										<li><a href="<?=base_url('/about')?>">About Us</a></li>
										<li><a href="<?=base_url('/contact')?>">Contact Us</a></li>
										<li><a href="#">Company Profile</a></li>
										<!-- <li><a href="#">Our Services</a></li> -->
									</ul>
									
								</div>
							</div>
							
							<!--Footer Column-->
							<div class="footer-column col-lg-5 col-md-6 col-sm-12">
								<div class="footer-widget contact-widget">
									<h2>Contact</h2>
									<div class="number">+(49) 1516 3522 203</div>
									<ul>
										<li>Friedrich-Frank-Bogan 120, 21033, Hamburg Germany</li>
										<li><a href="mailto::support@topnotchengineering.com">
										support@topnotchengineering.com
										</a></li>
										<!-- <li>Mon to Sat: 9:am to 6pm</li> -->
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="clearfix">
					<div class="pull-left">
						<div class="copyright">&copy; <?=Date('Y')?> Top Notch Engr. All rights reserved.</div>
					</div>
					<div class="pull-right">
						<!-- Social Links -->
						<ul class="social-links">
							<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
							<li><a href="#"><span class="fab fa-twitter"></span></a></li>
							<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
							<li><a href="#"><span class="fab fa-youtube"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</footer>