<?php

/**Template Name: Home Page */
?>
<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<?php get_header(); ?>

<script>
    $(document).ready(function() {
        $(window).scroll(function() {

            if ($(window).scrollTop() > 1500) {
                $('#menu-mmri-nav-menu').css('position', 'fixed');
                $('#menu-mmri-nav-menu').css('top', '100');
            } else if ($(window).scrollTop() <= 1500) {
                $('#menu-mmri-nav-menu').css('position', '');
                $('#menu-mmri-nav-menu').css('top', '');
            }
            if ($('#menu-mmri-nav-menu').offset().top + $("#menu-mmri-nav-menu").height() > $("footer").offset().top) {
                $('#menu-mmri-nav-menu').css('top', -($("#menu-mmri-nav-menu").offset().top + $("#menu-mmri-nav-menu").height() - $("footer").offset().top));
            }
        });
    });
</script>
<!--menu-mmri-nav-menu-container-->
<script>
    $(document).ready(function() {
        $(window).scroll(function() {

            if ($(window).scrollTop() > 1500) {
                $('.menu-mmri-nav-menu-container').css('position', 'fixed');
                $('.menu-mmri-nav-menu-container').css('top', '0');
            } else if ($(window).scrollTop() <= 1500) {
                $('.menu-mmri-nav-menu-container').css('position', '');
                $('.menu-mmri-nav-menu-container').css('top', '');
            }
            if ($('.menu-mmri-nav-menu-container').offset().top + $(".menu-mmri-nav-menu-container").height() > $("footer").offset().top) {
                $('.menu-mmri-nav-menu-container').css('top', -($(".menu-mmri-nav-menu-container").offset().top + $(".menu-mmri-nav-menu-container").height() - $("footer").offset().top));
            }
        });
    });
</script>


<body id="homepage-body">
    <?php //get_template_part('/includes/section', 'slideout'); 
    ?>

    <main id="homepage-main">
        <div id="homepage-banner">
            <div id="oval-container">
             
                <div class="row">

                    <div class="column left" style=" background-color: var(--UMblue);">
                        <div class="bg-canvas" style="background-color: white;">

                            <?php
                            $menu_args = [ //link main navbar menu from WP admin panel
                                'menu_class' => 'main',
                                'theme_location' => 'primary'
                            ];
                            wp_nav_menu($menu_args);
                            ?>
                        </div>

                    </div>

                </div>


                <div class="column right" style="background-color:lightgrey;">
                    <!--column right starts from here-->


                    <div id="homepage-oval" style="background-image: url('<?php echo get_template_directory_uri() ?>/includes/theme_imgs/header_blur.png')">

                        <!--<div id="oval-outer">-->
 <!--changed the photo to evc-->
                        <div id="inner-top">
                            <img src="<?php echo get_template_directory_uri() ?>/includes/theme_imgs/logo-background-dark.png" alt="">
                        </div>

                         
                        

                    </div>


                    
                    <div class='canvas-white'>
 
                        <div class='rectangle-box'>
                            <div class='rectangle-content'>
                                <p></p>


                                <div class="btn-vision" style="
    font-size: 1.5em;
    font-weight: bold;
    margin: -8;">
                                    Our Vision

                                </div>



                                <div class="heading-4" style="
   line-height: 1.3;
    font-size: calc(6px + 1.0vw);
    display: block;
    font-weight: bold;
    margin-top: 13;
    margin-bottom: 3;
    font-weight: 500;
">The University of Michigan Electric Vehicle Center brings together industry,
government, and academia to support Michigan’s economy by driving the State’s mobility sector toward the future of electrification.
                                </div>
                                <p></p>
                            </div>
                        </div>

                        
                        <div class="four-pillars">
                           
                            <div class="ctner">
                                <div class="initial">
                                    <button class="button">
                                        <h1> <div class="h3-link"> <a href="<?php echo esc_url('/Innovation/'); ?>">Innovation</a></div></h1>
                                    </button>
                                    <div class="heading-4" style="padding: 10; font-size: calc(6px + 1.0vw);">To create a focused innovation initiative to shape the future of EV R&D</div>
                                    <div class="h3-link">
                                     
                                    </div>
                                </div>
                            </div>

                            <!--this is the second pillar for capability. I need to hover over Equipment request, battery lab and MC-->
                            <div class="ctner">
                                <div class="initial">
                                    <button class="button">
                                        <h1>  <div class="h3-link"> <a href="<?php echo esc_url('/Capabilities/'); ?>">Capabilities</a></div></h1>
                                    </button>
                                    <div class="heading-4" style="padding: 10; font-size: calc(6px + 1.0vw);/* font-weight: bold; */">To support the development of battery cell manufacturing</div>

                                    <div class="h3-link">
                                        <a href="https://umbatterylab.engin.umich.edu/"> Battery Pilot Line</a>
                                    </div>
                                    
                                </div>
                            </div>

                           
                            <div class="ctner">
                                <div class="initial">
                                    <button class="button">
                                        <h1> <div class="h3-link"> <a href="<?php echo esc_url('/Education/'); ?>">Education</a></div> </h1>
                                    </button>
                                    <div class="heading-4" style="padding: 10; font-size: calc(6px + 1.0vw);/* font-weight: bold; */">To build a talent base to support EV future needs</div>
                    
                                </div>
                            </div>

                             
                            <div class="ctner">
                                <div class="initial">
                                    <button class="button">
                                        <h1>  <div class="h3-link"> <a href="<?php echo esc_url('/Workforce/'); ?>">Workforce</a></div></h1>
                                    </button>
                                    <div class="heading-4" style="padding: 10; font-size: calc(6px + 1.0vw);/* font-weight: bold; */"> To establish a talent network to address current and long-term workforce needs</div>
    
                                </div>
                            </div>

                        </div>
                       

 
                        <?php get_template_part('/includes/section', 'news-and-announcements'); ?>
                        <!--<a href="https://www.google.com/" target="_blank">read more</a>-->
                    </div>
                    <!--canvas-->
                </div>
            </div>
        </div>
        </div>
    </main>
</body>

<?php get_footer(); ?>