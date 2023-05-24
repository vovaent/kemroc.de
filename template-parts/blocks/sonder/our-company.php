<?php
if (isset($block['data']['gutenberg_preview_image']) && $is_preview) {
    echo '<img src="' . $block['data']['gutenberg_preview_image'] . '" style="max-width:100%; height:auto;">';
}

/**
 *  Block Template.
 */
if (!$is_preview) {
    $id = 'our-company-' . $block['id'];
    if (!empty($block['anchor'])) {
        $id = $block['anchor'];
    }

    $className = 'our-company';
    if (!empty($block['className'])) {
        $className .= ' ' . $block['className'];
    }
    if (!empty($block['align'])) {
        $className .= ' align' . $block['align'];
    }

    

    $left_col = get_field('left_col'); //title info link image
    $right_col = get_field('right_col'); //title info link image


?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
            <div class="container">
                <div class="our-company__inner">
                    <? if($left_col): ?>
                    <div class="col-1">
                        <? if($left_col['title']): ?>
                        <h2 class="section-title"><?= $left_col['title']; ?></h2>
                        <? endif; ?>
                        <? if($left_col['info']): ?>
                        <div class="subheadline section-info"><?= $left_col['info']; ?></div>
                        <? endif; ?>
                        <? if($left_col['link']): ?>
                        <div class="readmore">
                            <a href="<?= $left_col['link']['url']; ?>" class="btn btn-arrow-rounded"><?= $left_col['link']['title']; ?> <span><svg width="6" height="10"
                                        viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L5.70711 4.29289C6.09763 4.68342 6.09763 5.31658 5.70711 5.70711L1.70711 9.70711C1.31658 10.0976 0.683417 10.0976 0.292893 9.70711C-0.0976311 9.31658 -0.0976311 8.68342 0.292893 8.29289L3.58579 5L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z"
                                            fill="#FF6000"></path>
                                    </svg>
                                </span></a>
                        </div>
                        <? endif; ?>
                        
                        <? if($left_col['image']): ?>
                        <div class="image">
                            <img src="<?= $left_col['image']['url']; ?>" alt="<?= $left_col['image']['alt']; ?>">
                        </div>
                        <? endif; ?>
                    </div>
                    <? endif; ?>
                    <div class="col-2">
                        <? if($right_col['image']): ?>
                            <div class="image">
                                <img src="<?= $right_col['image']['url']; ?>" alt="<?= $right_col['image']['alt']; ?>">
                            </div>
                        <? endif; ?>
                        <? if($right_col['title']): ?>
                            <h2 class="section-title"><?= $right_col['title']; ?></h2>
                        <? endif; ?>
                        <? if($right_col['info']): ?>
                            <div class="subheadline section-info"><?= $right_col['info']; ?></div>
                        <? endif; ?>
                        <? if($right_col['link']): ?>
                        <div class="readmore">
                            <a href="<?= $right_col['link']['url']; ?>" class="btn btn-arrow-rounded"><?= $right_col['link']['title']; ?> <span><svg width="6" height="10"
                                        viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L5.70711 4.29289C6.09763 4.68342 6.09763 5.31658 5.70711 5.70711L1.70711 9.70711C1.31658 10.0976 0.683417 10.0976 0.292893 9.70711C-0.0976311 9.31658 -0.0976311 8.68342 0.292893 8.29289L3.58579 5L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z"
                                            fill="#FF6000"></path>
                                    </svg>
                                </span></a>
                        </div>
                        <? endif; ?>
                    </div>
                </div>
            </div>
        </section>

<? }