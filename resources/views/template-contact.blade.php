{{--
  Template Name: Contact Me
--}}

@extends('layouts.app')

@section('content')
<section class="contact-page">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="columns">
        <div class="column">{!! do_shortcode('[contact-form-7 id="192" title="Formulario de contacto 1"]') !!}</div>
        <div class="column">@include('partials.content-page')</div>
    </div>
    @endwhile
</section>
@endsection
