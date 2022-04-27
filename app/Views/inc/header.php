<header class="main-header header-style-two">
        <!--Header Top-->
    
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo-outer">
                        <div class="logo"><a href="<?=base_url('/')?>"><img src="images/logo.jpg" alt="" title=""></a></div>
                    </div>

                    <!--Info-->
                    <div class="info-outer clearfix d-none d-sm-block">
                        <!--Info Box-->
                        <div class="info-box">
                            <div class="icon"><span class="icon-call-in"></span></div>
                            <div class="text">
                                <strong>Call Us Today</strong>
                                <span class="info"><a href="#">+(49) 1516 3522 203</a></span>
                            </div>
                        </div>
                        <!--Info Box-->
                        <div class="info-box">
                            <div class="icon"><span class="icon-clock"></span></div>
                            <div class="text">
                                <strong>Working Hours</strong>
                                <span class="info">Mon - fri: 9:00 to 18:00</span>
                            </div>
                        </div>
                        <!--Info Box-->
                        <div class="info-box">
                            <div class="icon"><span class="icon-home"></span></div>
                            <div class="text">
                                <strong>Friedrich-Frank-Bogan 120,21033</strong>
                                <span class="info">Hamburg Germany</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <div class="header-lower">
            <div class="auto-container">
                <!--Nav Box-->
                 
                <div class="nav-outer clearfix">
                    
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->      
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>
                        
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class='<?= $active_home ?? '' ?>'><a href="<?= base_url('/')?>">Home</a>
                                   
                                </li>

                                <li class="dropdown"><a href="#">Our Services</a>
                                        <ul>
                                        <li><a href="<?=base_url('/sales')?>">Sales</a></li>
                                            <li><a href="<?=base_url('/repairs')?>">Repairs</a></li>
                                            <li><a href="<?=base_url('/maintenance')?>">Maintenance</a></li>
                                            <li><a href="<?=base_url('/installation')?>">Installation</a></li>
                                        </ul>
                                    </li>

                                <li class="dropdown"><a href="#">About Us</a>
                                        <ul>
                                        <li class='<?= $active_about ?? '' ?>'><a href="<?=base_url('/about')?>">Who We Are</a></li>
                                            <li><a href="<?=base_url('/mission')?>">Company Profile</a></li>
                                            <li><a href="<?=base_url('/mission')?>">Our Mission</a></li>
                                            <li><a href="<?=base_url('/vision')?>">Our Vision</a></li>
                                        </ul>
                                    </li>
                                   
                                     
                                </li>
                                <li class='<?= $active_contact ?? '' ?>'><a href="<?=base_url('/contact')?>">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                        <!--Search Box-->
                  

                        <!-- Button Box -->
                        <div class="btn-box">
                            <a href="<?=basename('contact')?>" class="theme-btn btn-style-one">Request a Qoute</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="<?=base_url('/')?>" title=""><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                            <li class='<?= $active_home ?? '' ?>'><a href="<?= base_url('/')?>">Home</a>
                                   
                                   </li>
   
                                   <li class="dropdown"><a href="#">Our Services</a>
                                           <ul>
                                           <li><a href="<?=base_url('/sales')?>">Sales</a></li>
                                               <li><a href="<?=base_url('/repairs')?>">Repairs</a></li>
                                               <li><a href="<?=base_url('/maintenance')?>">Maintenance</a></li>
                                               <li><a href="<?=base_url('/installation')?>">Installation</a></li>
                                           </ul>
                                       </li>
   
                                   <li class="dropdown"><a href="#">About Us</a>
                                           <ul>
                                           <li class='<?= $active_about ?? '' ?>'><a href="<?=base_url('/about')?>">Who We Are</a></li>
                                               <li><a href="<?=base_url('/mission')?>">Company Profile</a></li>
                                               <li><a href="<?=base_url('/mission')?>">Our Mission</a></li>
                                               <li><a href="<?=base_url('/vision')?>">Our Vision</a></li>
                                           </ul>
                                       </li>
                                      
                                        
                                   </li>
                                   <li class='<?= $active_contact ?? '' ?>'><a href="<?=base_url('/contact')?>">Contact Us</a></li>
                            </ul> 
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>