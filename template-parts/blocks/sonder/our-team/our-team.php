<?php
/**
 * Our Team Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 * 
 * @package kemroc
 */

if ( isset( $block['data']['gutenberg_preview_image'] ) && $is_preview ) {
	echo '<img src="' . esc_url( $block['data']['gutenberg_preview_image'] ) . '" style="max-width:100%; height:auto;">';
}

if ( ! $is_preview ) :
	// Create id attribute allowing for custom "anchor" value.
	$kemroc_ot_id = 'our-team-' . $block['id'];
	if ( ! empty( $block['anchor'] ) ) {
		$kemroc_ot_id = $block['anchor'];
	}

	// Create class attribute allowing for custom "className" and "align" values.
	$kemroc_ot_class_name = 'our-team bg-primary text-white text-center';
	if ( ! empty( $block['className'] ) ) {
		$kemroc_ot_class_name .= ' ' . $block['className'];
	}
	if ( ! empty( $block['align'] ) ) {
		$kemroc_ot_class_name .= ' align' . $block['align'];
	}

	// Load values and assing defaults.
	$kemroc_ot_title = get_field( 'title' );

	$kemroc_ot_args  = array(
		'post_type'   => 'member',
		'post_status' => 'publish',
		'order'       => 'ASC',
		'orderby'     => 'menu_order',
	);
	$kemroc_ot_query = new WP_Query( $kemroc_ot_args );
	?>

	<section id="<?php echo esc_attr( $kemroc_ot_id ); ?>" class="<?php echo esc_attr( $kemroc_ot_class_name ); ?>">
		<div class="container our-team__content">
			<h2 class="our-team__title">
				<?php echo esc_html( $kemroc_ot_title ); ?>
			</h2>
			<!-- /.our-team__title -->
			
			<?php if ( $kemroc_ot_query->have_posts() ) : ?>
				<ul class="our-team__list">
					<?php
					while ( $kemroc_ot_query->have_posts() ) : 
						$kemroc_ot_query->the_post();
						
						$kemroc_ot_this_id       = get_the_ID();
						$kemroc_ot_langs         = get_field( 'languages', $kemroc_ot_this_id );
						$kemroc_ot_avatar        = get_field( 'avatar', $kemroc_ot_this_id );
						$kemroc_ot_full_name     = get_field( 'full_name', $kemroc_ot_this_id );
						$kemroc_ot_position      = get_field( 'position', $kemroc_ot_this_id );
						$kemroc_ot_phone_number  = get_field( 'phone_number', $kemroc_ot_this_id );
						$kemroc_ot_mobile_number = get_field( 'mobile_number', $kemroc_ot_this_id );
						$kemroc_ot_email         = get_field( 'email', $kemroc_ot_this_id );
						?>
						<li class="our-team__item member-card">
							<div class="member-card__langs">
								<span class="member-card__langs-text">
									<?php esc_html_e( 'Sprachen', 'kemroc' ); ?> 
								</span>
								<!-- /.member-card__langs-text -->
								<ul class="member-card__langs-list">

									<?php if ( $kemroc_ot_langs && in_array( 'en', $kemroc_ot_langs, true ) ) : ?>
										<li class="member-card__langs-item">
											<?php get_template_part( 'template-parts/icons/english-flag' ); ?>
										</li>
										<!-- /.member-card__langs-item -->									   
									<?php endif; ?>
									
									<?php if ( $kemroc_ot_langs && in_array( 'de', $kemroc_ot_langs, true ) ) : ?>
										<li class="member-card__langs-item">
											<?php get_template_part( 'template-parts/icons/german-flag' ); ?>
										</li>
										<!-- /.member-card__langs-item -->									   
									<?php endif; ?>

								</ul>
								<!-- /.member-card__langs-list -->
								<div class="member-card__avatar">
									<?php echo wp_get_attachment_image( $kemroc_ot_avatar ); ?>
								</div>
								<!-- /.member-card__avatar -->
								<div class="member-card__name">
									<?php echo esc_html( $kemroc_ot_full_name ); ?>
								</div>
								<div class="member-card__position">
									<?php echo esc_html( $kemroc_ot_position ); ?>
								</div>
								<div class="member-card__contacts">
									<div class="member-card__phone-number">
										<?php echo esc_html( $kemroc_ot_phone_number ); ?>
									</div>
									<div class="member-card__mobile-number">
										<?php echo esc_html( $kemroc_ot_mobile_number ); ?>
									</div>
									<div class="member-card__email">
										<?php echo esc_html( $kemroc_ot_email ); ?>
									</div>
								</div>
							</div>
							<!-- /.member-card__langs -->
						</li>
						<!-- /.our-team__item member-card --> 
						<?php 
					endwhile;
					wp_reset_postdata();
					?>
				</ul>
				<!-- /.our-team__list -->
			<?php endif; ?>

		</div>
		<!-- /.container our-team__content -->
	</section>
	<!-- /.our-team -->

	<?php
endif;
