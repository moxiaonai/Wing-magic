<!DOCTYPE html>
<html class="<?php the_skin_mode(); ?>">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php wp_head(); ?>
    <?php if ( $_background = get_theme_mod( 'biji_setting_background', '' ) ): ?>
        <style>
            html {
                background-image: url("<?= $_background ?>");
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
            }
        </style>
    <?php endif; ?>
</head>

<body>
<div id="app" :class="['layout', animation, '<?= ( $_background ? 'less-animation' : '' ) ?>']" style="display: none;"
     v-show="true">
    <header id="header" class="flex-center justify-between">
        <hgroup class="logo">
            <h1 class="fullname">
                <a href="<?php bloginfo( 'url' ); ?>">
                    <img src="/wp-content//uploads/2023/02/1676115319-screenshot-20230211-193411-removebg-preview.png" alt="孤胆游侠" style="width: 88px; outline: none;">
                </a>
            </h1>
        </hgroup>
        <section class="header__right d-flex">
            <form method="get" action="<?php bloginfo( 'url' ); ?>" class="search">
                <input class="search-key s-circle" name="s" placeholder="Please enter..." type="text"
                       required="required"/>
                <i class="text-small czs-search-l flex-center"></i>
            </form>
            <div class="dropdown" hover-show perspective>
                <a class="right-btn dropdown-toggle flex-center s-circle" href="javascript:void(0);" tabindex="0">
                    <i class="czs-clothes-l text-small"></i>
                </a>
                <ul class="menu menu-left mode-switch uni-card bg-blur" @click="toggleSkinMode">
                    <li v-for="item of modeList" class="menu-item">
                        <a class="flex-center" :data-mode="item.mode" href="javascript:void(0);">
                            <i :class="[item.icon, 'mr-1']"></i>{{ item.name }}
                        </a>
                    </li>
                </ul>
            </div>
            <a class="btn btn-link btn-action right-btn uni-bg uni-shadow menu-btn off-canvas-toggle flex-center ml-2" href="#aside">
                <i class="text-large czs-menu-l flex-center"></i>
            </a>
        </section>
    </header>
    <section id="core" class="container off-canvas off-canvas-sidebar-show">
        <!-- Aside -->
        <aside id="aside" class="off-canvas-sidebar">
            <div class="probes"></div>
            <section class="sticky">
                <?php if ( is_single() && get_theme_mod( 'biji_setting_toc', true ) && ( $_toc = get_post_toc() ) ) : ?>
                <input type="radio" id="tab-toc" name="aside-radio" hidden checked>
                <input type="radio" id="tab-nav" name="aside-radio" hidden>
                <ul class="aside-tab">
                    <li class="nav-active">
                        <label for="tab-nav" class="c-hand  flex-center"><i
                                    class="czs-choose-list-l"></i>&nbsp;<span>导航</span></label>
                    </li>
                    <li class="toc-active">
                        <label for="tab-toc" class="c-hand flex-center"><i class="czs-read-l"></i>&nbsp;<span>目录</span></label>
                    </li>
                </ul>
                <?php print $_toc;
                    endif;
                    foreach ( [ 'header_nav', 'footer_nav' ] as $name ) {
                        if ( has_nav_menu( $name ) ) {
                            wp_nav_menu( [
                                'container'      => false,
                                'theme_location' => $name,
                                'menu_class'     => $name . ' reset-ul uni-bg uni-shadow ',
                                'depth'          => 0,
                            ] );
                        }
                    }
                dynamic_sidebar( 'aside-widget-area' );
                ?>
            </section>
        </aside>
        <a class="off-canvas-overlay" href="#close"></a>
        <!-- Main -->
        <main id="main" class="uni-bg uni-shadow off-canvas-content">
            <div class="content">