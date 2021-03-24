<p class="byline author vcard is-flex is-align-items-center">
  &#10094;<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date('Y') }}</time>&#10095;
  &#10094;{{ __('Author', 'sage') }}&nbsp;<a href="/quien-soy" rel="author" class="fn has-text-accent">{{ get_the_author() }}</a>&#10095;
  &#10094;{!! get_the_category_list(' - ') !!}&#10095;
  @if($youtube_link)
    &#10094; @svg('youtube-brands', 'fa fa-2x has-text-youtube') &#10095;
  @endif
</p>
@php
  the_tags('<div class="mb-0 tags"><span class="tag is-light">', '</span><span class="tag is-light">', '</span></div>')
@endphp
