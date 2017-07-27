@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="main">
      <div class="col">
      @include('partials.page-header')
      @include('partials.content-page')
      <div class="page-header" id="contributors">
        <h1>Contributors</h1>
      </div>
      <div class="contributors-wrap">
        @php
          $contributors = get_field('contributors');
        @endphp
        @foreach ($contributors as $c)
          <div class="contributor">
            <div class="image">
              {!! $c['user_avatar'] !!}
              {{-- {{ var_dump($c) }} --}}
            </div>
            <div class="details-wrapper">
              <h1><a href="/author/{{ $c['user_nicename']}}">{{ $c['user_firstname'] }} {{ $c['user_lastname'] }}</a></h1>
              <p>{{ $c['user_description']}}</p>
            </div>
          </div>
        @endforeach
      </div>
      <div class="page-header donate-widget" id="support">
        @php(dynamic_sidebar('sidebar-page-footer'))
      </div>
      </div>
    </div>
  @endwhile
@endsection
