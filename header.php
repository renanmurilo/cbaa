<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>
		<meta name="description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?>">

		<meta property="og:type" content="website"/>
		<meta property="og:title" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?>"/>
		<meta property="og:description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?>"/>
		<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">

		<!-- Inicio Wordpress Header -->
		<?php wp_head(); ?>
		<!-- Final Wordpress Header -->
	</head>

	<body>		
		<header class="header">
			<div class="shell">
				<div class="content__menu">
                    <a href="<?php echo get_home_url(); ?>" class="logo">
                        <img src="<?php the_field('logo_header', 'option'); ?>" alt="Cbaa">
                    </a>

                    <a href="#" class="open__menu">
                        <span class="hamburger-line hamburger-line--top"></span>
                        <span class="hamburger-line hamburger-line--middle"></span>
                        <span class="hamburger-line hamburger-line--bottom"></span>
                    </a>
                    
                    <nav class="navbar">
						<a href="" class="close__menu">
							x
						</a>

						<a href="<?php echo get_home_url(); ?>" class="logo__mobile">
							<img src="<?php the_field('logo_header', 'option'); ?>" alt="Cbaa">
						</a>

                        <?php
                            $args = array(
                                'menu' => 'principal',
                                'theme_location' => 'menu-principal',
                                'container' => false
                            );
                            wp_nav_menu( $args );
                        ?>

						<div class="sociais" id="sociais">
							<a href="<?php the_field('link_do_linkedin', 'option'); ?>" target="_blank">
								<img src="<?php the_field('linkedin_mobile', 'option'); ?>" alt="">
							</a>

							<a href="<?php the_field('link_do_facebook', 'option'); ?>" target="_blank">
								<img src="<?php the_field('facebook_mobile', 'option'); ?>" alt="">
							</a>

							<a href="<?php the_field('link_do_instagram', 'option'); ?>" target="_blank">
								<img src="<?php the_field('instagram_mobile', 'option'); ?>" alt="">
							</a>

							<a href="<?php the_field('link_dio_whatsapp', 'option'); ?>" target="_blank">
								<img src="<?php the_field('whatsapp_mobile', 'option'); ?>" alt="">
							</a>
						</div>
                    </nav>
                </div>
			</div>
		</header>