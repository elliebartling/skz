<article @php(post_class())>
  <header>
    @if(has_post_thumbnail())
        <div class="entry-image">
          <a href="{{ get_field('amazon_url') }}">
          {{ the_post_thumbnail() }}
          </a>
        </div>
      @if(is_archive())
        <header id="entry-header">
          <h1 class="entry-title"><a href="{{ get_field('amazon_url') }}">{{ get_the_title() }}</a></h1>
          @if(get_field('author'))
            <div class="entry-author">
              <p class="byline author vcard">
                {{ __('by', 'sage') }} <a href="{{ get_field('amazon_url') }}" rel="author" class="fn">
                  {{ get_field('author') }}
                </a>
              </p>
            </div>
          @endif
        </header>
      @endif
    @endif
</article>
