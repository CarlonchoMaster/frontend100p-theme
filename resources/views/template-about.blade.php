{{--
  Template Name: About Me
--}}

@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-timeline@3.0.4/dist/css/bulma-timeline.min.css" integrity="sha256-/o4dD6UK2n3NAJVO0GI6Win4rACMXpKHUoj6ReI0gMs=" crossorigin="anonymous">
@endpush

@section('content')
<section class="about-page">
    @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
    @endwhile
</section>
@svg('about-icons', 'about-icons')
@svg('sidebar-cv','sidebar-right-cv')
@endsection
