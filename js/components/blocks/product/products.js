import { GetPostsAjax } from '../modules/GetPostsAjax';

const products = ( $ ) => {
	/* global productsData, productsAjax */
	/* eslint no-undef: "error" */

	const $productsListSkeletons = $( '.products__list--skeletons' );
	const $productsSection = $( '.products' );
	const $productsListOriginal = $( '.products__list--original' );
	const $productsNavigation = $( '.products__navigation' );

	if ( $productsListOriginal.length === 0 ) {
		return;
	}

	let allProductsOutputIsEnabled;
	let pageNumber;
	let postsPerPage;
	let pageSlug;
	let parentPageId;

	if ( typeof productsData.allProductsOutputIsEnabled !== 'undefined' ) {
		allProductsOutputIsEnabled = productsData.allProductsOutputIsEnabled;
	}

	if ( typeof productsData.postsPerPage !== 'undefined' ) {
		postsPerPage = productsData.postsPerPage;
	}

	if ( typeof productsData.pageNumber !== 'undefined' ) {
		pageNumber = productsData.pageNumber;
	}

	if ( typeof productsData.pageSlug !== 'undefined' ) {
		pageSlug = productsData.pageSlug;
	}

	if (
		typeof productsData.parentPageId !== 'undefined' &&
		productsData.parentPageId
	) {
		parentPageId = productsData.parentPageId;
	} else {
		$productsListSkeletons.hide();
		return;
	}

	const getPostsAjax = new GetPostsAjax( {
		els: {
			$section: $productsSection,
			$original: $productsListOriginal,
			$skeleton: $productsListSkeletons,
			$navigation: $productsNavigation,
		},
		data: {
			action: 'products_action',
			nonce: productsAjax.nonce,
			parent_page_id: parentPageId,
			page_slug: pageSlug,
			all_products_output_is_enabled: allProductsOutputIsEnabled,
			posts_per_page: postsPerPage,
			page_number: pageNumber,
		},
		ajaxOptions: {
			url: productsAjax.url,
		},
	} );

	getPostsAjax.load();
};

export { products };
