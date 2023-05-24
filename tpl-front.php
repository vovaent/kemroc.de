<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package firmen
 * Template Name: Home Page Template
 */
?>
<!doctype html>
<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">

</head>

<body>
    <header class="header desktop">
        <div class="container">
            <div class="header__top">
                <a href="#" class="site-logo">
                    <img src="<?= get_template_directory_uri(); ?>/images/logo.svg" alt="">
                </a>
                <select class="lang-switcher">
                    <option>ENG</option>
                </select>
                <div class="header__top-btns">
                    <a class="site-search"></a>
                    <a class="header__phone" href="tel:+49 3695 850 2550">+49 3695 850 2550</a>
                    <a class="btn btn-accent btn-rounded header__cta" href="#">Jetzt anfragen</a>
                </div>
            </div>
            <div class="header__bottom">
                <nav class="main-navigation site-nav">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#">PRODUKTE</a>
                        </li>
                        <li>
                            <a href="#">EINSATZBEREICHE</a>
                        </li>
                        <li>
                            <a href="#">TECHNOLOGIE</a>
                        </li>
                    </ul>
                    <ul class="links">
                        <li class="item-rental">
                            <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/icon-rental.svg" alt="">Mietpark</a>
                        </li>
                        <li class="item-store">
                            <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/icon-store.svg" alt="">Onlineshop</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <style>
            @media (max-width: 767px) {
                .hero {
                    background-image: url(<?= get_template_directory_uri(); ?>/images/home-hero-mobile.jpg) !important;
                }
            }
        </style>
        <section class="hero" style="background-image: url(<?= get_template_directory_uri(); ?>/images/home-hero.jpg);">
            <div class="container">
                <div class="hero__inner">
                    <h6 class="hero__subtitle">Revolution of cutting</h6>
                    <h1 class="hero__title">KEMROC – Anbaufräsen und Schneidräder</h1>
                    <div class="hero__readmore">
                        <a href="#" class="btn btn-accent btn-rounded arrow-right">Jetzt anfragen</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-products">
            <div class="container">
                <div class="our-products__inner">
                    <div class="section-header our-products__top">
                        <div class="section-header__title our-products__title">
                            <h2>Unsere Produkte</h2>
                            <div class="readmore desktop">
                                <a href="#" class="btn btn-arrow-rounded">Alle produkte <span><svg width="6" height="10"
                                            viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L5.70711 4.29289C6.09763 4.68342 6.09763 5.31658 5.70711 5.70711L1.70711 9.70711C1.31658 10.0976 0.683417 10.0976 0.292893 9.70711C-0.0976311 9.31658 -0.0976311 8.68342 0.292893 8.29289L3.58579 5L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z"
                                                fill="#FF6000" />
                                        </svg>
                                    </span></a>
                            </div>
                        </div>
                        <div class="section-header__info subheadline our-products__info">Informieren Sie sich über unser
                            breites Angebot an Spezialfräsen für den Anbau an Bagger und Baggerladern.</div>
                            <div class="readmore mobile">
                                <a href="#" class="btn btn-arrow-rounded">Alle produkte <span><svg width="6" height="10"
                                            viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L5.70711 4.29289C6.09763 4.68342 6.09763 5.31658 5.70711 5.70711L1.70711 9.70711C1.31658 10.0976 0.683417 10.0976 0.292893 9.70711C-0.0976311 9.31658 -0.0976311 8.68342 0.292893 8.29289L3.58579 5L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z"
                                                fill="#FF6000" />
                                        </svg>
                                    </span></a>
                            </div>
                    </div>
                    <div class="flex-columns-4 our-products__content">
                        <a class="item product-item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-product-1.png">
                            <span class="subheadline product-name">EK Kettenfräsen</span>
                            <span class="more-link">Mehr</span>
                        </a>
                        <a class="item product-item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-product-2.png">
                            <span class="subheadline product-name">Querschneid-kopffräsen</span>
                            <span class="more-link">Mehr</span>
                        </a>
                        <a class="item product-item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-product-3.png">
                            <span class="subheadline product-name">KRX Powertool-Antriebe</span>
                            <span class="more-link">Mehr</span>
                        </a>
                        <a class="item product-item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-product-4.png">
                            <span class="subheadline product-name">DMW Schneidräder</span>
                            <span class="more-link">Mehr</span>
                        </a>
                        <a class="item product-item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-product-5.png">
                            <span class="subheadline product-name">EX Flächenfräsen</span>
                            <span class="more-link">Mehr</span>
                        </a>
                        <a class="item product-item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-product-6.png">
                            <span class="subheadline product-name">ES Universalfräsen</span>
                            <span class="more-link">Mehr</span>
                        </a>
                        <a class="item product-item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-product-7.png">
                            <span class="subheadline product-name">KTR Grabenfräsen</span>
                            <span class="more-link">Mehr</span>
                        </a>
                        <a class="item product-item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-product-8.png">
                            <span class="subheadline product-name">SMW Schneidräder</span>
                            <span class="more-link">Mehr</span>
                        </a>
                        <a class="item product-item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-product-9.png">
                            <span class="subheadline product-name">KSI Injektionsmaschinen</span>
                            <span class="more-link">Mehr</span>
                        </a>
                        <a class="item product-item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-product-10.png">
                            <span class="subheadline product-name">EBA Bohrantriebe</span>
                            <span class="more-link">Mehr</span>
                        </a>
                        <a class="item product-item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-product-11.png">
                            <span class="subheadline product-name">KST Baumstumpffräsen</span>
                            <span class="more-link">Mehr</span>
                        </a>
                        <a class="item product-item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-product-12.png">
                            <span class="subheadline product-name">KDS Diamantsägen</span>
                            <span class="more-link">Mehr</span>
                        </a>
                        <a class="item product-item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-product-13.png">
                            <span class="subheadline product-name">KTS Grabenfräsen</span>
                            <span class="more-link">Mehr</span>
                        </a>
                        <a class="item product-item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-product-14.png">
                            <span class="subheadline product-name">KRM Rotationsmodule</span>
                            <span class="more-link">Mehr</span>
                        </a>
                        <a class="item product-item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-product-15.png">
                            <span class="subheadline product-name">EXRUST Reinigungsfräsen</span>
                            <span class="more-link">Mehr</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-wide">
            <div class="container">
                <div class="cta-wide__inner">
                    <div class="cta-content">
                        <h3>OnlineShop</h3>
                        <div class="subheadline">Unsere Produkte und Zubehör einfach über Unseren OnlineShop kaufen.
                        </div>
                    </div>
                    <div class="cta-more">
                        <svg width="109" height="17" viewBox="0 0 109 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M107.578 10.4806L101.002 15.7232C100.323 16.2638 99.9487 16.5 99.2227 16.5H97.0202C96.2716 16.5 95.7318 16.0993 95.7318 15.4643C95.7318 15.041 95.9499 14.6743 96.2941 14.406L102.783 9.30132C103.045 9.09343 103.135 8.92523 103.135 8.73624C103.135 8.54725 103.062 8.38661 102.783 8.17116L95.7111 2.64127C95.3669 2.3729 95.1487 1.98169 95.1487 1.55835C95.1487 0.898771 95.6866 0.5 96.4371 0.5H98.9425C99.6685 0.5 100.045 0.732459 100.722 1.27675L107.613 6.79719C108.793 7.74026 108.987 8.23919 108.987 8.69088C108.987 9.09532 108.734 9.56213 107.578 10.4825"
                                fill="#5F5F5F" />
                            <path
                                d="M88.5507 10.4806L81.975 15.7232C81.296 16.2638 80.9217 16.5 80.1957 16.5H77.9931C77.2445 16.5 76.7047 16.0993 76.7047 15.4643C76.7047 15.041 76.9229 14.6743 77.2671 14.406L83.7562 9.30132C84.0177 9.09343 84.108 8.92523 84.108 8.73624C84.108 8.54725 84.0346 8.38661 83.7562 8.17116L76.684 2.64127C76.3398 2.3729 76.1216 1.98169 76.1216 1.55835C76.1216 0.898771 76.6596 0.5 77.4101 0.5H79.9154C80.6415 0.5 81.0176 0.732459 81.6948 1.27675L88.5864 6.79719C89.7657 7.74026 89.9595 8.23919 89.9595 8.69088C89.9595 9.09532 89.7074 9.56213 88.5507 10.4825"
                                fill="#5F5F5F" />
                            <path
                                d="M69.5236 10.4806L62.948 15.7232C62.269 16.2638 61.8947 16.5 61.1686 16.5H58.9661C58.2175 16.5 57.6777 16.0993 57.6777 15.4643C57.6777 15.041 57.8959 14.6743 58.2401 14.406L64.7292 9.30132C64.9906 9.09343 65.0809 8.92523 65.0809 8.73624C65.0809 8.54725 65.0076 8.38661 64.7292 8.17116L57.657 2.64127C57.3128 2.3729 57.0946 1.98169 57.0946 1.55835C57.0946 0.898771 57.6325 0.5 58.383 0.5H60.8884C61.6144 0.5 61.9906 0.732459 62.6677 1.27675L69.5594 6.79719C70.7387 7.74026 70.9324 8.23919 70.9324 8.69088C70.9324 9.09532 70.6804 9.56213 69.5236 10.4825"
                                fill="#5F5F5F" />
                            <path
                                d="M50.4966 10.4806L43.9209 15.7232C43.2419 16.2638 42.8676 16.5 42.1416 16.5H39.9391C39.1905 16.5 38.6506 16.0993 38.6506 15.4643C38.6506 15.041 38.8688 14.6743 39.213 14.406L45.7022 9.30132C45.9636 9.09343 46.0539 8.92523 46.0539 8.73624C46.0539 8.54725 45.9805 8.38661 45.7022 8.17116L38.6299 2.64127C38.2857 2.3729 38.0676 1.98169 38.0676 1.55835C38.0676 0.898771 38.6055 0.5 39.356 0.5H41.8613C42.5874 0.5 42.9636 0.732459 43.6407 1.27675L50.5323 6.79719C51.7117 7.74026 51.9054 8.23919 51.9054 8.69088C51.9054 9.09532 51.6534 9.56213 50.4966 10.4825"
                                fill="#5F5F5F" />
                            <path
                                d="M31.4696 10.4806L24.8939 15.7232C24.2149 16.2638 23.8406 16.5 23.1146 16.5H20.9121C20.1635 16.5 19.6236 16.0993 19.6236 15.4643C19.6236 15.041 19.8418 14.6743 20.186 14.406L26.6752 9.30132C26.9366 9.09343 27.0269 8.92523 27.0269 8.73624C27.0269 8.54725 26.9535 8.38661 26.6752 8.17116L19.6029 2.64127C19.2587 2.3729 19.0406 1.98169 19.0406 1.55835C19.0406 0.898771 19.5785 0.5 20.329 0.5H22.8343C23.5604 0.5 23.9366 0.732459 24.6137 1.27675L31.5053 6.79719C32.6847 7.74026 32.8784 8.23919 32.8784 8.69088C32.8784 9.09532 32.6263 9.56213 31.4696 10.4825"
                                fill="#5F5F5F" />
                            <path
                                d="M12.4426 10.4806L5.86693 15.7232C5.18792 16.2638 4.81362 16.5 4.08759 16.5H1.88504C1.13644 16.5 0.596622 16.0993 0.596622 15.4643C0.596622 15.041 0.814808 14.6743 1.15901 14.406L7.64815 9.30132C7.90959 9.09343 7.99987 8.92523 7.99987 8.73624C7.99987 8.54725 7.92652 8.38661 7.64815 8.17116L0.575932 2.64127C0.231725 2.3729 0.0135422 1.98169 0.0135422 1.55835C0.0135422 0.898771 0.551479 0.5 1.30196 0.5H3.80733C4.53336 0.5 4.90954 0.732459 5.58667 1.27675L12.4783 6.79719C13.6576 7.74026 13.8514 8.23919 13.8514 8.69088C13.8514 9.09532 13.5993 9.56213 12.4426 10.4825"
                                fill="#5F5F5F" />
                        </svg>

                        <a href="#" class="btn btn-accent btn-rounded arrow-right">Mehr erfahren</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-areas">
            <div class="container">
                <div class="our-areas__inner">
                    <div class="section-header">
                        <div class="section-header__title">
                            <h2 class="title">Einsatzbereiche</h2>
                            <div class="readmore desktop">
                                <a href="#" class="btn btn-arrow-rounded">Alle produkte <span><svg width="6" height="10"
                                            viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L5.70711 4.29289C6.09763 4.68342 6.09763 5.31658 5.70711 5.70711L1.70711 9.70711C1.31658 10.0976 0.683417 10.0976 0.292893 9.70711C-0.0976311 9.31658 -0.0976311 8.68342 0.292893 8.29289L3.58579 5L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z"
                                                fill="#FF6000" />
                                        </svg>
                                    </span></a>
                            </div>
                        </div>
                        <div class="section-header__info subheadline">Informieren Sie sich über unser breites Angebot an
                            Spezialfräsen für den Anbau an Bagger und Baggerladern.</div>
                            <div class="readmore mobile">
                                <a href="#" class="btn btn-arrow-rounded">Alle produkte <span><svg width="6" height="10"
                                            viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L5.70711 4.29289C6.09763 4.68342 6.09763 5.31658 5.70711 5.70711L1.70711 9.70711C1.31658 10.0976 0.683417 10.0976 0.292893 9.70711C-0.0976311 9.31658 -0.0976311 8.68342 0.292893 8.29289L3.58579 5L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z"
                                                fill="#FF6000" />
                                        </svg>
                                    </span></a>
                            </div>
                    </div>
                    <div class="flex-columns-4 our-areas__content">
                        <a class="item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-area-1.jpg">
                            <div class="item__inner">
                                <span class="subheadline product-name">EK Kettenfräsen</span>
                                <span class="more-link">Mehr</span>
                            </div>
                        </a>
                        <a class="item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-area-2.jpg">
                            <div class="item__inner">
                                <span class="subheadline product-name">EK Kettenfräsen</span>
                                <span class="more-link">Mehr</span>
                            </div>
                        </a>
                        <a class="item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-area-3.jpg">
                            <div class="item__inner">
                                <span class="subheadline product-name">Abbruch, Sanierung</span>
                                <span class="more-link">Mehr</span>
                            </div>
                        </a>
                        <a class="item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-area-4.jpg">
                            <div class="item__inner">
                                <span class="subheadline product-name">Tiefbau und Spezialtiefbau</span>
                                <span class="more-link">Mehr</span>
                            </div>
                        </a>
                        <a class="item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-area-5.jpg">
                            <div class="item__inner">
                                <span class="subheadline product-name">Strassenbau</span>
                                <span class="more-link">Mehr</span>
                            </div>
                        </a>
                        <a class="item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-area-6.jpg">
                            <div class="item__inner">
                                <span class="subheadline product-name">Bohren</span>
                                <span class="more-link">Mehr</span>
                            </div>
                        </a>
                        <a class="item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-area-7.jpg">
                            <div class="item__inner">
                                <span class="subheadline product-name">Tunnel- und Bergbau</span>
                                <span class="more-link">Mehr</span>
                            </div>
                        </a>
                        <a class="item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-area-8.jpg">
                            <div class="item__inner">
                                <span class="subheadline product-name">Steine und Erden Industrie</span>
                                <span class="more-link">Mehr</span>
                            </div>
                        </a>
                        <a class="item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-area-9.jpg">
                            <div class="item__inner">
                                <span class="subheadline product-name">Forstwirtschaft</span>
                                <span class="more-link">Mehr</span>
                            </div>
                        </a>
                        <a class="item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-area-10.jpg">
                            <div class="item__inner">
                                <span class="subheadline product-name">Unter Wasser Einsätze</span>
                                <span class="more-link">Mehr</span>
                            </div>
                        </a>
                        <a class="item">
                            <img class="product-image" src="<?= get_template_directory_uri(); ?>/images/home-area-11.jpg">
                            <div class="item__inner">
                                <span class="subheadline product-name">Reinigung</span>
                                <span class="more-link">Mehr</span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <section class="cta-bg">
            <div class="container">
                <div class="cta-bg__inner">
                    <div class="cta-content">
                        <h2 class="cta-title">Mietpark</h2>
                        <div class="subheadline">Wir vermieten Baggeranbaufräsen und Schneckenbohrausrüstungen.</div>
                        <div class="cta-more">
                            <a href="#" class="btn btn-accent btn-border-accent btn-rounded arrow-right">Mehr
                                erfahren</a>
                        </div>
                    </div>
                    <img class="cta-bg" src="<?= get_template_directory_uri(); ?>/images/cta-bg-image.svg" alt="">

                </div>
            </div>
        </section>

        <section class="our-company">
            <div class="container">
                <div class="our-company__inner">
                    <div class="col-1">
                        <h2 class="section-title">UNTERNEHMEN</h2>
                        <div class="subheadline section-info">Fräsen sind unsere Leidenschaft. Mit mehr als 20 Jahren
                            Erfahrung entwickeln und fertigen wir Anbaufräsen für Bagger und Baggerlader.</div>
                        <div class="readmore">
                            <a href="#" class="btn btn-arrow-rounded">Mehr erfahren <span><svg width="6" height="10"
                                        viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L5.70711 4.29289C6.09763 4.68342 6.09763 5.31658 5.70711 5.70711L1.70711 9.70711C1.31658 10.0976 0.683417 10.0976 0.292893 9.70711C-0.0976311 9.31658 -0.0976311 8.68342 0.292893 8.29289L3.58579 5L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z"
                                            fill="#FF6000"></path>
                                    </svg>
                                </span></a>
                        </div>
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/company-image-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/company-image-2.jpg" alt="">
                        </div>
                        <h2 class="section-title">MEHR ALS <strong>20 JAHRE</strong> ERFAHRUNG</h2>

                        <div class="subheadline section-info">Fräsen sind unsere Leidenschaft. Mit mehr als 20 Jahren
                            Erfahrung entwickeln und fertigen wir Anbaufräsen für Bagger und Baggerlader.</div>
                        <div class="readmore">
                            <a href="#" class="btn btn-arrow-rounded">Mehr erfahren <span><svg width="6" height="10"
                                        viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L5.70711 4.29289C6.09763 4.68342 6.09763 5.31658 5.70711 5.70711L1.70711 9.70711C1.31658 10.0976 0.683417 10.0976 0.292893 9.70711C-0.0976311 9.31658 -0.0976311 8.68342 0.292893 8.29289L3.58579 5L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z"
                                            fill="#FF6000"></path>
                                    </svg>
                                </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-news">
            <div class="container">
                <div class="section-header">
                    <div class="section-header__title">
                        <h2>Nachrichten</h2>
                        <div class="readmore desktop">
                            <a href="#" class="btn btn-arrow-rounded">Alle Artikel <span><svg width="6" height="10"
                                        viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L5.70711 4.29289C6.09763 4.68342 6.09763 5.31658 5.70711 5.70711L1.70711 9.70711C1.31658 10.0976 0.683417 10.0976 0.292893 9.70711C-0.0976311 9.31658 -0.0976311 8.68342 0.292893 8.29289L3.58579 5L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z"
                                            fill="#FF6000"></path>
                                    </svg>
                                </span></a>
                        </div>
                    </div>
                    <div class="section-header__info subheadline">Informieren Sie sich über unser breites Angebot an
                        Spezialfräsen für den Anbau an Bagger und Baggerladern.</div>
                        <div class="readmore mobile">
                            <a href="#" class="btn btn-arrow-rounded">Alle Artikel <span><svg width="6" height="10"
                                        viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L5.70711 4.29289C6.09763 4.68342 6.09763 5.31658 5.70711 5.70711L1.70711 9.70711C1.31658 10.0976 0.683417 10.0976 0.292893 9.70711C-0.0976311 9.31658 -0.0976311 8.68342 0.292893 8.29289L3.58579 5L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z"
                                            fill="#FF6000"></path>
                                    </svg>
                                </span></a>
                        </div>
                </div>
                <div class="our-news__inner">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide article-item">
                                <a href="#" class="article-image">
                                    <img src="<?= get_template_directory_uri(); ?>/images/home-news-1.jpg" alt="">
                                </a>
                                <div class="article-date">3. April 2023</div>
                                <a class="article-title" href="#">
                                    <h6>Ein Bunker wird zum Wohnkomplex</h6>
                                </a>
                                <a class="more-link">Mehr</a>
                            </div>
                            <div class="swiper-slide article-item">
                                <a href="#" class="article-image">
                                    <img src="<?= get_template_directory_uri(); ?>/images/home-news-1.jpg" alt="">
                                </a>
                                <div class="article-date">3. April 2023</div>
                                <a class="article-title" href="#">
                                    <h6>Ein Bunker wird zum Wohnkomplex</h6>
                                </a>
                                <a class="more-link">Mehr</a>
                            </div>
                            <div class="swiper-slide article-item">
                                <a href="#" class="article-image">
                                    <img src="<?= get_template_directory_uri(); ?>/images/home-news-1.jpg" alt="">
                                </a>
                                <div class="article-date">3. April 2023</div>
                                <a class="article-title" href="#">
                                    <h6>Ein Bunker wird zum Wohnkomplex</h6>
                                </a>
                                <a class="more-link">Mehr</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

    </main>
    <footer class="footer">
        <section class="cta-wide">
            <div class="container">
                <div class="cta-wide__inner">
                    <div class="cta-content">
                        <h3 class="title"><strong>Sie haben Fragen?</strong>
                            Wir sind für Sie da.</h3>
                        
                    </div>
                    <div class="cta-more">
                        <svg width="109" height="17" viewBox="0 0 109 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M107.578 10.4806L101.002 15.7232C100.323 16.2638 99.9487 16.5 99.2227 16.5H97.0202C96.2716 16.5 95.7318 16.0993 95.7318 15.4643C95.7318 15.041 95.9499 14.6743 96.2941 14.406L102.783 9.30132C103.045 9.09343 103.135 8.92523 103.135 8.73624C103.135 8.54725 103.062 8.38661 102.783 8.17116L95.7111 2.64127C95.3669 2.3729 95.1487 1.98169 95.1487 1.55835C95.1487 0.898771 95.6866 0.5 96.4371 0.5H98.9425C99.6685 0.5 100.045 0.732459 100.722 1.27675L107.613 6.79719C108.793 7.74026 108.987 8.23919 108.987 8.69088C108.987 9.09532 108.734 9.56213 107.578 10.4825"
                                fill="#5F5F5F" />
                            <path
                                d="M88.5507 10.4806L81.975 15.7232C81.296 16.2638 80.9217 16.5 80.1957 16.5H77.9931C77.2445 16.5 76.7047 16.0993 76.7047 15.4643C76.7047 15.041 76.9229 14.6743 77.2671 14.406L83.7562 9.30132C84.0177 9.09343 84.108 8.92523 84.108 8.73624C84.108 8.54725 84.0346 8.38661 83.7562 8.17116L76.684 2.64127C76.3398 2.3729 76.1216 1.98169 76.1216 1.55835C76.1216 0.898771 76.6596 0.5 77.4101 0.5H79.9154C80.6415 0.5 81.0176 0.732459 81.6948 1.27675L88.5864 6.79719C89.7657 7.74026 89.9595 8.23919 89.9595 8.69088C89.9595 9.09532 89.7074 9.56213 88.5507 10.4825"
                                fill="#5F5F5F" />
                            <path
                                d="M69.5236 10.4806L62.948 15.7232C62.269 16.2638 61.8947 16.5 61.1686 16.5H58.9661C58.2175 16.5 57.6777 16.0993 57.6777 15.4643C57.6777 15.041 57.8959 14.6743 58.2401 14.406L64.7292 9.30132C64.9906 9.09343 65.0809 8.92523 65.0809 8.73624C65.0809 8.54725 65.0076 8.38661 64.7292 8.17116L57.657 2.64127C57.3128 2.3729 57.0946 1.98169 57.0946 1.55835C57.0946 0.898771 57.6325 0.5 58.383 0.5H60.8884C61.6144 0.5 61.9906 0.732459 62.6677 1.27675L69.5594 6.79719C70.7387 7.74026 70.9324 8.23919 70.9324 8.69088C70.9324 9.09532 70.6804 9.56213 69.5236 10.4825"
                                fill="#5F5F5F" />
                            <path
                                d="M50.4966 10.4806L43.9209 15.7232C43.2419 16.2638 42.8676 16.5 42.1416 16.5H39.9391C39.1905 16.5 38.6506 16.0993 38.6506 15.4643C38.6506 15.041 38.8688 14.6743 39.213 14.406L45.7022 9.30132C45.9636 9.09343 46.0539 8.92523 46.0539 8.73624C46.0539 8.54725 45.9805 8.38661 45.7022 8.17116L38.6299 2.64127C38.2857 2.3729 38.0676 1.98169 38.0676 1.55835C38.0676 0.898771 38.6055 0.5 39.356 0.5H41.8613C42.5874 0.5 42.9636 0.732459 43.6407 1.27675L50.5323 6.79719C51.7117 7.74026 51.9054 8.23919 51.9054 8.69088C51.9054 9.09532 51.6534 9.56213 50.4966 10.4825"
                                fill="#5F5F5F" />
                            <path
                                d="M31.4696 10.4806L24.8939 15.7232C24.2149 16.2638 23.8406 16.5 23.1146 16.5H20.9121C20.1635 16.5 19.6236 16.0993 19.6236 15.4643C19.6236 15.041 19.8418 14.6743 20.186 14.406L26.6752 9.30132C26.9366 9.09343 27.0269 8.92523 27.0269 8.73624C27.0269 8.54725 26.9535 8.38661 26.6752 8.17116L19.6029 2.64127C19.2587 2.3729 19.0406 1.98169 19.0406 1.55835C19.0406 0.898771 19.5785 0.5 20.329 0.5H22.8343C23.5604 0.5 23.9366 0.732459 24.6137 1.27675L31.5053 6.79719C32.6847 7.74026 32.8784 8.23919 32.8784 8.69088C32.8784 9.09532 32.6263 9.56213 31.4696 10.4825"
                                fill="#5F5F5F" />
                            <path
                                d="M12.4426 10.4806L5.86693 15.7232C5.18792 16.2638 4.81362 16.5 4.08759 16.5H1.88504C1.13644 16.5 0.596622 16.0993 0.596622 15.4643C0.596622 15.041 0.814808 14.6743 1.15901 14.406L7.64815 9.30132C7.90959 9.09343 7.99987 8.92523 7.99987 8.73624C7.99987 8.54725 7.92652 8.38661 7.64815 8.17116L0.575932 2.64127C0.231725 2.3729 0.0135422 1.98169 0.0135422 1.55835C0.0135422 0.898771 0.551479 0.5 1.30196 0.5H3.80733C4.53336 0.5 4.90954 0.732459 5.58667 1.27675L12.4783 6.79719C13.6576 7.74026 13.8514 8.23919 13.8514 8.69088C13.8514 9.09532 13.5993 9.56213 12.4426 10.4825"
                                fill="#5F5F5F" />
                        </svg>

                        <a href="#" class="btn btn-accent btn-rounded arrow-right">Kontakt</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="footer__inner">
                <div class="col-1">
                    <a href="#" class="footer-logo"><img src="<?= get_template_directory_uri(); ?>/images/footer-logo.svg" alt=""></a>
                    <ul class="socials">
                        <li>
                            <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/icon-fb.svg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/icon-inst.svg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/icon-youtube.svg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/icon-linkedin.svg" alt=""></a>
                        </li>
                    </ul>
                    <div class="copyright desktop">© 2023 KEMROC Spezialmaschinen GmbH</div>
                    <ul class="footer-links desktop">
                        <li>
                            <a href="#">Impressum</a>
                        </li>
                        <li>
                            <a href="#">AGB</a>
                        </li>
                        <li>
                            <a href="#">Datenschutzerklärung</a>
                        </li>
                    </ul>
                </div>
                <div class="col-2">
                    <div class="footer-info">
                        <div class="footer-info__left">
                            <span class="company-name">KEMROC <br>Spezialmaschinen GmbH</span>
                            <div class="company-address">Ahornstraße 6<br>
                                36469 Hämbach<br>
                                Deutschland</div>
                        </div>
                        <div class="footer-info__right">
                            <a href="tel:+49 3695 850 2550">Tel. +49 3695 850 2550</a>
                            <a href="tel:+49 3695 850 2550">Fax +49 3695 850 2579</a>
                            <a href="mailto:info@kemroc.de">E-mail: info@kemroc.de</a>
                        </div>
                    </div>
                    <div class="footer-nav">
                        <div class="footer-nav__item">
                            <span class="title">Über uns</span>
                            <ul>
                                <li>
                                    <a href="#">Unternehmen</a>
                                </li>
                                <li>
                                    <a href="#">Aktuelles</a>
                                </li>
                                <li>
                                    <a href="#">Kontakt</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-nav__item">
                            <span class="title">Produktion</span>
                            <ul>
                                <li>
                                    <a href="#">Produkte</a>
                                </li>
                                <li>
                                    <a href="#">Einsatzbereiche</a>
                                </li>
                                <li>
                                    <a href="#">Technologie</a>
                                </li>
                                <li>
                                    <a href="#">Kataloge</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-nav__item">
                            <span class="title">Service</span>
                            <ul>
                                <li>
                                    <a href="#">Mietpark</a>
                                </li>
                                <li>
                                    <a href="#">Onlineshop</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="copyright mobile">© 2023 KEMROC Spezialmaschinen GmbH</div>
                    <ul class="footer-links mobile">
                        <li>
                            <a href="#">Impressum</a>
                        </li>
                        <li>
                            <a href="#">AGB</a>
                        </li>
                        <li>
                            <a href="#">Datenschutzerklärung</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>