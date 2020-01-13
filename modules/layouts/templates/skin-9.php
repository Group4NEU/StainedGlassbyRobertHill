<?php

/*

type: layout

name: Blog Posts With Categories

position: 9

*/

?>


<div class="nodrop edit safe-mode" field="layout-skin-9-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <br/>
                <br/>
                <module type="categories" template="default" content_id="<?php print PAGE_ID; ?>"/>

                <module type="posts" template="skin-1" />
            </div>
        </div>

        <div class="nk-gap-4"></div>
    </div>
</div>