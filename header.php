<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#">
<head>
    <title>{content_meta_title}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="{content_meta_title}">
    <meta name="keywords" content="{content_meta_keywords}">
    <meta name="description" content="{content_meta_description}">
    <meta property="og:type" content="{og_type}">
    <meta property="og:url" content="{content_url}">
    <meta property="og:image" content="{content_image}">
    <meta property="og:description" content="{og_description}">
    <meta property="og:site_name" content="{og_site_name}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        //mw.lib.require('bootstrap3');
    </script>
    <script>mw.lib.require('material_icons');</script>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i%7cWork+Sans:400,500,700" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="{TEMPLATE_URL}modules/layouts/templates/layouts.css" type="text/css" media="all">
    <?php $color_scheme = get_option('color-scheme', 'mw-template-snow'); ?>
    <?php if ($color_scheme != '' AND $color_scheme != 'default'): ?>
        <link rel="stylesheet" href="{TEMPLATE_URL}assets/css/<?php print $color_scheme; ?>.css" type="text/css" media="all">
    <?php endif; ?>

    <script>
        AddToCartModalContent = window.AddToCartModalContent || function (title) {
                var html = ''

                    + '<section style="text-align: center;">'
                    + '<h5>' + title + '</h5>'
                    + '<p><?php _e("has been added to your cart"); ?></p>'
                    + '<a href="javascript:;" onclick="mw.tools.modal.remove(\'#AddToCartModal\')" class="btn btn-default"><?php _e("Continue shopping"); ?></a> &nbsp;'
                    + '<a href="<?php print checkout_url(); ?>" class="btn btn-warning"><?php _e("Checkout"); ?></a></section>';

                return html;
            }
    </script>

    <script type="text/javascript" src="{TEMPLATE_URL}assets/js/main.js"></script>
    <link rel="stylesheet" href="{TEMPLATE_URL}assets/css/combined.css" type="text/css" media="all">
    <script>mw.lib.require('mw_icons_mind');</script>
</head>
<body class="<?php print helper_body_classes(); ?>">

<header class="nk-header nk-header-opaque">
    <!--
    START: Navbar
-->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky">
        <div class="container">
            <div class="nk-nav-table">
                <module type="logo" id="logo_header" default-text="Snow" class="nk-nav-logo" style="width: 200px;"/>

                <module type="menu" name="header_menu" id="main-navigation" template="navbar"/>

                <?php $shopping_cart = get_option('shopping-cart', 'mw-template-snow'); ?>
                <?php if ($shopping_cart == 'true'): ?>
                    <module type="shop/cart" template="small" id="cart-bag" class=""/>
                <?php endif; ?>

                <ul class="nk-nav nk-nav-right nk-nav-icons">
                    <li class="single-icon hidden-lg-up">
                        <a href="#" class="nk-navbar-full-toggle">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>


<!--
START: Navbar Mobile
-->
<nav class="nk-navbar nk-navbar-full nk-navbar-align-center" id="nk-nav-mobile">
    <div class="nk-navbar-bg">
        <div class="bg-image" style="background-image: url('<?php print template_url(); ?>assets/images/bg-menu.png')"></div>
    </div>
    <div class="nk-nav-table">
        <div class="nk-nav-row">
            <div class="container">
                <div class="nk-nav-header">
                    <div class="nk-nav-logo">
                        <module type="logo" id="logo_header" default-text="Snow" class="nk-nav-logo" style="width: 200px;"/>
                    </div>

                    <div class="nk-nav-close nk-navbar-full-toggle">
                        <span class="nk-icon-close"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="nk-nav-row-full nk-nav-row">
            <div class="nano">
                <div class="nano-content">
                    <div class="nk-nav-table">
                        <div class="nk-nav-row nk-nav-row-full nk-nav-row-center nk-navbar-mobile-content">
                            <module type="menu" name="header_menu" id="mobile-navigation" template="mobile-navbar"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-nav-row">
            <div class="container">
                <div class="nk-nav-social">
                    <module type="social_links" id="social-icons-footer" template="default"/>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- END: Navbar Mobile -->


<div class="nk-main">