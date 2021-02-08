<p class="byline author vcard">
  &#10094;<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date('Y') }}</time>&#10095;
  &#10094;{{ __('Author', 'sage') }} <a href="/sobre-mi" rel="author" class="fn">{{ get_the_author() }}</a>&#10095;
  &#10094;{!! get_the_category_list(' - ') !!}&#10095;
</p>
@php
  the_tags('<div class="mb-0 tags"><span class="tag is-light">', '</span><span class="tag is-light">', '</span></div>')
@endphp
