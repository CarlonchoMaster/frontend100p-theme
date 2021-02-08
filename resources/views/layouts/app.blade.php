<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')
<body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container is-max-desktop" role="document">
        <main class="content mb-5">
            @yield('content')
        </main>
        @if (App\display_sidebar())
        <aside class="sidebar">
            @include('partials.sidebar')
        </aside>
        @endif
    </div>
    <div class="overlay-screen" id="overlayScreen"></div>
    <button type="menu" class="button is-floating" id="btnFloatingMenu">
        @svg('bars-solid', 'fa fa-2x')
    </button>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    @stack('scripts')
</body>
</html>
