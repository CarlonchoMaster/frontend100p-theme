<article @php post_class('blog-page') @endphp>
  <header class="mb-4">
    @if(has_post_thumbnail())
      <a href="{{ get_the_post_thumbnail_url(null, 'full') }}" target="_blank">{!! get_the_post_thumbnail(null, 'full') !!}</a>
    @endif
    <h1 class="entry-title has-text-link">{!! get_the_title() !!}</h1>
    @php $youtube_link=App::getYoutubeId() @endphp
    @include('partials/entry-meta', compact('youtube_link'))
  </header>
  <div class="entry-content">
    @php the_content() @endphp
    @if($youtube_link)
      <h2>Video relacionado al articulo</h2>
      <figure class="image is-16by9">
        <iframe class="has-ratio" src="https://www.youtube.com/embed/{{ $youtube_link }}" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </figure>
    @endif
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  {{--  @php comments_template('/partials/comments.blade.php') @endphp--}}
</article>
