<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fresh-vegetable
 */

get_header();
?>

	<main class="main-contents">
		<div class="page-content mb-0">
			<div class="bg-head">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="news mt-0">
				<div class="container">
					<div class="content-detail">
						<?php echo get_the_content(); ?> 
					</div>
					<div class="other-news">
						<h3 class="icon-news-content mb-0">Cập nhập tin tức từ Ludala để nhận chương trình khuyến mãi</h3>
						<div class="row">
							<?php 
		                        $args=array(
		                            'post_type' => 'post',
		                            'orderby'   => 'publish_date',
		                            'order'     => 'DESC',
		                            'paged'     => get_query_var('paged') ? get_query_var('paged') : 1,
		                            'posts_per_page' => 3,
		                        );
		                        $my_query = new wp_query($args);
		                        $max_num_pages = $my_query->max_num_pages;
		                    ?>

		                    <?php if ( $my_query->have_posts() ): ?>
		                        <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
		                        	<div class="col-lg-4">
										<div class="news-body">
											<a href="<?php echo get_the_permalink() ?>">
												<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
												<div class="news__info">
													<h3><?php echo get_the_title(); ?></h3>
													<div class="detail">
														<?php echo get_the_excerpt(); ?> 
													</div>
													<div class="time"><?php echo get_the_date('d.m.Y'); ?></div>
												</div>
											</a>
										</div>
									</div> 
		                        <?php endwhile ?>
		                    <?php endif;wp_reset_query(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

<?php
get_footer();
