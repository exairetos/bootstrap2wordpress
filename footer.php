<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>

<!-- SIGNUP 
    =========================================================== -->
    <section id="signup" data-type="background" data-speed="4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
                    <p><a href="#" class="btn btn-lg btn-block btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Yes, sign me up!</a></p>
                </div> <!-- column end -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- signup -->

    <!-- FOOTER 
    =========================================================== -->
    <footer class="sticky-bottom">
        <div class="container">
            <div class="row gx-1 justify-content-center">
                <div class="col-auto">
                    <p><a class="nav-link" href="/"><img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo.png" alt="Bootstrap to Wordpress"></a></p>
                </div> <!-- column end -->
                <div class="col-auto">
                    
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'footer',
                            'depth'             => 2,
                            'container'         => 'nav',
                            'menu_class'        => 'nav list-unstyled list-inline justify-content-center',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker() 
					    ) );
					?>
                    
                </div> <!-- column end -->
                <div class="col-auto">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <p class="nav-link">&copy; <?php echo date('Y'); ?> <?php the_author_link(); ?></p>
                        </li>
                    </ul>
                    <!-- <p class="d-inline ms-auto">&copy; 2020 Exairetos</p> -->
                </div> <!-- column end -->
            </div>
        </div><!-- container -->
    </footer>

    <!-- MODAL 
    =========================================================== -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">
                        <i class="fa fa-envelope"> Subscribe to our mailing list</i>
                    </h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal">
                        
                    </button>
                </div> <!-- modal-header -->
                <div class="modal-body">
                    <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of
                        our best-selling courses <em>for free!</em></p>
                    <form action="" class="form-inline" role="form">
                    <div class="row gx-1 align-middle">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="subscribe-name" class="sr-only-focusable visually-hidden">Your First Name</label>
                                <input type="text" class="form-control" id="subscribe-name" placeholder="Your First Name">
                            </div> <!-- form-group -->
                        </div> <!-- col-auto -->
                        <div class="col-5">    
                            <div class="form-group">
                                <label for="subscribe-email" class="sr-only-focusable visually-hidden">And Your Email</label>
                                <input type="text" class="form-control" id="subscribe-email" placeholder="Your Email">
                            </div> <!-- form-group -->
                        </div> <!-- col-auto -->
                        <div class="col-3 ">
                            <input type="submit" class="btn btn-danger" value="Subscribe!">
                        </div> <!-- col-auto -->
                    </div> <!--row -->
                    </form>
                    <hr>
                    <p><small>By providing your email you consent to receiving occasional promotional emails &amp;
                            newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe
                            at any time.</small></p>
                </div> <!-- modal-body -->
            </div> <!-- modal-content -->
        </div> <!-- modal-dialog -->
    </div> <!-- modal -->


<?php wp_footer(); ?>

<!-- BOOTSTRAP CORE JS 
    =========================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
	
<!-- Theme specific scripts 
    =========================================================== 
    ===================== custom link to modal ================ -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.footer-modal').find('a').attr('data-bs-toggle', 'modal');
            $('.footer-modal').find('a').attr('data-bs-target', '#myModal');
        })
    </script>


</body>
</html>
