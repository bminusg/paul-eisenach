<!DOCTYPE html>
<html lang="en">
<head>
	<title>Paul Eisenach</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<!-- ================================================== Meta tags ================================================== -->
	<meta property="description" content='Paul Eisenach / Music composer & producer / Musiker / Produzent / Filmmusik' />
	<!-- Google will often use this as its description of your page/site. Make it good. -->
	<meta property="google-site-verification" content='Paul Eisenach / Music composer & producer / Musiker / Produzent / Filmmusik Berlin LondonLeonhard Eisenach Ryan Robinson A Million Million  Verpiss dich schneewittchen craving dorst Blutschwestern Ferien Nörd Mimi Reema Luca Vasta Okan Frei Die kleinen und die Bösen Falciani Unter Null Cüneyt Kaya Wieland Franke Bela Brauckmann Streetphilosophy Arte Nena Saskia Diesing' />
	<!-- Speaking of Google, don't forget to set your site up:  http://google.com/webmasters -->

	<!--open graph meta tags-->
	<meta property="og:title" content="Paul Eisenach" />
	<meta property="og:site_name" content="Paul Eisenach Portfolio" />
	<meta property="og:url" content="http://www.pauleisenach.com/" />
	<meta property="og:locale" content="en_UK" />
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/pauleisenach-share.jpg" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:type" content="article" />
	<meta property="og:description" content='Music for moving pictures' />

	<!--Favicon-->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#1b1b1b">

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/pauleisenach.js"></script>

</head>

<body onload="init();">
	<?php
		if ( is_user_logged_in() ) {
			echo '<header id="header-wrapper" style="top:32px;">';
		} else { echo '<header id="header-wrapper">'; }
	?>
		

  
		
    <div id="header-content-wrapper" class="center">
      <nav id="header-nav">
        <ul>
					<li> <?php echo '<a href="' . get_home_url() . '/#film-music" class="smoothScroll updateNav-delay">Music for Film</a>' ?></li>
					<li> <?php echo '<a href="' . get_home_url() . '/#music" class="smoothScroll updateNav-delay">Music</a>' ?></li>
					<li> <?php echo '<a href="' . get_home_url() . '/#music-vid" class="smoothScroll updateNav-delay">Films for Music</a>' ?></li>
					<li> <?php echo '<a href="' . get_home_url() . '/#contact" class="smoothScroll updateNav-delay">Contact</a>' ?></li>
        </ul>
      </nav>
      <trigger-mobil class="updateNav">
        <span class="menu"></span>
        <span class="close"></span>
      </trigger-mobil>
			<?php echo '<a href="' . get_home_url() . '" target="_self">'; ?>
				<logo></logo>
			<?php echo '</a>'; ?>
    </div>
  </header>