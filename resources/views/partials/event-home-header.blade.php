<nav class="navbar fixed-top navbar-expand-lg navbar-dark {!! Header::getNavTypeOption() !!}">
  <div class="{!! Header::getNavContainerOption() !!}">
    <a class="navbar-brand" href="https://www.colby.edu">{!! Header::getBrand() !!}</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    @if (has_nav_menu('primary_navigation'))
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container'=> false, 'menu_class' => 'navbar-nav ml-auto', 'walker' => new \App\wp_bootstrap4_navwalker(), 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<div id="search-container">
</div></ul></div>']) !!}
    @endif
  </div>
</nav>
<div class="jumbotron" style="background-image: url('https://www.colby.edu/celebrate2020/images/hats-and-miller-Comm2016-162_optimized.jpg'); height: 100vh; background-size: cover;     display: flex;
    align-items: center;
    text-align: center;">
<div class="{!! Header::getNavContainerOption() !!}">
<h1 class="display-4">ORIENTATION</h1>
  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
      </div>
</div>
