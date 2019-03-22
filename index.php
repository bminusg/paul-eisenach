<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<main>
	<section id="hero" class="fullscreen">
		<video width="100%" height="100%" webkit-playsinline="true" playsinline="true" poster="<?php echo get_template_directory_uri(); ?>/video/landscape.jpg" playsinline webkit-playsinline autoplay muted loop id="videoLandscape">
			<source src="<?php echo get_template_directory_uri(); ?>/video/landscape.mp4" type="video/mp4">
			<source src="<?php echo get_template_directory_uri(); ?>/video/landscape.ogg" type="video/ogg">
			<source src="<?php echo get_template_directory_uri(); ?>/video/landscape.webm" type="video/webm">
			NO VIDEO-TAG SUPPORTED. Please update your Browser.
		</video>

		<video width="100%" height="100%" webkit-playsinline="true" playsinline="true" poster="<?php echo get_template_directory_uri(); ?>/video/portrait.jpg" playsinline webkit-playsinline autoplay muted loop id="videoPortrait">
			<source src="<?php echo get_template_directory_uri(); ?>/video/portrait.mp4" type="video/mp4">
			<source src="<?php echo get_template_directory_uri(); ?>/video/portrait.webm" type="video/webm">
			NO VIDEO-TAG SUPPORTED. Please update your Browser.
		</video>
		<span class="copyright">&copy; Sebastian Klatt | N&Ouml;RD</span>
	</section>

	<section name="film-music">
		<div class="center">
			<h1>Music for Film</h1>
		</div>

		<ul class="grid center" >

			<?php
				$custom_query = new WP_Query( 
					array(
						'post_type' => 'musicforfilm',
						'posts_per_page' => 100
					) 
				);
				if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); 

					get_template_part( 'loops/content', get_post_format() );

					endwhile; endif; wp_reset_query();
			?>
			<li>
				<h2>Paul Eisenach & A Million Million</h2>
				<p>After studying at the film university “HFF” Konrad Wolf Babelsberg, I took the oppor-tunity to begin composing and producing music for various motion pictures. <br>As there are a million frames and a million ideas, instruments, and voices needed, London based composer Ryan Robinson and I established “A Million Million”; a collective of artists that contribute to my score and song productions. <br>Wieland Franke, Laura Daedelow, Leonhard Eisenach, Bela Brauckmann, and Jonas Hofer have most considerably injected their respective talents.</p>
	        </li>
		</ul>
	</section>
    <section name="music" id="music">
		<div class="center">
			<h1>Music</h1>
		</div>
		<ul class="grid center">
			<?php
				$custom_query = new WP_Query( 
					array(
						'post_type' => 'music',
						'posts_per_page' => 100
					) 
				);
				if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); 

					get_template_part( 'loops/content', get_post_format() );

					endwhile; endif; wp_reset_query();
			?>
			<li>
				<h2 >Bands and Songwriting</h2>
          		<p>Beside the work with my brother for our band NÖRD, I have played for many artists in stage and studio scenarios.
Throughout, I have had the chance to work with producers Stephen Street, Franz Plasa, and Gordon Rafael.<br> I have also written and collaborated with artists such as Oliver Koletzki and Alle Farben.</p>
        	</li>		
		</ul>
	</section>
	<section name="music-vid" id="music">
		<div class="center">
			<h1>Films for Music</h1>
		</div>
		<ul class="grid center">
			<?php
				$custom_query = new WP_Query( 
					array(
						'post_type' => 'filmformusic',
						'posts_per_page' => 100
					) 
				);
				if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); 

					get_template_part( 'loops/content', get_post_format() );

					endwhile; endif; wp_reset_query();
			?>
			<li>
				<h2>Films for Music</h2>
				<p>I adore allowing music and pictures to dance together. In this endeavour, I have enjoyed producing, directing, and editing music videos along with cinematographer Sebastian Klatt. This has been for a crop of artists including Rainbirds, MiMi, and my band NÖRD.</p>
			</li>
		</ul>
	</section>
	<div id="expandWrapper">
		<ul>
			<li id="expandPreview" class="expand-slide">
				<iframe id="videoFrame" frameborder="0"></iframe>
				<div id="imageFrame"></div>
			</li>
			<li id="closeWrapper">
			<div id="stroke"></div>
			<div id="close"></div>
			</li>
			<li id="expandFacts" class="expand-slide">
			<expand-facts-layer>
				<div id="bottom-layer"></div>
				<expand-facts>
					<h1></h1>
					<div id="expandSubInfos">
						<subtitle></subtitle><job></job>
					</div>
					<ul id="factList"></ul>
				</expand-facts>
			</expand-facts>
			</li>
		</ul>
	</div>
</main>
	

<?php get_footer(); ?>
