{{--
    Template Name: Colby Campus Events Theme: Events Inner (Orientation)
--}}

@extends('layouts.event-inner')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @include('partials.content-page')
    @endwhile
@endsection
