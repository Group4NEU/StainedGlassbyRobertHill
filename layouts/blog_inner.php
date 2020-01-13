<?php include template_dir() . "header.php"; ?>

<?php
$cats = content_categories(CONTENT_ID);

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

<div id="blog-content-<?php print CONTENT_ID; ?>">
    <!-- START: Header Title -->
    <div class="nk-header-title nk-header-title-lg">
        <div class="bg-image">
            <div style="background-image: url(<?php print thumbnail(get_picture(CONTENT_ID), 1920, 1920); ?>);"></div>
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container">
                    <!--                    <module data-type="pictures" data-template="slider" rel="content"/>-->

                </div>
            </div>
        </div>

    </div>

    <!-- END: Header Title -->


    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="nk-gap-4"></div>

                <!-- START: Post -->
                <div class="nk-blog-post nk-blog-post-single">
                    <h1 class="edit display-4" field="title" rel="content">Why you should Always First</h1>

                    <div class="nk-post-meta">
                        <div class="nk-post-date">August 14, 2016</div>
                        <div class="nk-post-category">
                            <?php if ($postCats): ?>
                                <?php foreach ($postCats as $cat): ?>
                                    <a href="<?php print $cat['url']; ?>">[ <?php print $cat['title']; ?> ]</a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="nk-post-comments-count">2 Comments</div>
                    </div>

                    <!-- START: Post Text -->
                    <div class="nk-post-text">
                        <div class="edit" field="content_body" rel="content">
                            <p align="justify">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere on
                                the site. Get creative, Make Web.</p>
                        </div>
                    </div>
                    <!-- END: Post Text -->

                    <!-- START: Post Share -->
                    <div class="nk-post-share">
                        <module type="facebook_like" show-faces="false" layout="box_count">
                    </div>
                    <!-- END: Post Share -->
                </div>
                <!-- END: Post -->

                <div class="nk-gap-3"></div>
            </div>
        </div>
    </div>

    <div class="edit" rel="content" field="comments">
        <module data-type="comments" data-template="default" data-content-id="<?php print CONTENT_ID; ?>"/>
    </div>

    <!-- START: Pagination -->
    <div class="nk-pagination nk-pagination-center">
        <div class="container">
            <?php if ($content = next_content()): ?>
                <a class="nk-pagination-prev" href="<?php print content_link($content['id']); ?>">
                    <span class="pe-7s-angle-left"></span>
                    <?php print $content['title']; ?>
                </a>
            <?php endif; ?>
            <a class="nk-pagination-center" href="<?php print page_link(); ?>">
                <span class="nk-icon-squares"></span>
            </a>
            <?php if ($content = prev_content()): ?>
                <a class="nk-pagination-next" href="<?php print content_link($content['id']); ?>">
                    <?php print $content['title']; ?>
                    <span class="pe-7s-angle-right"></span>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <!-- END: Pagination -->
</div>

<?php include template_dir() . "footer.php"; ?>

