<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar padding-right">
						
						<!-- Category Widget -->
                   <?= $this->include('inc/serviceTitle'); ?>	
						<!-- Support Widget -->
                        <div class="sidebar-widget support-widget">
                            <div class="widget-content">
                                <span class="icon flaticon-telephone-1"></span>
                                <div class="text">Got any Questions? <br> Call us Today!</div>
                                <div class="number">+(49) 1516 3522 203</div>
                                <div class="email"><a href="#">support@topnotchengineering.com</a></div>
                            </div>
                        </div>
						
					</aside>
				</div>
				
				<!--Content Side / Services Detail-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="services-detail">
						<div class="inner-box">
							<div class="image">
								<img src="/uploads/service/<?=$singleService['img']?>" alt="<?=$singleService['title']?>" />
							</div>
							<div class="lower-content">
								<!-- Title Box -->
								<div class="title-box">
									<!-- <div class="title">We are Solustrid</div> -->
									<h2><?=$singleService['title']?></h2>
								</div>
								<!-- <div class="bold-text">Consectetur adipisicing elit sed do eiusmod tempor dolor magna aliquat enim veniam, quis nostrud exdra anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan catium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</div> -->
								<div class="text">
									<p>
                                        <?=$singleService['description'];?>
                                    </p>
									<h3>Why Choose us</h3>
									<p>Auis nostrud exercitation ullamc laboris sed nisit aliquip ex bea sed consequat ipsum duis sit amet consecter adipisicing elit sed ipsum eiusmod tempor incididunt ut labore.</p>
									<!-- Services Featured Outer -->
									<div class="services-featured-outer">
										<div class="row clearfix">
											
											<!-- Feature Block -->
											<div class="feature-block col-lg-6 col-md-6 col-sm-12">
												<div class="inner-box">
													<div class="icon-box">
														<span class="icon flaticon-home-2"></span>
													</div>
													<h4>Well Maintained</h4>
													<div class="featured-text">Incididunt laboret dolore magna exercitation laboris nisis dolor in derit in voluptate velit.</div>
												</div>
											</div>
											
											<!-- Feature Block -->
											<div class="feature-block col-lg-6 col-md-6 col-sm-12">
												<div class="inner-box">
													<div class="icon-box">
														<span class="icon flaticon-fan"></span>
													</div>
													<h4>Modern Equipments</h4>
													<div class="featured-text">Incididunt laboret dolore magna exercitation laboris nisis dolor in derit in voluptate velit.</div>
												</div>
											</div>
											
											<!-- Feature Block -->
											<div class="feature-block col-lg-6 col-md-6 col-sm-12">
												<div class="inner-box">
													<div class="icon-box">
														<span class="icon flaticon-worker"></span>
													</div>
													<h4>All Expert Engineers</h4>
													<div class="featured-text">Incididunt laboret dolore magna exercitation laboris nisis dolor in derit in voluptate velit.</div>
												</div>
											</div>
											
											<!-- Feature Block -->
											<div class="feature-block col-lg-6 col-md-6 col-sm-12">
												<div class="inner-box">
													<div class="icon-box">
														<span class="icon flaticon-nuclear-plant"></span>
													</div>
													<h4>Power Efficient Factory</h4>
													<div class="featured-text">Incididunt laboret dolore magna exercitation laboris nisis dolor in derit in voluptate velit.</div>
												</div>
											</div>
											
										</div>
									</div>
									
									<!-- Default Two Column -->
								
								</div>
								
							
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
