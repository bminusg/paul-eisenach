<?php

 get_header(); 
 
 $array = [
	"subtitle"      => get_post_meta(get_the_ID(), 'subtitle' , true),
	"job"           => get_post_meta(get_the_ID(), 'job' , true),
	"cooperation"   => get_post_meta(get_the_ID(), 'in-cooperation-with' , true),
	"directed"      => get_post_meta(get_the_ID(), 'directed-by' , true),
	"cast"          => get_post_meta(get_the_ID(), 'cast' , true),
	"production"    => get_post_meta(get_the_ID(), 'production' , true),
	"release"       => get_post_meta(get_the_ID(), 'release' , true),
	"legal"         => get_post_meta(get_the_ID(), 'legal' , true),
	"bonus1"        => get_post_meta(get_the_ID(), 'bonus-1' , true),
	"bonus2"        => get_post_meta(get_the_ID(), 'bonus-2' , true),
	"bonus3"        => get_post_meta(get_the_ID(), 'bonus-3' , true),
	"bonus4"        => get_post_meta(get_the_ID(), 'bonus-4' , true),
	"bonus5"        => get_post_meta(get_the_ID(), 'bonus-5' , true),
	"bonus6"        => get_post_meta(get_the_ID(), 'bonus-6' , true),
	"bonus7"        => get_post_meta(get_the_ID(), 'bonus-7' , true),
	"bonus8"        => get_post_meta(get_the_ID(), 'bonus-8' , true),
	"bonus9"        => get_post_meta(get_the_ID(), 'bonus-9' , true),
	"bonus10"        => get_post_meta(get_the_ID(), 'bonus-10' , true),
	"bonus11"        => get_post_meta(get_the_ID(), 'bonus-11' , true),
	"bonus12"        => get_post_meta(get_the_ID(), 'bonus-12' , true),
	"bonus13"        => get_post_meta(get_the_ID(), 'bonus-13' , true),
	"bonus14"        => get_post_meta(get_the_ID(), 'bonus-14' , true),
	"bonus15"        => get_post_meta(get_the_ID(), 'bonus-15' , true)
];



 ?>

 

	<main class="single-article">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="center" id="post-<?php the_ID(); ?>">
			
			<div class="article-img-header">
				<?php 
					$getVideoSrc = get_post_meta(get_the_ID(), 'video-src' , true);
					if ($getVideoSrc == ""){
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} 
					} 
					else {
						echo '<iframe frameborder="0" src="' . $getVideoSrc . '"></iframe>';
					}
				?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</div>
			
			<div class="article-main">
				
				<div class="entry-content col-8">
					<ul>
						<?php
						foreach ($array as $key => $value):
							if ($value != "") {
								echo '<li id="' . $key .'">' . $value . '</li>';					
							}							
						endforeach;

						
						
						

					?>
				</div>
				<div class="entry-sidebar col-4">
					<ul>
						<?php
							echo '<h2>Linkliste</h2>';
							$linklabel = get_post_meta(get_the_ID(), 'link-label' , true);
							$link = get_post_meta(get_the_ID(), 'link' , true);
							$linklabel2 = get_post_meta(get_the_ID(), 'link-label-2' , true);
							$link2 = get_post_meta(get_the_ID(), 'link-2' , true);
							$linklabel3 = get_post_meta(get_the_ID(), 'link-label-3' , true);
							$link3 = get_post_meta(get_the_ID(), 'link-3' , true);

							if ($link) {
								echo '<li><a href="' . $link . '" target="_blank">' . $linklabel . '</a></li>';
							}
							if ($link2) {
								echo '<li><a href="' . $link2 . '" target="_blank">' . $linklabel2 . '</a></li>';
							}
							if ($link3) {
								echo '<li><a href="' . $link3 . '" target="_blank">' . $linklabel3 . '</a></li>';
							}
						?>
						<li>
							<h2>Music for film</h2>
							<?php 
								echo '<ul>';
								$loop = new WP_Query( array( 'post_type' => 'musicforfilm', 'posts_per_page' => 10 ) );
								while ( $loop->have_posts() ) : $loop->the_post();
									the_title( '<li"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></li>' );
								endwhile; 
								echo '</ul>';
							?>
						</li>
						<li>
							<h2>Music</h2>
							<?php 
								echo '<ul>';
								$loop = new WP_Query( array( 'post_type' => 'music', 'posts_per_page' => 10 ) );
								while ( $loop->have_posts() ) : $loop->the_post();
									the_title( '<li><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a><li>' );
								endwhile; 
								echo '</ul>';
							?>
						</li>
						<li>
							<h2>Films for music</h2>
							<?php 
								echo '<ul>';
								$loop = new WP_Query( array( 'post_type' => 'filmformusic', 'posts_per_page' => 10 ) );
								while ( $loop->have_posts() ) : $loop->the_post();
									the_title( '<li class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></li>' );
								endwhile; 
								echo '</ul>';
							?>
						</li>
					</ul>
				</div>
			</div>
			
		</article>


	<?php endwhile; endif; ?>

	
</main>

<?php get_footer(); ?>