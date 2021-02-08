@extends('layouts.app')

@section('content')
<section class="page">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
    @endwhile
    {!! $list_child_pages !!}
</section>
@endsection
