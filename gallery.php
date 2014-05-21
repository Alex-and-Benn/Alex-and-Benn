<?php include("assets/includes/global-header.php"); ?>
<?php include("assets/includes/main-header.php"); ?>
<div id="gallery" class="container">
  <div id="content">
    <div id="main_content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="..." alt="Item1">
            <div class="carousel-caption">item1 caption</div>
          </div>
          ...
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div><!-- #main_content -->
      <?php include("assets/includes/sub-nav.php"); ?>
  </div><!-- #content -->
  <?php include("assets/includes/main-footer.php"); ?>
</div><!-- #gallery -->
<?php include("assets/includes/global-footer.php"); ?>