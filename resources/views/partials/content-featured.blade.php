<article @php(post_class('featured'))>
  <div class="entry-image">
    {{ the_post_thumbnail() }}
  </div>
  <div class="entry-content">
    @include('partials/entry-meta')
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @include('partials/entry-author')
    @php(the_excerpt())
  </div>
</article>
