<!doctype html>
<html lang="en">

<head>
<?php require_once(APPPATH . 'views/includes/css.php'); ?>
<title>Gyana Vana Foundation :: Services </title>
</head>
<body>
<section class="banner">
<?php require_once(APPPATH . 'views/includes/menu.php'); ?>

<div class="container-fluid banner-content">
  <div class="row">
    <div class="col-lg-4 text-info1">
      <h2 class="page-heading">
      Our Service
      </h2>
    <p class="breadcrum">
        <img src="<?php echo base_url();?>assets/images/arrow-grey.png" alt=""> <a href="<?php echo base_url();?>home"> Home</a>
        <img src="<?php echo base_url();?>assets/images/arrow-white.png" alt=""> <a href="javascript::void();"> Our Service</a>
    
    </p>

    
    </div>
    <div class="col-lg-8 text-img new-img">
      <img src="<?php echo base_url();?>assets/images/service-main.png" alt="">
    </div>
  </div>
</div>
</section>
<section class="service-types">
  <div class="container">
    <h3 class="service-head">
    Our Mission to Save the Planet
    </h3>
    <div class="row">

    <div class="col-lg-4 col-md-6 col-sm-12">
      <a href="<?php echo base_url();?>education-service" class="service-box">
        <img src="<?php echo base_url();?>assets/images/service-education.png" alt="" class="service-icon">

        <h3 class="service-heading">Education (Vidhya)</h3>

        <p class="servoce-box-info">Help us to provide education to those who need it.</p>
      </a>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
      <a href="<?php echo base_url();?>plantation-service" class="service-box">
        <img src="<?php echo base_url();?>assets/images/service-plantation.png" alt="" class="service-icon">

        <h3 class="service-heading">Plantation</h3>

        <p class="servoce-box-info">Help us to create awareness and to plant more trees so that the planet can breathe through it.</p>
      </a>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
      <a href="<?php echo base_url();?>renewable-energy-service" class="service-box">
        <img src="<?php echo base_url();?>assets/images/service-energy.png" alt="" class="service-icon">

        <h3 class="service-heading">Renewable Energy</h3>

        <p class="servoce-box-info">We are planning to take efforts in encouraging the use of renewable energy so that our future generations will not suffer.</p>
      </a>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
      <a href="<?php echo base_url();?>jall-sudh-service" class="service-box">
        <img src="<?php echo base_url();?>assets/images/service-jall.png" alt="" class="service-icon">

        <h3 class="service-heading">Jall Shudh</h3>

        <p class="servoce-box-info">Help in achieving the dream of cleaning waster water.</p>
      </a>
    </div>

    
    <div class="col-lg-4 col-md-6 col-sm-12">
      <a href="<?php echo base_url();?>waste-recycle-service" class="service-box">
        <img src="<?php echo base_url();?>assets/images/service-waste.png" alt="" class="service-icon">

        <h3 class="service-heading">Waste Recycle</h3>

        <p class="servoce-box-info">Help us to recycle the waste so that we can minimise the usage of waste and other plastics and can save the planet.</p>
      </a>
    </div>
    
    <div class="col-lg-4 col-md-6 col-sm-12">
      <a href="<?php echo base_url();?>empowerment-service" class="service-box">
        <img src="<?php echo base_url();?>assets/images/service-empowerment.png" alt="" class="service-icon">

        <h3 class="service-heading">Empowerment</h3>

        <p class="servoce-box-info">Help us to encourage and empower people who who deserve help.</p>
      </a>
    </div>
    
    
    </div>
  </div>
</section>

<?php require_once(APPPATH . 'views/includes/footer.php'); ?>
<style>
  a.nav-link.sactive:before{
  width: 75%;
  }
  
</style>
</body>

</html>