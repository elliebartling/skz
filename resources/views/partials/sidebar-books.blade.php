<div class="sidebar-books">
  <h2></h2>
  @php
    $args = array(
      'post_type' => 'book',
      'orderby'   => 'rand',
      'posts_per_page' => 3,
    );

    $books = new WP_Query($args);
  @endphp
  <div class="">
    @while ($books->have_posts()) @php($books->the_post())
      <div class="book">
        <a class="image-link" target="_blank" href="{{ get_field('amazon_url') }}">
          {{ the_post_thumbnail() }}
        </a>
        <a class="content-link" target="_blank" href="{{ get_field('amazon_url') }}">
          <h4 class="book-title">{{ get_the_title() }}</h4>
          <p class="book-author">{{ get_field('author') }}</p>
          <div class="book-banner"><i class="fa fa-amazon"></i>buy&nbsp;on&nbsp;amazon</div>
        </a>
      </div>
    @endwhile
  </div>
  <div class="sidebar-item advertisements">
    <p class="advertisement-title">Advertisement</p>
    <div class="advertisement">
      <img src="http://via.placeholder.com/300x600">
    </div>
  </div>
</div>
