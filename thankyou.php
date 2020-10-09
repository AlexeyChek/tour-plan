<?php if ( substr_count( $_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip' ) ) ob_start("ob_gzhandler"); else ob_start(); ?> 
<?php include('header.php')?>

  <section class="thankyou">
  <div class="container thankyou__container">
    <h2 class="thankyou__title">Thank you for choosing us!</h2>
    <p class="thankyou__text">
      The manager will call you within 5 minutes.
    </p>
    <a href="index.php" class="thankyou__return  button">Back to main page</a>
  </div>
</section>
<!-- /.thankyou -->

<?php include('footer.php')?>