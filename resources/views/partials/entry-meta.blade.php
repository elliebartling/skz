<div class="entry-meta">
  <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
  @if(get_the_tags())
    @php($tag = get_the_tags()[0])
    | <a href="{{ $tag->permalink }}"><span class="tags">{{ $tag->name }}</span></a>
  @endif
</div>
