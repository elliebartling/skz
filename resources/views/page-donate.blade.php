@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="main">
      <div class="col">
      {{-- @include('partials.page-header') --}}
      @include('partials.content-page')
      </div>
    </div>
  @endwhile
@endsection
