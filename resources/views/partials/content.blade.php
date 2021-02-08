<article @php post_class() @endphp>
  <header>
    <h2 class="entry-title is-family-secondary"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
  </header>
  <div class="columns">
    <div class="column is-one-quarter">
      {!! get_the_post_thumbnail(null, 'thumbnail') !!}
    </div>
    <div class="column">
      <div class="entry-summary">
        @include('partials/entry-meta')
        @if (has_excerpt())
          <p class="mb-1 excerpt">{!! get_the_excerpt() !!}</p>
          <a href="{{ get_permalink() }}" class="is-flex is-align-items-center">
            {{ __('Read More', 'sage') }}&ensp;@svg('book-reader-solid','fa')
          </a>
        @endif
      </div>
    </div>
  </div>
</article>
