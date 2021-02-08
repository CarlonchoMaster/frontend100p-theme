@extends('layouts.app')

@section('content')
  <h1>Aumenta tus conocimientos con estos articulos</h1>

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <section class="blog-page">
    @while (have_posts()) @php(the_post())
      @include('partials.content-' . get_post_type())
    @endwhile
  </section>

  {!! get_the_posts_navigation() !!}
@endsection
