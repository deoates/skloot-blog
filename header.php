<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">

		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">

    <link href="<?php bloginfo('template_directory') ?>/style.css" rel="stylesheet">

    <!-- test comment -->
    <script src="https://use.typekit.net/qtl5wlo.js"></script>
    <script>try{Typekit.load({ async: false });}catch(e){}</script>

		<?php wp_head(); ?>


	</head>
	<body <?php body_class(); ?>>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1520961921560530";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
      <header class="header clear" role="banner">
        <div class="subscribe-bar">
          <div class="restrict">
            <i class="icon-email"></i><h1>Subscribe To <strong>Up &amp; To The Right</a></strong></h1>
            <form action="http://skloot.us12.list-manage.com/subscribe/post">
            <input type="hidden" name="u" value="1d30a60074b21254b24d57bbd">
            <input type="hidden" name="id" value="06bc76bc4d">
            <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" placeholder="Email address" value=""><input type="submit" value="Join">
            </form>
            <p><em>"I couldn't do my job without Greg's emails. Period."</em></p>
          </div>
        </div>
        <div class="restrict">
          <div class="graph-bg"></div>
          <div class="branding">

            <div class="logo">
              <a href="<?php echo home_url(); ?>">
                <h1>Up & To The Right</h1>
              </a>
            </div>

            <p class="tagline">
              Your source for experience-tested sales,<br>
              marketing, entrepreneurship, hustle. 
            </p>
          </div>

          <div class="header-search">
            <a data-href="show-search">
              <i class="icon-search"></i>
            </a>
            <?php get_template_part('searchform'); ?>
          </div>
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>

        </div>
        <!-- /restrict -->

			</header>
			<!-- /header -->
      <div class="content-wrapper">
        <div class="restrict">
