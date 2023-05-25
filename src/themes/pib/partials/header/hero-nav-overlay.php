<header id="header" class="hero-nav-overlay fixed-top bg-light">

    <nav class="navbar navbar-expand-xxl navbar-light">
        <div class="container">
            <div class="nav-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.png"
                         alt="<?php bloginfo('name'); ?> - Logo"
                         class="img-fluid">
                    <span class="sr-only"><?php bloginfo('name'); ?></span>
                </a>
            </div>

            <button class="navbar-toggler ml-auto" onclick="mobileNavOpened()" type="button" data-toggle="collapse" data-target=".mainnav-m"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="d-xxl-flex d-none d-xxl-block">
                <?php
                $login_url = wp_login_url();
                wp_nav_menu([
                    'theme_location'    => 'primary',
                    'depth'             => 3,
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'mainnav',
                    'menu_class'        => 'navbar-nav ml-auto',
                    'fallback_cb'       => '',
                    'menu_id'           => 'main-menu',
                    'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s <li class="nav-item login-hide"><a href="' . $login_url . '" class="nav-link">Member LogIn</a></li><li class="nav-item member-only"><a href="/member-portal" class="nav-link member-only">Member Portal</a></li></ul>',
                    'walker'            => new understrap_WP_Bootstrap_Navwalker(),
                ]); ?>

            </div>
        </div>
    </nav>

    <div class="mainnav-m collapse navbar-collapse bg-muted d-xxl-none">

        <div class="container pt-1 pb-0">
            <form class="header-search-form" method="GET" action="/" role="search">
                <div class="input-group">
                    <input class="form-control search-field"
                           id="s"
                           name="s"
                           type="search"
                           placeholder="Search"
                           aria-label="Search"
                    >
                    <div class="input-group-append">
                        <button class="btn-submit-search" type="submit">
                            <i class="fas fa-search"></i>
                            <span class="sr-only">Search</span>
                        </button>
                    </div><!-- input-group-append -->
                </div><!-- input-group -->
            </form>
        </div><!-- container -->

        <?php
        $login_url = wp_login_url();
        wp_nav_menu([
            'theme_location'    => 'primary',
            'depth'             => 3,
            'container_class'   => 'container py-1',
            'container_id'      => 'mainnav',
            'menu_class'        => 'navbar-nav ml-auto',
            'fallback_cb'       => '',
            'menu_id'           => 'main-menu',
            'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s <li class="nav-item login-hide"><a href="' . $login_url . '" class="nav-link">Member Login</a></li><li class="nav-item member-only"><a href="/member-portal" class="nav-link">Member Portal</a></li></ul>',
            'walker'            => new understrap_WP_Bootstrap_Navwalker(),
        ]); ?>
    </div>

</header>