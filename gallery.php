<?php include("assets/includes/global-header.php"); ?>
<?php include("assets/includes/main-header.php"); ?>
<div id="gallery" class="container">
  <div id="content">
    <div id="main_content">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ul>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="assets/img/slider-scaward.jpg" alt="Item3">
            <div class="carousel-caption dynamic-caption" data-speed="1000" data-x="100" data-y="100" data-transition="zoomin"><span><a href="#" class="btn btn-primary zoomin">Link to Content</a></span></div>
          </div>
          <div class="item">
            <img src="assets/img/slider-darklist.jpg" alt="Item1">
            <div class="carousel-caption">item1 caption</div>
          </div>
          <div class="item">
            <img src="assets/img/slider-sans_1402.png" alt="Item2">
            <div class="carousel-caption dynamic-caption" data-speed="1000" data-start="0" data-start-x="0" data-start-y="0" data-x="100" data-y="100" data-transition="slidein">item2</div>
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
      <h2>Animations</h2>
      <dl>
        <dt>slidein</dt>
          <dd>A basic slide to the destination <small>(requires start coordinates)</small></dd>
        <dt>spiral</dt>
          <dd>Using a fibonacci spiral go to the destination <small>(requires start coordinates)</small></dd>
        <dt>vibratehard</dt>
          <dd>Using a hard spikey line go to the destination <small>(requires start coordinates)</small></dd>
        <dt>vibratesoft</dt>
          <dd>Using a soft curve line go to the destination <small>(requires start coordinates)</small></dd>
        <dt>fade</dt>
          <dd>starting from 0 opacity finish at 1</dd>
        <dt>focus</dt>
          <dd>go from blurry to clear</dd>
        <dt>clap</dt>
          <dd>like a rubber band snapping back to it's default form</dd>
        <dt>zoomin</dt>
          <dd>start from nothing and get larger</dd>
        <dt>zoomout</dt>
          <dd>shrink from the canvas size</dd>
        <dt>form</dt>
          <dd>form from particles (pixels)</dd>
      </dl>
    </div><!-- #main_content -->
      <?php include("assets/includes/sub-nav.php"); ?>
  </div><!-- #content -->
  <?php include("assets/includes/main-footer.php"); ?>
</div><!-- #gallery -->
<?php include("assets/includes/global-footer.php"); ?>