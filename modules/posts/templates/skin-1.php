<?php

/*

type: layout

name: Blog Page

description: Skin 1

*/
?>


<?php if (!empty($data)): ?>
    <div class="nk-blog-isotope nk-isotope nk-isotope-gap nk-isotope-1-cols">
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

            <!-- START: Post -->
            <div class="nk-isotope-item" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <div class="nk-blog-post">
                    <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                        <div class="nk-post-thumb">
                            <a href="<?php print $item['link'] ?>" itemprop="url">
                                <img src="<?php print thumbnail($item['image'], 700); ?>" alt="" class="nk-img-stretch">
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
            <!-- END: Post -->
        <?php endforeach; ?>
    </div>
<?php endif; ?>


<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <div class="nk-pagination nk-pagination-center">
        <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
    </div>
<?php endif; ?>
</div>
