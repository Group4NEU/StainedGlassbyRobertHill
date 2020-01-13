<div id="settings-holder">
    <script>mw.lib.require('bootstrap3ns');</script>
    <div class="bootstrap3ns">
        <?php

        $shopping_cart = get_option('shopping-cart', 'mw-template-snow');
        if ($shopping_cart == '') {
            $shopping_cart = 'false';
        } else {
            $shopping_cart = 'true';
        }

        $fluid_header = get_option('fluid-header', 'mw-template-snow');
        if ($fluid_header == '') {
            $fluid_header = 'false';
        } else {
            $fluid_header = 'true';
        }

        $color_scheme = get_option('color-scheme', 'mw-template-snow');
        if ($color_scheme == '') {
            $color_scheme = 'default';
        }

        ?>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" class="mw_option_field" id="shopping-cart" name="shopping-cart" data-option-group="mw-template-snow" value="true" <?php if($shopping_cart == 'true'){echo 'checked';} ?> /> Show shopping cart in header
                    </label>
                </div>
            </div>
        </div>

<!--        <div class="form-group">-->
<!--            <div class="col-xs-12">-->
<!--                <div class="checkbox">-->
<!--                    <label>-->
<!--                        <input type="checkbox" class="mw_option_field" id="fluid-header" name="fluid-header" data-option-group="mw-template-snow" value="true" --><?php //if($fluid_header == 'true'){echo 'checked';} ?><!--/> Make header full width-->
<!--                    </label>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label for="select" class="col-lg-2 control-label">Color scheme</label>-->
<!--            <div class="col-lg-10">-->
<!--                <select name="color-scheme" id="color-scheme" class="mw_option_field form-control" data-option-group="mw-template-snow">-->
<!--                    <option value="orange" --><?php //if($color_scheme == '' OR $color_scheme == 'default'){echo 'selected';} ?><!-->Default</option>-->
<!--                    <option value="blue"--><?php //if($color_scheme == 'blue'){echo 'selected';} ?><!-->Blue</option>-->
<!--                </select>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>
<!-- /#settings-holder -->