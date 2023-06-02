<?php
/**
 * Model Info Block Template.
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
	$kemroc_mi_id = 'product-general-info-' . $block['id'];
	if ( ! empty( $block['anchor'] ) ) {
		$kemroc_mi_id = $block['anchor'];
	}

	// Create class attribute allowing for custom "className" and "align" values.
	$kemroc_mi_class_name = 'model-info bg-primary text-white text-center';
	if ( ! empty( $block['className'] ) ) {
		$kemroc_mi_class_name .= ' ' . $block['className'];
	}
	if ( ! empty( $block['align'] ) ) {
		$kemroc_mi_class_name .= ' align' . $block['align'];
	}

	// Load values and assing defaults.
	$kemroc_mi_params     = get_field( 'params' );
	$kemroc_mi_drawing_id = get_field( 'drawing' );
	$kemroc_mi_descr      = get_field( 'descr' );
	$kemroc_mi_drawing_id = get_field( 'drawing' );
	$kemroc_mi_video      = get_field( 'video' );
	$kemroc_mi_photos     = get_field( 'photos' );

	$kemroc_mi_drawing = wp_get_attachment_image(
		$kemroc_mi_drawing_id,
		'medium_large',
		false,
		array( 'alt' => wp_get_attachment_caption( $kemroc_mi_drawing_id ) )
	);
	
	$kemroc_mi_parent_id      = wp_get_post_parent_id();
	$kemroc_mi_iframe_src_doc = '';

	if ( $kemroc_mi_video['id'] ) {
		ob_start();
		get_template_part(
			'template-parts/blocks/components/youtube-video',
			null,
			array( 'video' => $kemroc_mi_video )
		);
		$kemroc_mi_iframe_src_doc = ob_get_clean();
	}
	?>

	<section id="<?php echo esc_attr( $kemroc_mi_id ); ?>" class="<?php echo esc_attr( $kemroc_mi_class_name ); ?>">
		<div class="container model-info__content">
			<header class="model-info__head">
				<div class="model-info__parent-page-name">
					<?php echo wp_kses_post( get_the_title( $kemroc_mi_parent_id ) ); ?>
				</div>
				<!-- /.model-info__parent-page-name -->
				<h1 class="model-info__title">
					<?php the_title(); ?>
				</h1>
				<!-- /.model-info__title -->
			</header>
			<!-- /.model-info__head -->
			<section class="model-info__tabs model-tabs">
				<div class="model-tabs__head">
					<div class="model-tabs__tab model-tabs__tab--active">
						<?php esc_html_e( 'TECHNISCHE DATEN', 'kemroc' ); ?>
					</div>
					<!-- /.model-tabs__tab -->

					<?php if ( $kemroc_mi_video['id'] ) : ?>
						<div class="model-tabs__tab">
							<?php esc_html_e( 'VIDEO', 'kemroc' ); ?>
						</div>
						<!-- /.model-tabs__tab -->
					<?php endif; ?>

					<div class="model-tabs__tab">
						<?php esc_html_e( 'FOTOS', 'kemroc' ); ?>
					</div>
					<!-- /.model-tabs__tab -->
				</div>
				<!-- /.model-tabs__head -->
				<div class="model-tabs__body">
					<div class="model-tabs__inset model-tabs__inset--visible">
						<div class="model-tabs__tech-info">

							<?php if ( $kemroc_mi_params ) : ?>
								<ul class="model-tabs__params">

									<?php foreach ( $kemroc_mi_params as $kemroc_mi_param ) : ?>
										<li class="model-tabs__param model-tabs-param">
											<div class="model-tabs-param__property">
												<div class="model-tabs-param__arrow">
													<?php get_template_part( 'template-parts/icons/arrow-right', null, array( 'fill' => '#FF6000' ) ); ?>
												</div>
												<!-- /.model-tabs-param__arrow -->
												<?php echo wp_kses_post( $kemroc_mi_param['param'] ); ?>
											</div>
											<!-- /.model-tabs-param__property -->
											<div class="model-tabs-param__value">
												<?php echo wp_kses_post( $kemroc_mi_param['value'] ); ?>
											</div>
											<!-- /.model-tabs-param__value -->
										</li>
										<!-- /.model-tabs__param model-tabs-param -->
									<?php endforeach; ?>

								</ul>
								<!-- /.model-tabs__params -->
							<?php endif; ?>

							<div class="model-tabs__drawing">
								<?php echo wp_kses_post( $kemroc_mi_drawing ); ?>
							</div>
							<!-- /.model-tabs__drawing -->
						</div>
						<!-- /.model-tabs__tech-info -->
						<div class="model-tabs__inset-description">
							<div class="model-tabs__accent-text">
								<?php echo wp_kses_post( $kemroc_mi_descr['accent_text'] ); ?>
							</div>
							<!-- /.model-tabs__accent-text -->
							<div class="model-tabs__text">
								<?php echo wp_kses_post( $kemroc_mi_descr['simple_text'] ); ?>
							</div>
							<!-- /.model-tabs__text -->
						</div>
						<!-- /.model-tabs__inset-description -->
					</div>
					<!-- /.model-tabs__inset -->

					<?php if ( $kemroc_mi_video['id'] ) : ?>
						<div class="model-tabs__inset">
							<div class="model-tabs__video">
								<iframe 
									width="100%" 
									height="100%" 
									src="https://www.youtube.com/embed/<?php echo esc_attr( $kemroc_mi_video['id'] ); ?>" 
									srcdoc="<?php echo esc_html( $kemroc_mi_iframe_src_doc ); ?>" 
									frameborder="0" 
									allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
									allowfullscreen 
									title="<?php echo esc_attr( $kemroc_mi_video['title'] ); ?>"
								>
								</iframe>
							</div>
							<!-- /.model-tabs__video -->
						</div>
						<!-- /.model-tabs__inset -->
					<?php endif; ?>

					<?php if ( $kemroc_mi_photos ) : ?>
						<div class="model-tabs__inset">
							<div class="swiper model-tabs__slider">
								<ul class="swiper-wrapper model-tabs__photos">

									<?php foreach ( $kemroc_mi_photos as $kemroc_mi_photo ) : ?>
										<li class="swiper-slide model-tabs__photo">
											<?php
											echo wp_get_attachment_image(
												$kemroc_mi_photo['photo'],
												'full',
												false,
												array( 'alt' => wp_get_attachment_caption( $kemroc_mi_photo['photo'] ) )
											);
											?>
										</li>
										<!-- /.model-tabs__photo -->
									<?php endforeach; ?>

								</ul>
								<!-- /.swiper-wrapper model-tabs__photos -->
								<div class="swiper-button-prev model-tabs__control model-tabs__control--prev">
									<?php get_template_part( 'template-parts/icons/arrow-left', null, array( 'fill' => '#444444' ) ); ?>
								</div>
								<!-- /.model-tabs__control -->
								<div class="swiper-button-next model-tabs__control model-tabs__control--next">
									<?php get_template_part( 'template-parts/icons/arrow-right', null, array( 'fill' => '#444444' ) ); ?>
								</div>
								<!-- /.model-tabs__control -->
							</div>
							<!-- /.swiper model-tabs__slider -->
							<div class="swiper-pagination model-tabs__slider-pagination"></div>
							<!-- /.swiper-pagination model-tabs__slider-pagination -->
						</div>
						<!-- /.model-tabs__inset -->
					<?php endif; ?>

				</div>
				<!-- /.model-tabs__body -->
			</section>
			<!-- /.model-info__tabs model-tabs -->
		</div>
		<!-- /.container model-info__content -->
	</section>
	<!-- /.model-info -->

	<?php
endif;