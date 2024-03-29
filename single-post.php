<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kemroc
 */

$kemroc_table_of_contents         = get_field( 'table_of_contents' );
$kemroc_article_navigation_option = get_field( 'article_navigation_option' );
$kemroc_header_tag                = get_field( 'header_tag' );

if ( 'multiple' === $kemroc_article_navigation_option ) {
	$kemroc_header_tag = '';
}

$kemroc_headers_insides = kemroc_get_headers_insides_in_content( get_the_content(), $kemroc_header_tag );

get_header();
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'cp-article' ); ?>>
		<header class="container cp-article__header">
			<div class="cp-article__text">
				<div class="cp-article__meta">
					<?php
					kemroc_posted_on(
						true,
						array(
							'main' => 'cp-article',
						)
					);
					?>
					<div class="cp-article__meta-mediator"></div>
					<!-- /.cp-article__meta-mediator -->
					<div class="cp-article__meta-text">
						<?php esc_html_e( 'Nachricht', 'kemroc' ); ?>
					</div>
					<!-- /.cp-article__meta-text -->
				</div>
				<!-- .cp-article__meta -->
				<h1 class="cp-article__title">
					<?php the_title(); ?>
				</h1>
				<!-- .cp-article__title -->
				<div class="cp-article__to-read">
					<button class="btn btn-rounded btn-border-accent arrow-right cp-article__to-read-btn"></button>
					<!-- /.cp-article__link-to-read -->
					<div class="cp-article__to-read-text">
						<?php esc_html_e( 'Lesen', 'kemroc' ); ?>
					</div>
					<!-- /.cp-article__to-read-text -->
				</div>
				<!-- /.cp-article__to-read -->
			</div>
			<!-- /.cp-article__text -->
			<?php kemroc_the_post_thumbnail( 'medium_large', 'cp-article__post-thumbnail' ); ?>
			<!-- /.cp-article__image -->
		</header>
		<!-- /.cp-article__header -->
		<div class="container cp-article__inner">
			<section class="cp-article__content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Lesen Sie weiter<span class="screen-reader-text"> "%s"</span>', 'kemroc' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);
				?>
			</section>
			<!-- .cp-article__content -->
			<div class="cp-article__aside">
				<div class="cp-article__sticky">
					<nav class="cp-article__navigation cp-article-navigation" role="list">
						<h5 class="cp-article-navigation__title">
							<?php esc_html_e( 'Inhaltsverzeichnis', 'kemroc' ); ?>
						</h5>
						<!-- /.cp-article-navigation__title -->

						<?php if ( $kemroc_headers_insides ) : ?>
							<ul class="cp-article-navigation__list">

								<?php foreach ( $kemroc_headers_insides as $kemroc_header_inside_key => $kemroc_header_inside_value ) : ?>
									<li class="cp-article-navigation__item">
										<span class="cp-article-navigation__item-number">
											<?php
											$kemroc_nav_item_number = sprintf( '%02d', ++$kemroc_header_inside_key );
                                            echo $kemroc_nav_item_number; //phpcs:ignore 
											?>
										</span>
										<!-- /.cp-article-navigation__item-number -->
                                        <a href="#title-<?php echo $kemroc_header_inside_key; //phpcs:ignore ?>"
											class="cp-article-navigation__item-link">
											<?php echo wp_kses_post( $kemroc_header_inside_value ); ?>
										</a>
										<!-- /.cp-article-navigation__item-link -->
									</li>
									<!-- /.cp-article-navigation__item -->
								<?php endforeach; ?>

							</ul>
							<!-- /.cp-article-navigation__list -->
						<?php endif; ?>

					</nav>
					<!-- /.cp-article__navigation -->
					<div class="cp-article__share">
						<p class="cp-article__share-text">
							<?php esc_html_e( 'Teilen Sie den Artikel:', 'kemroc' ); ?>
						</p>
						<!-- /.cp-article__share-text -->
						<div class="cp-article__share-list"></div>
						<!-- /.cp-article__share-list -->
					</div>
					<!-- /.cp-article__share -->
				</div>
				<!-- /.cp-article__sticky -->
			</div>
			<!-- /.cp-article__aside -->

		</div>
		<!-- /.container cp-article__inner -->

		<?php if ( ! empty( $kemroc_header_tag ) ) : ?>
			<script>
				var headerTag = '<?php echo esc_html( $kemroc_header_tag ); ?>';
			</script>
		<?php endif; ?>

	</article>
	<!-- #post-<?php the_ID(); ?> -->

<?php
get_footer();
