<?php
  if (isset($_GET['logout']))
   {
    if (!isset($_SESSION))
    {
      session_start();
    }
    session_destroy();
    $logged_out=true;
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
  include_once 'inc/head.php';
 ?>
  <body>
<?php
  include 'inc/nav.php';
  include 'inc/banner.php';
  include 'inc/key_points.php';
  include 'inc/about.php';
  include 'inc/how.php';
  include 'inc/why_us.php';
  include 'inc/testimonials.php';
  include 'inc/footer.php';
 ?>
  </body>
</html>
