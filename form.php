<?php include("assets/includes/global/header.php"); ?>
  <div id="homepage" class="container">
    <?php include("assets/includes/content/header.php"); ?>
      <?php
      $con=mysqli_connect('localhost', 'root', 'root', 'database');
      
      // Check connection
      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      } else {
        echo "connected";
      }
      $sql="INSERT INTO `table` (field1) VALUES ('$_POST[field1]')";
      if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
      } else {
        echo "1 record added";
      }
      mysqli_close($con);
      ?>
      <div id="content">
        <div id="main_content">
          <form action="form.php" method="POST">
            <input type="text" name="field1" id="field1" value="">
            <input type="submit" value="submit">
          </form>
        </div><!-- #main_content -->
        <?php include("assets/includes/content/subNav.php"); ?>
      </div><!-- #content -->
    <?php include("assets/includes/content/footer.php"); ?>
  </div><!-- #homepage -->
<?php include("assets/includes/global/footer.php"); ?>