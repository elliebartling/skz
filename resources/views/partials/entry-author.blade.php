<div class="entry-author">
  <p class="byline author vcard">
    {{ __('by', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
      {{ get_the_author_meta('first_name') }} {{ get_the_author_meta('last_name') }}
    </a>
  </p>
</div>
