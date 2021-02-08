<article @php post_class() @endphp>
  <header class="mb-4">
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    @if(has_post_thumbnail())
      <a href="{{ get_the_post_thumbnail_url(null, 'full') }}" target="_blank">{!! get_the_post_thumbnail(null, 'full') !!}</a>
    @endif
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>