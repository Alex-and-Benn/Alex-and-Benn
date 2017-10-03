<?php
/*
Including partial files most Content Management Systems (CMSs) divide out
*/
include("assets/includes/global-header.php"); // HTML head ?>
<?php include("assets/includes/main-header.php"); // Visible header ?>
<div id="about" class="container">
  <div id="content">
    <div id="main_content">
      <div class="alert alert-danger"><b><?php echo $_SERVER['QUERY_STRING']; //query string ?></b> is missing</div>
    </div><!-- #main_content -->
    <?php include("assets/includes/sub-nav.php"); // An optional sub navigation ?>
  </div><!-- #content -->
  <?php include("assets/includes/main-footer.php"); // Visible footer ?>
</div><!-- #about -->
<?php include("assets/includes/global-footer.php"); // HTML foot ?>