<?php
/**
 * Serial Product Compare Block Template.
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
	$kemroc_spd_id = 'serial-product-compare-' . $block['id'];
	if ( ! empty( $block['anchor'] ) ) {
		$kemroc_spd_id = $block['anchor'];
	}

	// Create class attribute allowing for custom "className" and "align" values.
	$kemroc_spd_class_name = 'serial-product-compare';
	if ( ! empty( $block['className'] ) ) {
		$kemroc_spd_class_name .= ' ' . $block['className'];
	}
	if ( ! empty( $block['align'] ) ) {
		$kemroc_spd_class_name .= ' align' . $block['align'];
	}

	// Load values and assing defaults.
	$kemroc_spd_title           = get_field( 'title' );
	$kemroc_spd_serial_products = get_field( 'serial_products' );

	$kemroc_spd_current_lang = '';
	if ( function_exists( 'pll_current_language' ) ) {
		$kemroc_spd_current_lang = pll_current_language();
	}
	
	$kemroc_spd_enable_measure_units_switcher = 'en' === $kemroc_spd_current_lang;
	?>

	<section id="<?php echo esc_attr( $kemroc_spd_id ); ?>" class="<?php echo esc_attr( $kemroc_spd_class_name ); ?>">
		<div class="container serial-product-compare__content">
			<h3 class="serial-product-compare__title">
				<?php echo esc_html( $kemroc_spd_title ); ?>
			</h3>
			<!-- /.serial-product-compare__title -->

			<?php if ( $kemroc_spd_serial_products ) : ?>
				<ul class="serial-product-compare__list">

					<?php foreach ( $kemroc_spd_serial_products as $kemroc_spd_key => $kemroc_spd_serial_product ) : ?>
						<?php
						$kemroc_spd_product_photo_id = '';
						if ( $kemroc_spd_serial_product['custom_photo'] ) {
							if ( ! empty( $kemroc_spd_serial_product['photo'] ) ) {
								$kemroc_spd_product_photo_id = $kemroc_spd_serial_product['photo'];
							}
						} else {
							$kemroc_spd_product_photo_id = get_post_thumbnail_id( $kemroc_spd_serial_product['page']->ID );
						}
						?>
						<li class="serial-product-compare__item sp-item">
							<div class="sp-item__header">
								<div class="sp-item__photo">
									<?php echo wp_get_attachment_image( $kemroc_spd_product_photo_id ); ?>
								</div>
								<!-- /.sp-item__photo -->
								<h6 class="sp-item__title">
									<?php echo esc_html( $kemroc_spd_serial_product['page']->post_title ); ?>
								</h6>
								<!-- /.sp-item__title -->
								<div class="sp-item__subtitle">
									<?php echo esc_html( $kemroc_spd_serial_product['subtitle'] ); ?>
								</div>
								<!-- /.sp-item__subtitle -->
							</div>
							<!-- /.sp-item__header -->

							<div class="sp-item__text">

								<?php if ( $kemroc_spd_enable_measure_units_switcher ) : ?>
									<span id='mu-switcher' class="sp-item__title-swither">
										<?php esc_html_e( 'Maßeinheit:', 'kemroc' ); ?>
										<span class="mu-flag" data-lang-code="default" data-item-id="<?php echo $kemroc_spd_key; //phpcs:ignore ?>"></span>
										<!-- /.mu-flag -->
										<span class="mu-flag" data-lang-code="us" data-item-id="<?php echo $kemroc_spd_key; //phpcs:ignore ?>"></span>
										<!-- /.mu-flag -->
									</span>
									<!-- /.sp-item__title-swither -->
								<?php endif; ?>

								<?php if ( $kemroc_spd_serial_product['params'] ) : ?>
									<ul class="sp-item__params">

										<?php foreach ( $kemroc_spd_serial_product['params'] as $kemroc_spd_serial_product_param ) : ?>
											<li class=" arrow-list-item-full sp-item__param">
												<div class="arrow-list-item-full__property">
													<div class="arrow-list-item-full__arrow">
														<?php get_template_part( 'template-parts/icons/arrow-right', null, array( 'fill' => '#FF6000' ) ); ?>
													</div>
													<!-- /.arrow-list-item-full__arrow -->
													<?php echo esc_html( $kemroc_spd_serial_product_param['name']->post_title ); ?>
												</div>
												<!-- /.arrow-list-item-full__property -->
												<div class="mu-value arrow-list-item-full__value" data-lang-code="default" data-item-id="<?php echo $kemroc_spd_key; //phpcs:ignore ?>">
													<?php echo wp_kses_post( $kemroc_spd_serial_product_param['value'] ); ?>
												</div>
												<!-- /.arrow-list-item-full__value -->
												
												<?php if ( ! empty( $kemroc_spd_serial_product_param['us_value'] ) ) : ?>
                                                    <div class="mu-value arrow-list-item-full__value" data-lang-code="us" data-item-id="<?php echo $kemroc_spd_key; //phpcs:ignore ?>">
														<?php echo esc_html( $kemroc_spd_serial_product_param['us_value'] ); ?>
													</div>
													<!-- /.arrow-list-item-full__value -->
												<?php endif; ?>

											</li>
											<!-- /. arrow-list-item-full sp-item__param -->
										<?php endforeach; ?>

									</ul>
									<!-- /.sp-item__params -->
								<?php endif; ?>

								<?php if ( $kemroc_spd_serial_product['areas_use'] ) : ?>
									<div class="sp-item__application-areas spi-application-areas">
										<div class="spi-application-areas__title">
											<?php echo esc_html( $kemroc_spd_serial_product['areas_use']['title'] ); ?>
										</div>
										<!-- /.spi-application-areas__title -->
										<div class="spi-application-areas__list">
											<?php echo wp_kses_post( $kemroc_spd_serial_product['areas_use']['list'] ); ?>
										</div>
										<!-- /.spi-application-areas__list -->
									</div>
									<!-- /.sp-item__application-areas spi-application-areas -->
								<?php endif; ?>

								<div class="sp-item__bottom">
									<div class="sp-item__amount amount-series-models">
										<span class="amount-series-models__number">
											<?php 
											echo esc_html( 
												kemroc_get_models_amount( 
													$kemroc_spd_serial_product['page']->post_type, 
													$kemroc_spd_serial_product['page']->ID 
												) 
											);
											?>
										</span>
										<?php esc_html_e( 'modelle', 'kemroc' ); ?> 
									</div>
									<!-- /.sp-item__amount amount-series-models -->
									<a 
										href="<?php the_permalink( $kemroc_spd_serial_product['page']->ID ); ?>" 
										class="btn btn-accent btn-rounded arrow-right sp-item__btn"
									>
										<?php esc_html_e( 'Details', 'kemroc' ); ?> 
									</a>
									<!-- /.sp-item__btn -->
								</div>
								<!-- /.sp-item__bottom -->
							</div>
							<!-- /.sp-item__text -->
						</li>
						<!-- /.serial-product-compare__item sp-item -->
					<?php endforeach; ?>

				</ul>
				<!-- /.serial-product-compare__list -->
			<?php endif; ?>

		</div>
		<!-- /.container serial-product-compare__content -->
	</section>
	<!-- /.serial-product-compare -->

	<?php
endif;
