<header id="header">
  <div class="nav container">
    <a class="brand" href="{{ home_url('/') }}">
        <img src="{{ App\asset_path('img/logo.png') }}">
        <span class="title">The Skeptical Libertarian</span>
        {{-- <span class="title title-mobile">TSL</span> --}}
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <nav class="nav-secondary">
      @include('partials/sidebar-top-right-nav')
      <button class="open-search"><i class="fa fa-search"></i></button>
      <div class="vertical-line"></div>
      <a href="/donate" class="btn btn-info">support</a>
    </nav>
  </div>
</header>
