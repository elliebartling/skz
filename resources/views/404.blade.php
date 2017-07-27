@extends('layouts.app')

@section('content')

  @if (!have_posts())
    <div class="no-posts">
      <div class="page-header">
        <h1>Uh oh.</h1>
        <p>We're not sure where the page you were looking for went, but it isn't here.</p>
        <img class="aliens" src="{{ App\asset_path('img/aliens.jpg')}}" />
      </div>
      <div class="search-box">
        <p>Here are some other pages you might like, or you can try searching:</p>
        @php(dynamic_sidebar('sidebar-footer'))
        {!! get_search_form(false) !!}
      </div>
    </div>
  @endif

  {!! get_the_posts_navigation() !!}
@endsection
