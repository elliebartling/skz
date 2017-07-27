
@include('partials/entry-social')

<article @php(post_class())>
  <header id="entry-header">
    @include('partials/entry-meta')
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-author')
  </header>
  <div class="entry-image">
    {{ the_post_thumbnail() }}
  </div>
  <div class="entry-content">
    @php(the_content())
  </div>
  <footer class="entry-footer">
    <div class="skeptical-divider">
      <img src="{{ App\asset_path('img/logo.png') }}" />
    </div>
    @php(dynamic_sidebar('sidebar-article-footer'))
  </footer>
  @php(comments_template('/partials/comments.blade.php'))
</article>
<aside id="sidebar">
  <h2 class="sidebar-title">Bookshelf</h2>
  @include('partials/sidebar-books')
  @php(dynamic_sidebar('sidebar-primary'))
</aside>
