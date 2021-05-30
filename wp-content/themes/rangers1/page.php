<?php get_header() ?>


<?php
if (have_posts()) :
	while (have_posts()) : the_post();
		get_template_part('template-parts/page/breadcrumb', null, [
			'page_title' => get_the_title()
		]);


?>
		<!-- Club Section Start -->
		<div class="rs-club sec-spacer">
			<div class="container">
				<h3 class="title-bg"><?= get_the_title() ?></h3>
				<div class="row">
					<div class="col-md-6 col-ms-12">
						<div class="rs-club-text">
							<?php the_content() ?>
						</div>
					</div>
					<div class="col-md-6  col-ms-12">
						<div class="rs-club-image">
							<?php the_post_thumbnail() ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Club Section End -->

<?php



	endwhile;

else :

	get_template_part('template-parts/content', 'none');

endif;
?>

<?php get_footer() ?>