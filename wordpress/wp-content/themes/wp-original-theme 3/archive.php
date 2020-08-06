<?php get_header(); ?>
<div class="contents">

	<div class="page-title">ARCHIVE</div>

	<div class="container">
		<main class="main">
			<section class="archive-list">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<a href="<?php the_permalink(''); ?>" class="archive__block">

							<div class="archive__block__image">
								<?php echo getThumbImg(); ?>
							</div>

							<div class="archive__block__content">
								<div class="date-title">
									<div class="date-title__mark" style="color: <?php the_field('mark_color'); ?>">&#8734;</div>
									<div class="date-title__date"><?php echo get_the_date('Y.n.j'); ?></div>
								</div>
								<div class="archive__block__content__title">
									<?php the_field('title_excerpt'); ?>
								</div>
								<div class="archive__block__content__body">
									<?php the_field('body_excerpt'); ?>
								</div>

								<div class="archive__block__content__bottom">
									<div class="archive__block__content__bottom__tags">
										<?php
										$count = 3;
										$tag_chk = get_the_tags();
										if ($tag_chk) :
											$tags = array_slice(get_the_tags(), 0, $count);
										?>
											<object>
												<?php foreach ($tags as $tag) : ?>
													<a href="<?php echo get_tag_link($tag->term_id) ?>">
														#<?php echo getTrimText($tag->name, 10); ?>
													</a>
												<?php endforeach; ?>
											</object>
										<?php endif; ?>
									</div>

									<div class="archive__block__content__bottom__sns">
										<object>
											<a href="">
												<img src="<?php bloginfo('template_directory'); ?>/images/common/facebook.png" alt="facebook">
											</a>
										</object>
										<object>
											<a href="">
												<img src="<?php bloginfo('template_directory'); ?>/images/common/twitter.png" alt="twitter">
											</a>
										</object>
									</div>
								</div>
							</div>
						</a>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php
				the_posts_pagination(array(
					'prev_text' => '',
					'next_text' => '',
					'mid_size' => 4
				));
				?>

			</section>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer();
