<nav class="homenav navbar fixed-top navbar-expand-lg navbar-dark {!! Header::getNavTypeOption() !!}">
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
<?php if (has_post_thumbnail( get_the_ID() )): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
    <div class="jumbotron" style="background-image: url('<?php echo $image[0]; ?>');">
        <div class="{!! Header::getNavContainerOption() !!}">
            <h1>ORIENTATION</h1>
            <p class="lead">“As your time on campus draws near, your first impactful on-campus experience as a new Colby student is an orientation to your new home, our values, and our community expectations.”</p>
            <p class="text-right" style="margin-bottom: 0;">- Karlene Burrell-McRae ’94, Dean of the College</p>
            <p class="text-right"><a href="/welcome-letter" style="color: #fff;font-size: 0.8rem;text-decoration: underline;">Read Full Letter</a></p>
        </div>
    </div>
<?php endif; ?>

