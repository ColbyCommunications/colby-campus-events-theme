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
    <script src="{{ get_theme_file_uri() . '/libraries/fslightbox-basic-3.2.1/fslightbox.js' }}"></script>
  </body>
</html>
