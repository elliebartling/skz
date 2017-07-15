<article @php(post_class())>
  <header>
    @if(has_post_thumbnail())
      <a href="{{ get_field('amazon_url') }}">
        <div class="entry-image">
          {{ the_post_thumbnail() }}
        </div>
      </a>
    @endif
</article>
