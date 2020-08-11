<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @yield('fullbody')
    <script>
        jQuery(window).scroll(function(){
            jQuery('.homenav').toggleClass('scrolled', jQuery(this).scrollTop() > 1)
        })
    </script>
  </body>
</html>
