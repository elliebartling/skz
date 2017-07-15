<article @php(post_class())>
  <header>
    @if(has_post_thumbnail())
      <div class="entry-image">
        {{ the_post_thumbnail() }}
      </div>
    @endif
    @include('partials/entry-meta')
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @include('partials/entry-author')
  </header>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
