<!DOCTYPE html>
<html lang="en">

    <head>

        <?php $this->load->view('assets/css'); ?>

    </head>

    <body class="index-page sidebar-collapse">
        <!-- Navbar -->
        <?php $this->load->view('assets/navbar_blank'); ?>
        <!-- End Navbar -->

        <div class="wrapper">

            <div class="main">
                <!--
                 ==================================================
                     Global Page header Section Start
                 ================================================== -->
                <section class="global-page-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block">
                                    <h2>Tentang Intermedia</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--
                ==================================================
                    Sekilas intermedia
                ================================================== -->
                <section class="company-description">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                                <img src="<?php echo base_url()?>assets/user/img/bg11.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="col-md-6">
                                <div class="block">
                                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Sekilas Intermedia</h3>
                                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                                        Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--
                ==================================================
                    Media partner
                ================================================== -->
                <section id="clients" class="section-tabs">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Media partner</h2>
                                <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>
                                <div id="clients-logo" class="owl-carousel">
                                    <div>
                                        <img src="<?php echo base_url()?>assets/user/images/clients/logo-1.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/user/images/clients/logo-2.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/user/images/clients/logo-3.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/user/images/clients/logo-4.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/user/images/clients/logo-5.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/user/images/clients/logo-1.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/user/images/clients/logo-2.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/user/images/clients/logo-3.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/user/images/clients/logo-4.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url()?>assets/user/images/clients/logo-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--
                ==================================================
                    Form contact
                ================================================== -->
                <section id="contact-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="block">
                                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact With Me</h2>
                                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea!
                                        consectetur adipisicing elit. Dolore, ea!
                                    </p>
                                    <div class="contact-form">
                                        <form id="contact-form" method="#" action="#" role="form">

                                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                                <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                                            </div>

                                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                                <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                                            </div>

                                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                                <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                                            </div>

                                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                                <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                                            </div>

                                            <div id="success" class="success">
                                                Thank you. The Mailman is on His Way :)
                                            </div>

                                            <div id="error" class="error">
                                                Sorry, don't know what happened. Try later :(
                                            </div>

                                            <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                                <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="map-area">
                                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                                        Si aute quis eu proident o cupidatat ne anim nescius, et est praesentibus, o quorum vidisse expetendis, nostrud eram quibusdam ad nam nostrud ubi.

                                    </p>
                                    <div class="map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.277552998015!2d90.3678744!3d23.773128800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0ae4adf3cb9%3A0x7f2cf443b764e4a4!2sShishu+Mela!5e0!3m2!1sen!2s!4v1435516022247" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row address-details">
                            <div class="col-md-3">
                                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                                    <i class="ion-ios-location-outline" style="color: green"></i>
                                    <h5>Jl.Pol soemarto no 55<br>Purwokert,600562</h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                                    <i class="ion-ios-location-outline" style="color: green"></i>
                                    <h5>STMIK AMIKOM Purwokerto <br>United Kingdom,600562</h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                                    <i class="ion-ios-email-outline " style="color: green"></i>
                                    <p>support@themefisher.com<br>support@themefisher.com</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                                    <i class="ion-ios-telephone-outline" style="color: green"></i>
                                    <p>+07 052 245 022<br>+07 999 999 999</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                       <div id="footer">
                <div class="container">
                    <div class="row">
                    <div class="col-md-4">
                        ABOUT DEVELOPER
                        <ul>
                            <li><p>Trian damai</li>
                            <li><p>Zaenur rochman</li>
                            <li><p>Trian damai</li>
                            <li><p>Trian damai</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        DIVISION
                         <ul>
                            <li><p>PEMROGRAMAN</li>
                            <li><p>MULTIMEDIA</li>
                            <li><p>NETWORKING SUPPORT</li>
                            <li><p>EVENT ORGANIZER</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        CONTACT
                         <ul>
                            <li><p>admin@intermediaamikom.com</li>
                            <li><p>@intermediaamikom_pwt</li>
                            <li><p>JL.pol soemarto</li>
                            <li><p>intermedia</li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
                </section>



                <?php $this->load->view('assets/footer'); ?>
            </div>
    </body>
    <?php $this->load->view('assets/js'); ?>




</html>
