<?php include("assets/includes/global-header.php"); ?>
<?php include("assets/includes/main-header.php"); ?>
  <div id="form" class="container">
    <?php
      if(isset($_POST['submit'])) {
        $con=mysqli_connect('localhost', 'root', 'root', 'database');
        // Check connection
        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $sql="INSERT INTO `table` (field1) VALUES ('$_POST[field1]')";
        if (!mysqli_query($con,$sql)) {
          die('Error: ' . mysqli_error($con));
        } else {
          echo "1 record added";
        }
        mysqli_close($con);
      }
    ?>
      <div id="content">
        <div id="main_content">
          <div>
          <h2>Content of table</h2>
          <?php
            $con=mysqli_connect("localhost", "root", "root", "database");
            // Check connection
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              exit();
            }
            $result = mysqli_query($con,"SELECT * FROM `table`");
            if(mysqli_fetch_array($result)) {
              while($row = mysqli_fetch_array($result)) {
                echo "<div>" . $row['field1'] . "</div>";
              }
            } else {
              echo "<i>No table content</i>";
            }
            mysqli_close($con);
          ?>
          </div>
          <div>
            <h2>Insert into table</h2>
            <form action="form.php" method="POST">
              <input type="text" name="field1" id="field1" value="" placeholder="Type an Item (e.g. Item1)">
              <input type="submit" name="submit" id="submit" value="submit">
            </form>
          </div>
        </div><!-- #main_content -->
        <?php include("assets/includes/sub-nav.php"); ?>
      </div><!-- #content -->
    <?php include("assets/includes/main-footer.php"); ?>
  </div><!-- #form -->
<?php include("assets/includes/global-footer.php"); ?>