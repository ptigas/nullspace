<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
<title><?php if ( is_tag() ) {
		echo 'Tag Archive for &quot;'.$tag.'&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} else {
		echo wp_title( ' | ', false, right ); bloginfo( 'name' );
	} ?></title>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/sh/shCore.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/sh/shBrushJScript.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/sh/shBrushPython.js"></script>
<link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/sh/shCoreDefault.css"/>
<link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/sh/shThemePtigas.css"/>
<link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/reset.css" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/text.css" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/960.css" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/style_blog.css" />
<link rel="shortcut icon" type="image/gif"  href="<?php bloginfo( 'template_url' ); ?>/fav.gif" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>"/>
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<script type="text/javascript">SyntaxHighlighter.all();</script>
</head>
<body>
<div class="container_16">
	<div class="grid_3 prefix_13" >
		<div id="top-menu" style="background:#eee">
		<ul>
			<li><a href="/"><div class="img"><img src="<?php bloginfo( 'template_url' ); ?>/img/home_button.gif" /></div>Home</a></li>
			<li><a href="/blog/"><div class="img"><img src="<?php bloginfo( 'template_url' ); ?>/img/blog_button.gif" /></div>Blog</a></li>
		</ul>
		</div>
	</div>
	<div class="clear"></div>
	<div class="grid_16">		
		<div class="clear"></div>
		<div id="header"  class="grid_14 prefix_1 sufix_1 alpha">
			<img src="<?php bloginfo( 'template_url' ); ?>/img/header.png" />
		</div>
		
		<div class="grid_16">
			<div class="grid_13 alpha" style="text-align:left; margin-top:50px">