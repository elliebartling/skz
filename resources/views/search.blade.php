@extends('layouts.app')

@section('content')


  @if (!have_posts())
    <div class="no-posts">
      <div class="page-header">
        <h1>Sorry!</h1>
        <p>We couldn't find any results for <strong>{{ get_search_query() }}</strong>.</p>
      </div>
      <div class="search-box">
        <h2 class="try-again">Try again?</h2>
        {!! get_search_form(false) !!}
      </div>
    </div>
  @else
    @include('partials.page-header')
  @endif
<div class="row">
  @while(have_posts()) @php(the_post())
    @include('partials.content-search')
  @endwhile
</div>
  {!! get_the_posts_navigation() !!}
@endsection
