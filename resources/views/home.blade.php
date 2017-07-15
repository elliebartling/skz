@extends('layouts.app')

@section('content')
<section id="posts" class="section">
  <main>
    @if (!$featured->have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    @while ($featured->have_posts() && $featured->current_post < 0) @php($featured->the_post())
      <div class="header row">
        @include ('partials.content-featured')
        @php($first = false)
      </div>
    @endwhile


    <h1 class="section-title" id="latest-title">Latest</h1>
    <div class="latest-container">
      <div id="latest">
        @while ($featured->have_posts()) @php($featured->the_post())
          @if($featured->current_post == 1 || $featured->current_post == 4)
            <div class="row">
          @endif
            @include ('partials.content-'.(get_post_type() === 'post' ?: get_post_type()))
          @if($featured->current_post == 3 || $featured->current_post == 6)
            </div>
          @endif
        @endwhile
        <a href="" class="btn btn-outline btn-info">see all</a>
      </div>
    </div>

  </main>
  <aside id="sidebar-books">
    @include('partials.sidebar-books')
  </aside>
</section>
<section id="books" class="section">
  <h1 class="section-title">Books</h1>
  <div class="container">
    @while ($books->have_posts()) @php($books->the_post())
        @include ('partials.content-'.(get_post_type() === 'post' ?: get_post_type()))
    @endwhile
  </div>
  <a href="" class="btn btn-outline btn-info">see all</a>
</section>
<aside id="subscribe">
  <h2>Skepticism in your inbox</h2>
  @php(dynamic_sidebar('sidebar-home'))
</aside>
@endsection

@php(wp_reset_postdata())
