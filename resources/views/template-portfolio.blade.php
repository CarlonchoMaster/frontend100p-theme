{{--
  Template Name: Portfolio
--}}

@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css" integrity="sha256-nVhrDZU/ne3I/z6LXWEbyUOEmv79sPGKEbsP7SWLkHI=" crossorigin="anonymous">
@endpush

@section('content')
<section class="portfolio-page">
    @while(have_posts()) @php(the_post())
    @if(has_post_thumbnail())
    <figure>
        <a href="{{ get_the_post_thumbnail_url(null, 'full') }}" target="_blank">{!! get_the_post_thumbnail(null, 'full') !!}</a>
        <figcaption>
            {{ $get_post_thumbnail_alt }}
        </figcaption>
    </figure>
    @endif
    @include('partials.page-header')
    @include('partials.content-page')
    @php($youtubeLink = $get_youtube_field)
    @if($youtubeLink)
    <figure class="image is-16by9">
        <iframe class="has-ratio" src="{{ $youtubeLink }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </figure>
    @endif
    @endwhile
</section>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/js/bulma-carousel.min.js" integrity="sha256-qKR77yzVBkDYKuoSg2BpAIbMtmF8aFjuTHFVnIjkpzI=" crossorigin="anonymous"></script>
<script>
    // Initialize all elements with carousel class.
    bulmaCarousel.attach('.hero-carousel', {
        slidesToScroll: 1
        , slidesToShow: 1
        , initialSlide: 0
        , breakpoints: [{
                changePoint: 480
                , slidesToShow: 1
                , slidesToScroll: 1
            , }
            , {
                changePoint: 540
                , slidesToShow: 1
                , slidesToScroll: 1
            , }
            , {
                changePoint: 769
                , slidesToShow: 1
                , slidesToScroll: 1
            , }
            , {
                changePoint: 1024
                , slidesToShow: 1
                , slidesToScroll: 1
            , }
        , ]
    , });

    // eslint-disable-next-line no-unused-vars
    let imageHeight = 0;
    let imageContainer = document.getElementById('image-container1');
    let image = imageContainer.querySelector('img');
    if (image) {
        imageHeight = image.getBoundingClientRect().height;
    }

</script>
@endpush
