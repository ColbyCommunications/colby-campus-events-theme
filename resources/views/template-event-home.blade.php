{{--
    Template Name: Colby Campus Events Theme: Events Home
--}}

@extends('layouts.event-home')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @include('partials.content-page')
    @endwhile
@endsection
