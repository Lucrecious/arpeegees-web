<?php 
  $title = 'Home';
  $description = $description;
  include('template/head.php');
?>

<body>

  <?php include('template/header.php'); ?>
  <div class="container">
    <?php 
    //$launch = 20190710161000;  
    $dates = array(
        array("20190131","Location","Venue","http://google.com"),
        array("20190131","Location","Venue","http://google.com"),
        array("20190131","Location","Venue","http://google.com"),
        array("20190131","Location","Venue","http://google.com"),
        array("20190131","Location","Venue","http://google.com"),
        array("20190401","Location","Venue","Sold Out")
      );    
      include('template/dates.php');
    ?>
  </div>

  <?php include('template/footer.php'); ?>

</body>

</html>