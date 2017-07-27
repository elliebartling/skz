<aside class="col-12 col-lg-3" id="sidebar-editors-picks">
  <div class="sidebar-item advertisements">
    <p class="advertisement-title">Advertisement</p>
    <div class="advertisement">
      <img src="http://via.placeholder.com/300x600">
    </div>
  </div>
  <div class="sidebar-item books">
    <h2>Editor's Picks</h2>
    @php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'tag' => 'editors-pick'
      );

      $picks = new WP_Query($args);
    @endphp
    <div class="picks">
      @while ($picks->have_posts()) @php($picks->the_post())
        <div class="pick">
          {{-- <a class="image-link" target="_blank" href="{{ the_permalink() }}">
            {{ the_post_thumbnail() }}
          </a> --}}
          {{-- @include('partials/entry-meta') --}}
          <a class="content-link" target="_blank" href="{{ the_permalink() }}">
            <h4 class="pick-title">{{ get_the_title() }}</h4>
          </a>
          {{ the_excerpt() }}
          </a>
        </div>
      @endwhile
    </div>
  </div>
</aside>
