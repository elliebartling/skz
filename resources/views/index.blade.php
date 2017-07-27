@extends('layouts.app')

@section('content')
  @if(is_author())
    @include('partials.author-header')
  @else
    @include('partials.page-header')
  @endif


  @if (!have_posts())
    <div class="row">
      <div class="col">
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
      {!! get_search_form(false) !!}
    </div>
    </div>
  @endif

  <div class="row">
  @while (have_posts()) @php(the_post())
    @include ('partials.content-'.(get_post_type() === 'post' ?: get_post_type()))
  @endwhile
  </div>
  {!! get_the_posts_navigation() !!}
@endsection
