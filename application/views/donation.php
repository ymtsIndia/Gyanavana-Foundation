<!doctype html>
<html lang="en">

<head>
<?php require_once(APPPATH . 'views/includes/css.php'); ?>
<title>Gyana Vana Foundation :: Donation </title>
</head>
<body>
<section class="banner">
<?php require_once(APPPATH . 'views/includes/menu.php'); ?>

<div class="container-fluid banner-content">
  <div class="row">
    <div class="col-lg-5 text-info1 dtext">
      <h2 class="page-heading">
      Please Help Us
      </h2>
    <p class="breadcrum">
    <img src="<?php echo base_url();?>assets/images/arrow-grey.png" alt=""> <a href="<?php echo base_url();?>home"> Home</a>
        <img src="<?php echo base_url();?>assets/images/arrow-white.png" alt=""> <a href="javascript::void();"> Donation</a>
    
    </p>

    <h4 class="new-text">You can help protect India's children & nature by making a tax-deductible donation.</h4>

    
    </div>
    <div class="col-lg-7 text-img new-img">
      <img src="<?php echo base_url();?>assets/images/donation.png" alt="">
    </div>
  </div>
</div>
</section>


<section class="donation-request">
<img src="<?php echo base_url();?>assets/images/donation-man.jpg" alt="" class="donation-man">
<h3 class="request-text">
A donation from your end can <br class="xs-none">make better tomorrow
</h3>
</section>

<section class="upi-form">
    <div class="row">
        <div class="col-lg-6 col-md-12 don-color">
            <h3 class="donation-head">The Way You Help Us 🍀</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat facilisis quam volutpat turpis. Felis mi, ultrices ornare duis.</p>

            <!-- <div class="text-center" style=" max-width: 500px;">    <a  class="btn btn-outline-secondary action-btn">Take Action</a></div> -->
        </div>
        <div class="col-lg-6 col-md-12 don-form">
            <h3 class="donate text-center">Donate</h3>
            <div class="upi-credit-radio d-flex justify-content-center mt-3 mb-3">
                <input type="radio" name="payment" id="upi"> <label for="upi"> UPI</label>
                <input type="radio" name="payment" id="credit-debit"> <label for="credit-debit">Credit / Debit Card</label>
                <input type="radio" name="payment" id="net-bank"> <label for="net-bank">Net Banking</label>
            </div>

            <img src="<?php echo base_url();?>assets/images/quickpaymode.png" alt="">
        </div>
    </div>
</section>


<?php require_once(APPPATH . 'views/includes/footer.php'); ?>
<style>
  a.nav-link.dactive:before{
  width: 75%;
  }
</style>
</body>

</html>