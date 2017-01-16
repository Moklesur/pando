<?php

/********************************************************
 * ThemeTim Social
 ********************************************************/

/********************************************************
 * Header
 ********************************************************/
/**
 * Header My Account
 */
function header_account(){
    if(get_theme_mod('top_header_tel_enable', '1')):
        echo '<li><i class="fa fa-phone"></i> '.get_theme_mod('top_header_tel', '880 0000 000000').'</li>';
    endif;
    if(get_theme_mod('top_header_account_enable', '1')){
        $login_register =  get_permalink(get_theme_mod('header_login_register'));
        $header_myaccount =  get_permalink(get_theme_mod('header_myaccount'));
        if(is_user_logged_in()){
            echo '<li><a href="'.$header_myaccount.'">'.get_theme_mod('top_header_account','Account').'</a></li><li><a href="'.wp_logout_url().'">Logout</a></li>';
        }else{
            echo '<li><a href="'.$login_register.'">Login</a></li><li><a href="'.$login_register.'">Register</a></li>';
        }
    }
}
add_action( 'themetim_header_account', 'header_account' );
/********************************************************
 * Footer
 ********************************************************/
/**
 * Footer Social
 */
function footer_social() {
    if(get_theme_mod('social_footer_enable','1')) :
        ?>
        <ul class="list-inline footer-social">
            <?php
            if(get_theme_mod('footer_fb','1')) {
                echo '<li><a href="'.get_theme_mod('footer_fb','https://www.facebook.com/ ').'"  target="_blank"><i class="fa fa-facebook"></i></a></li>';
            }
            if(get_theme_mod('footer_tw','1')) {
                echo '<li><a href="'.get_theme_mod('footer_tw','https://twitter.com').'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
            }
            if(get_theme_mod('footer_li','1')) {
                echo '<li><a href="'.get_theme_mod('footer_li','https://linkedin.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('footer_pint','1')) {
                echo '<li><a href="'.get_theme_mod('footer_pint','https://pinterest.com').'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
            }
            if(get_theme_mod('footer_ins','1')) {
                echo '<li><a href="'.get_theme_mod('footer_ins','https://instagram.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('footer_dri','1')) {
                echo '<li><a href="'.get_theme_mod('footer_dri','https://dribbble.com').'" target="_blank"><i class="fa fa-dribbble"></i></a></li>';
            }
            if(get_theme_mod('footer_plus','1')) {
                echo '<li><a href="'.get_theme_mod('footer_plus','https://plus.google.com').'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
            }
            if(get_theme_mod('footer_you','1')) {
                echo '<li><a href="'.get_theme_mod('footer_you','https://youtube.com').'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
            }
            ?>
        </ul>
        <?php
    endif;
}
add_action( 'themetim_footer_social', 'footer_social' );
/**
 * Footer Newsletter
 */
function footer_newsletter(){
    ?>
    <h3 class="margin-null margin-bottom-20"><?php echo get_theme_mod('top_footer_newsletter_title','Newsletter'); ?></h3>
    <p><?php echo get_theme_mod('middle_footer_text','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s.'); ?></p>
    <form class="margin-top-20 margin-null" action="<?php echo get_theme_mod('top_footer_newsletter_url','#'); ?>" method="post" target="_blank">
        <input type="email" class="form-control" name="newsletter-email" id="newsletter-email" placeholder="info@yoursite.com" required="">
        <button type="submit" class="btn btn-primary margin-top-20"><i class="fa fa-envelope margin-right-10"></i> Subscribe</button>
    </form>
    <?php
}
add_action( 'themetim_footer_newsletter', 'footer_newsletter' );

/**
 * Bottom Footer Copyright
 */
function bottom_footer_copyright(){ ?>
    <p class="margin-null margin-top-10"><?php echo get_theme_mod('bottom_footer_copyright','© <a href="http://themetim.com/" target="_blank">ThemeTim</a>. All Rights Reserved.'); ?></p>
    <?php }
add_action( 'themetim_bottom_footer_copyright', 'bottom_footer_copyright' );

/**
 * Social Sharing
 */
function themetim_social_sharing(){
    ?>
    <ul class="list-inline">
        <li class="margin-top-10"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li class="margin-top-10"><a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li class="margin-top-10"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li class="margin-top-10"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=&source=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li class="margin-top-10"><a href="https://pinterest.com/pin/create/button/?url=&media=&description=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
    </ul>
    <?php
}