<?php 
/* Template Name: Creative Cache Home Page */ 

get_header('full'); ?>

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">

				<section id="primary" class="content-area col-sm-12">
					<main id="main" class="site-main" role="main">

						<div id="home-logo">
							<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/creative-cache-green.png" alt="Creative Cache Logo" />
						</div>

						<?php
							while ( have_posts() ) : the_post(); ?>
								<div class="entry-content-page">
									<?php the_content(); ?>
								</div>

							<?php
							endwhile;
						?>

					</main><!-- #main -->
				</section><!-- #primary -->
			</div>
		</div>
	</div>

	<div id="homeProjects" class="container-fluid">
		<div class="row">
			<div class="col-sm-6 full-image">
				<div class="card bg-dark text-white">
					<div class="card-img work-img-05"></div>
					<a href="/creative-cache-social-tracker-project" class="card-img-overlay">
						<table class="project-table">
							<tr>
								<td class="project-title">
									<h2>Creative Cache Social Tracker</h2>
									<p>Web Design &amp; Development</p>
								</td>
							</tr>
						</table>
					</a>
				</div>
			</div>
			<div class="col-sm-6 full-image">
				<div class="card bg-dark text-white">
					<div class="card-img work-img-02"></div>
					<a href="/kate-haus" class="card-img-overlay">
						<table class="project-table">
							<tr>
								<td class="project-title">
									<h2>Kate Haus</h2>
									<p>Branding | Web Design &amp; Development</p>
								</td>
							</tr>
						</table>
					</a>
				</div>
			</div>
			<div class="col-sm-6 full-image">
				<div class="card bg-dark text-white">
					<div class="card-img work-img-03"></div>
					<a href="/creative-cache-branding" class="card-img-overlay">
						<table class="project-table">
							<tr>
								<td class="project-title">
									<h2>Creative Cache</h2>
									<p>Branding | Web Design &amp; Development</p>
								</td>
							</tr>
						</table>
					</a>
				</div>
			</div>
			<div class="col-sm-6 full-image">
				<div class="card bg-dark text-white">
					<div class="card-img work-img-01"></div>
					<a href="/sydney-kerschen-interiors" class="card-img-overlay">
						<table class="project-table">
							<tr>
								<td class="project-title">
									<h2>Sydney Kerschen Interiors</h2>
									<p>Branding</p>
								</td>
							</tr>
						</table>
					</a>
				</div>
			</div>
			<div class="col-sm-6 full-image">
				<div class="card bg-dark text-white">
					<div class="card-img work-img-04"></div>
					<a href="/morgan-spencer-design" class="card-img-overlay">
						<table class="project-table">
							<tr>
								<td class="project-title">
									<h2>Morgan Spencer Design</h2>
									<p>Branding | Web Design &amp; Development</p>
								</td>
							</tr>
						</table>
					</a>
				</div>
			</div>
		</div>
	</div>

	<?php if ( is_active_sidebar( 'home_bottom_1' ) ) : ?>
		<div id="dribbble-sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'home_bottom_1' ); ?>
			<div class="clear"></div>
		</div><!-- #primary-sidebar -->
	<?php endif; ?>

	<style type="text/css">
		.work-img-01 { background: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/kerschen-interiors.jpg') center center no-repeat; }
		.work-img-02 { background: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/kate-haus.png') center center no-repeat; }
		.work-img-03 { background: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/cc-business-card.png') center center no-repeat; }
		.work-img-04 { background: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/MSD.png') center center no-repeat; }
		.work-img-05 { background: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/cc-social-tracker.png') center center no-repeat; }
	</style>

<?php
get_footer();