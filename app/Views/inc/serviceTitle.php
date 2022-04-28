<div class="sidebar-widget categories-two">
                            <div class="widget-content">
                                <!-- Services Category -->
                                <ul class="services-categories">
                                    <?php
                                    foreach($services as $service){?>
                        <li class="
                        <?php if ($service['title'] == $singleService['title']) {
                           echo 'active';
                        }?>
                        "><a href="<?= base_url('service/'.$service['slug']);?>"><?=$service['title']?></a></li>
                                    <?php }?>
                                   
                                    
                                </ul>
                            </div>
                        </div>