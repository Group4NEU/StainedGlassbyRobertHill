<?php

/*

type: layout

name: Default

description: Blog

*/
?>


<script>
    mw.lib.require('bootstrap3ns');
    mw.lib.require('slick');
</script>

<script>
    $(document).ready(function () {
        $('.slickSlider', '#<?php print $params['id'] ?>').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 200,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 585,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    })
</script>
<div class="nk-carousel-2 nk-carousel-x2 nk-carousel-no-margin nk-carousel-all-visible nk-blog-isotope" data-dots="true">
    <div class="nk-carousel-inner">

        <div class="slickSlider">
            <?php if (!empty($data)): ?>
                <?php foreach ($data as $item): ?>
                    <?php
                    $cats = content_categories($item['id']);

                    $postCats = array();
                    if ($cats) {
                        foreach ($cats as $cat) {
                            $postCats[] = array(
                                'title' => $cat['title'],
                                'url' => category_link($cat['id'])
                            );
                        }
                    }
                    ?>
                    <div itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                        <div>
                            <div class="pl-15 pr-15">
                                <div class="nk-blog-post">
                                    <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                                        <div class="nk-post-thumb">
                                            <a href="<?php print $item['link'] ?>" itemprop="url">
                                                <div class="blog-post-list-thumb" style="background-image: url('<?php print thumbnail($item['image'], 800, 519, true); ?>');"></div>
                                            </a>
                                            <div class="nk-post-category">
                                                <?php if ($postCats): ?>
                                                    <?php foreach ($postCats as $cat): ?>
                                                        <a href="<?php print $cat['url']; ?>"><?php print $cat['title']; ?></a>
                                                    <?php endforeach; ?>
                                                <?php else: ?>
                                                    <a href="#" style="visibility: hidden;">no cat</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                        <h2 class="nk-post-title h4"><a href="<?php print $item['link'] ?>" itemprop="url"><?php print $item['title'] ?></a></h2>
                                    <?php endif; ?>

                                    <?php if (!isset($show_fields) or $show_fields == false or in_array('created_at', $show_fields)): ?>
                                        <div class="nk-post-date" itemprop="dateCreated"><?php print $item['created_at'] ?></div>
                                    <?php endif; ?>

                                    <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                        <div class="nk-post-text">
                                            <p itemprop="headline"><?php print $item['description'] ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="nk-gap-1"></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
    <?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
        <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
    <?php endif; ?>
</div>
