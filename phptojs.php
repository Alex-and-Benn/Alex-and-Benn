<?php include("assets/includes/global-header.php"); ?>
  <div id="form" class="container">
    <?php
      if(!isset($_POST['submit']) && !isset($_GET['sutra'])) {
    ?>
      <div id="content">
        <div id="main_content">
          <h1>Sutra</h1>
          <form action="sutra.php" method="POST">
            <input type="text" name="sutra" id="sutra" value="sutra" placeholder="sutra">
            <input type="submit" name="submit" id="submit" value="submit">
          </form>
        </div><!-- #main_content -->
      </div><!-- #content -->
    <?php } else {
      if(isset($_POST['sutra'])) {
        $sutra = $_POST['sutra'];
      } elseif (isset($_GET['sutra'])) {
        $sutra = $_GET['sutra'];
      }
    ?>
    <h1><?php echo $sutra; ?></h1>
    <div id="txt"></div>
    <?php } ?>
    <script type="text/javascript">
      var txtFile = new XMLHttpRequest();
      var allText = "file not found";
      var txtFileTitle = <?php echo json_encode($sutra.'.txt'); ?>;
      txtFile.onreadystatechange = function () {
          if (txtFile.readyState === XMLHttpRequest.DONE && txtFile.status == 200) {
              allText = txtFile.responseText;
              allText = allText.split("\n").join("<br>");
          }

          document.getElementById('txt').innerHTML = allText;
      }
      txtFile.open("GET", txtFileTitle, true);
      txtFile.send(null);
    </script>
    
  </div><!-- #form -->
<?php include("assets/includes/global-footer.php"); ?>