<?php

/*

type: layout

name: Default

description: Default comments template

*/;


?>
<div class="row vertical-gap">
    <div class="col-md-3">
        <div class="captcha-holder">
            <a href="javascript:;" class="tip" data-tip="Refresh captcha" data-tipposition="top-center">
                <img onclick="mw.tools.refresh_image(this);" class="mw-captcha-img" id="captcha-<?php print $form_id; ?>" src="<?php print api_link('captcha') ?>"/>
            </a>
        </div>
    </div>
    <div class="col-md-9">
        <input name="captcha" type="text" class="form-control required" placeholder="<?php _e("Security code"); ?>" required/>
    </div>
</div>