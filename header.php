<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Chicago
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'chicago' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
    <div class="site-banner wrapper">        
		<div id="flagi"><ul><?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?></ul></div>
		<div class="site-branding">
            <div id="logo"><a href="/"><img src="/wp-content/uploads/2015/08/logo.png"></a></div>				
			<div id="header-left"><?php dynamic_sidebar( 'header-left' ); ?></div>
<!--            <div id="header-left"><p>Оптовые продажи ювелирных</p><p>украшений от производителя</p></div>  -->
            <div id="header-right">
            	<?php dynamic_sidebar( 'header-right' ); ?>
            	<!--<p>Ваш персональный консультант <strong>Игорь</strong></p><p><i>e-mail:</i> <a href="mailto:igor.gurevych@gmail.com">igor.gurevych@gmail.com</a></p><p><i>Skype:</i> igor14051</p>-->
				<!--[if lte IE 7]><style type="text/css">.jivo-btn, .jivo-btn-icon  {   display: inline;}</style><![endif]--><div class="jivo-btn jivo-online-btn jivo-btn-dark" onclick="jivo_api.open({start : 'call'});" style="font-family: Georgia, Arial;font-size: 13px;background-color: #dedede;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;height: 54px;line-height: 26px;padding: 0 13px 0 13px;font-weight: normal;font-style: normal"><div class="jivo-btn-icon" style="background-image: url(//static.jivosite.com/button/handset_dark.png);"></div>To call us it is free!<br />Позвонить нам бесплатно!</div><div class="jivo-btn jivo-offline-btn jivo-btn-dark" onclick="jivo_api.open({start : 'call'});" style="font-family: Georgia, Arial;font-size: 13px;background-color: #dedede;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;height: 54px;line-height: 26px;padding: 0 13px 0 13px;display: none;font-weight: normal;font-style: normal"><div class="jivo-btn-icon" style="background-image: url(//static.jivosite.com/button/mail_dark.png);"></div>Leave the message! / Оставьте сообщение!</div>
            </div>
		</div><!-- .site-branding -->
        
        <?php if ( has_nav_menu( 'social' ) ) : ?>
            <div class="social-menu">
		        <?php wp_nav_menu( array(
				    'theme_location' => 'social',
				    'depth'          => '1',
				    'link_before'    => '<span class="screen-reader-text">',
				    'link_after'     => '</span>' )
				    );
                ?>
            </div><!-- .social-menu -->       
        <?php endif; ?>
        
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Menu', 'chicago' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
    </div><!-- .site-banner -->
	</header><!-- #masthead -->
	
	<?php if ( get_header_image() ): ?>
			<div class="site-header-image" style="background-image: url('<?php header_image(); ?>')"></div>
	<?php endif; // End header image check. ?>
	
    
	<div id="content" class="site-content">
	