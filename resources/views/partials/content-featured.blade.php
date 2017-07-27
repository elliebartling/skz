<article @php(post_class('featured'))>
  <div class="entry-image col col-md-9">
    {{ the_post_thumbnail() }}
  </div>
  <div class="entry-content">
    @include('partials/entry-meta')
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @php(the_excerpt())
    @include('partials/entry-author')
  </div>
</article>
