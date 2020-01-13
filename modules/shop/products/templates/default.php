<?php

/*

type: layout

name: Product List 1

description: Product List 1 layout

*/
?>

<?php
$tn = $tn_size;
if (!isset($tn[0]) or ($tn[0]) == 150) {
    $tn[0] = 350;
}
if (!isset($tn[1])) {
    $tn[1] = $tn[0];
}

?>

<?php if (!empty($data)): ?>
    <?php
    $count = 0;
    $len = count($data);
    ?>

    <div class="nk-portfolio-list nk-isotope nk-isotope-3-cols">
        <?php foreach ($data as $item): ?>
            <?php $count++; ?>
            <div class="nk-isotope-item" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                    <a href="<?php print $item['link'] ?>" class="nk-portfolio-item-link" itemprop="url"></a>
                    <div class="nk-portfolio-item-image">
                        <?php if ($show_fields == false or in_array('thumbnail', $show_fields)): ?>
                            <div style="background-image: url(<?php print thumbnail($item['image'], $tn[0], $tn[1]); ?>);"></div>
                        <?php endif; ?>
                    </div>
                    <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                        <div>
                            <?php if ($show_fields == false or in_array('title', $show_fields)): ?>
                                <h2 class="portfolio-item-title h3" itemprop="name"><?php print character_limiter($item['title'], 35); ?></h2>
                            <?php endif; ?>

                            <?php if ($show_fields == false or in_array('price', $show_fields)): ?>
                                <div class="portfolio-item-category">
                                    <strong>
                                        <?php if (isset($item['prices']) and is_array($item['prices'])) : ?>
                                            <?php
                                            $vals2 = array_values($item['prices']);
                                            $val1 = array_shift($vals2); ?>
                                            <span><?php print currency_format($val1); ?></span>
                                        <?php endif; ?>
                                    </strong>
                                </div>
                                <br/>
                            <?php endif; ?>

                            <?php if ($show_fields == false or ($show_fields != false and is_array($show_fields) and in_array('description', $show_fields))): ?>
                                <div class="portfolio-item-category" itemprop="description"> <?php print character_limiter($item['description'], 100); ?> </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>




