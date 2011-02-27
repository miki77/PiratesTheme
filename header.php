<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten_Five 
 * @since Twenty Ten Five 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" rel="stylesheet" type="text/css" />
<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<!--[if lte IE 8 ]>
<noscript><strong>JavaScript is required for this website to be displayed correctly. Please enable JavaScript before continuing...</strong></noscript>
<![endif]-->

<nav id="access" role="navigation">
<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
	<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
	<ul class="menu">
		<li class="no"><a href="<?php echo home_url( '/' ); ?>">Inici</a></li> 
		<li><a href="http://pirata.cat/ca/ideari">Ideari</a></li> 
		<!--li><a href="http://pirata.cat/bloc/?page_id=425">Programa electoral</a></li--> 
		<li><a href="http://actua.pirata.cat">Activisme</a></li> 
		<li><a href="http://pirata.cat/bloc">Bloc</a></li> 
		<li><a href="http://pirata.cat/ca/calendari">Calendari</a></li> 
		<li><a href="http://pirata.cat/ca/trobades">Trobades</a></li> 
		<li><a href="http://pirata.cat/ca/contacte">Contacte</a></li> 
	</ul>
</nav><!-- #access -->
<nav id="channels" role="navigation">
<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
	<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
	<ul class="menu">
		<li class="no hl">Troba'ns a:</li> 
		<li><a href="https://facebook.com/pirata.cat">Facebook</a></li> 
		<li><a href="https://twitter.com/partit_pirata">Twitter</a></li> 
		<li><a href="http://identi.ca/group/piratesdecatalunya">Identi.ca</a></li> 
		<li><a href="https://n-1.cc/pg/groups/42696/piratacat/">N-1</a></li> 
		<li><a href="http://www.flickr.com/groups/piratacat/">Flickr</a></li> 
		<li><a href="http://youtube.com/PiratesDeCatalunyaTV">Youtube</a></li> 
		<li><a href="http://webchat.freenode.net/?channels=pirata.cat">Xat</a></li> 
		<li><a href="https://xifrat.pirata.cat/gestors/mailman/listinfo">Llistes de correu</a></li>
	</ul>
</nav><!-- #access -->
<div id="wrapper" class="hfeed">
	<header>
		<section id="masthead">
			<div id="branding" role="banner">
				<a href="<?php echo home_url( '/' ); ?>"><img src="http://pirata.cat/media/img/logo.png"></a>
			</div><!-- #branding -->
			<ul id="sub" class="bar"> 
				<li class="no"><img src="http://pirata.cat/media/img/group.png"> <a href="https://xifrat.pirata.cat/ca/alta_afiliats">Afilia't (és gratuït)</a></li> 
				<li><img src="http://pirata.cat/media/img/email_go.png"> <a href="https://xifrat.pirata.cat">Participa!</a></li> 
				<li><img src="http://pirata.cat/media/img/money_add.png"> <a href="https://xifrat.pirata.cat/donacions">Donacions</a></li> 
			</ul>
		</section><!-- #masthead -->
	</header><!-- #header -->

	<div id="main">
