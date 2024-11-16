<!DOCTYPE html>
<html lang="en">

<head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Bloscot</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="<?php echo ASSET_URL; ?>/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?php echo ASSET_URL; ?>/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo ASSET_URL; ?>/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo ASSET_URL; ?>/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo ASSET_URL; ?>/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="<?php echo ASSET_URL; ?>/css/owl.carousel.min.css">
      <link rel="stylesoeet" href="<?php echo ASSET_URL; ?>/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>

      <?php include 'Views/Frontend/layouts/header.php'; ?>
      <!-- header section end -->

      <?php echo $content; ?>
      <!-- footer section start -->

      <?php include 'Views/Frontend/layouts/footer.php'; ?>

      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="<?php echo ASSET_URL; ?>/js/jquery.min.js"></script>
      <script src="<?php echo ASSET_URL; ?>/js/popper.min.js"></script>
      <script src="<?php echo ASSET_URL; ?>/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo ASSET_URL; ?>/js/jquery-3.0.0.min.js"></script>
      <script src="<?php echo ASSET_URL; ?>/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="<?php echo ASSET_URL; ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?php echo ASSET_URL; ?>/js/custom.js"></script>
      <!-- javascript -->
      <script src="<?php echo ASSET_URL; ?>/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>