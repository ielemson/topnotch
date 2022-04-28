
   <!-- About Industry Section -->
   <section class="about-industry-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <!-- <div class="title">We are Solustrid</div> -->
                            <h2>Who We Are</h2>
                        </div>
                        <div class="text wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <!-- <p>Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos-trud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit. Sunt in culpa qui officia deser mollit anim id est laborum unde omnis iste natus.</p> -->
                            <p>At TopNotch Engineering we are committed to helping our clients reach their goals by identifying with client projects and constantly striving to provide solutions for seamless operations to ensure the best value is obtained on time and on schedule. We provide the continual delivery of superior support while providing customer satisfaction. 100% Satisfaction Guarantee – We want you to be completely satisfied with our services. We will do whatever it takes to make you happy. No hassles, no problems..</p>
                           <p>Our operations are handled by a set of qualified and innovative professionals who function in various capacities on each project, this has ensured consistency in customer loyalty and excellent service delivery.</p>
                            <p>As a fast-growing company, we can provide a wide range of professionally delivered services, including:</p>
                        </div>
                        <ul class="list-style-one wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                      
                            <?php
                            if ($services) { ?>
                           
                                        <?php foreach ($services as $key => $service) { ?>
                                            <li><?=$service['title']?></li>
                                        <?php  } ?>
                                    
                            <?php } ?>
                        </ul>
                       
                    </div>
                </div>
                
                <!-- Images Column -->
                <div class="images-column col-lg-6 col-md-12 col-sm-12 d-none d-sm-block">
                    <div class="inner-column">
                        <div class="row clearfix">
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <div class="image wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <img src="images/resource/who-we-are-1.png" alt="who-we-are" />
                                </div>
                            </div>
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <div class="image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <img src="images/resource/who-we-are-2.jpg" alt="who-we-are" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End About Industry Block -->

	<!-- Request Quote -->
    <section class="request-quote-section" style="background-image: url(images/background/contact-bg.jpg);">
        <div class="auto-container">
            <div class="sec-title light">
                <!-- <div class="title">We are Solustrid</div> -->
                <h2>Contact Us</h2>
                <div class="text">We will be glad to hear from you.</div>
            </div>
            <div class="appointment-form">
                <form method="post" action="">
                    <div class="row clearfix">
                        <div class="field-group col-xl-8 col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="field-name" placeholder="Your Name " required="">
                                </div>
                                
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="email" name="field-name" placeholder="Email Address" required="">
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="field-name" placeholder="Subject" required="">
                                </div>
                                
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <select class="custom-select-box">
                                        <option>Service Interested in</option>
                                        <?php
                            if ($services) { ?>
                           
                                        <?php foreach ($services as $key => $service) { ?>
                                            <option><?=$service['title']?></option>
                                        <?php  } ?>
                                    
                            <?php } ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                         <div class="field-group col-xl-4 col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="field-name" placeholder="Mesage " required></textarea>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button class="theme-btn btn-style-one" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End Request Quote -->


    <!--Newsleter Section Two-->
    <section class="newsletter-section-two">
        <div class="auto-container">
                    
            <!--Title Column-->
            <div class="title-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="inner-column">
                    <h2>Stay Updated With Our Newsletter</h2>
                    <div class="text">At Topnotch Engineering, Our goal is to generate oriented sales by our staff through quality assurance a constant effort is made to enhance the quality practices in the organization.</div>
                </div>
            </div>

            <!--Subscribe Form-->
            <div class="subscribe-form-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <form method="post" action="">
                    <div class="form-group">
                        <span class="icon far fa-envelope"></span>
                        <input type="email" name="email" value="" placeholder="Email address ..." required>
                        <button type="submit" class="theme-btn submit-btn">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
    <!--End Newsleter Section-->
	