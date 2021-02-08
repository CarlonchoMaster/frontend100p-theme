<header class="main-header">
    <div class="container">
        <nav class="menu" role="navigation" aria-label="main navigation" id="mainMenu">
            <button class="button button-back" type="menu" id="btnBackMenu">
                @svg('arrow-right-solid', 'fa')
            </button>
            <a class="menu-brand" href="{{ home_url('/') }}">
                @svg('frontend100p-logo', 'menu-brand-logo')
                <span class="menu-brand-text">Frontend:100p</span>
            </a>
            <p class="menu-label">Presentación</p>
            @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu-list']) !!}
            @endif
        </nav>
    </div>
</header>
