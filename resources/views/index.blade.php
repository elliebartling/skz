@extends('layouts.app')

@section('content')
  @if(is_author())
    @include('partials.author-header')
  @else
    @include('partials.page-header')
  @endif

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php(the_post())
    @include ('partials.content-'.(get_post_type() === 'post' ?: get_post_type()))
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
