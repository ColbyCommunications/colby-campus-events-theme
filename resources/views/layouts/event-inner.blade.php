@extends('layouts.base')

@section('fullbody')
    @php do_action('get_header') @endphp
    @include('partials.event-inner-header')
    <div class="wrap container inner" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
@endsection
