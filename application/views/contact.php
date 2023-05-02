<!doctype html>
<html lang="en">

<head>
<?php require_once(APPPATH . 'views/includes/css.php'); ?>
<title>Gyana Vana Foundation :: Contact </title>
</head>
<body>
<section class="banner">
<?php require_once(APPPATH . 'views/includes/menu.php'); ?>

<div class="container-fluid banner-content">
  <div class="row">
    <div class="col-lg-4 text-info1">
      <h2 class="page-heading">
      Contact Us
      </h2>
    <p class="breadcrum">
    <img src="<?php echo base_url();?>assets/images/arrow-grey.png" alt=""> <a href="<?php echo base_url();?>home"> Home</a>
        <img src="<?php echo base_url();?>assets/images/arrow-white.png" alt=""> <a href="javascript::void();"> Contact Us</a>
    
    </p>

    
    </div>
    <div class="col-lg-8 text-img new-img">
      <img src="<?php echo base_url();?>assets/images/about.png" alt="">
    </div>
  </div>
</div>
</section>

<div class="maps text-center">
    <!-- <img src="<?php echo base_url();?>assets/images/Map.png" alt="" style="max-width:100%;"> -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124079.74569082359!2d79.34239824525488!3d13.627805720692333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4d4b0f88620427%3A0xcf4152d1daca0cac!2sTirupati%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1681539117884!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="contact-form">
  <div class="container">
  <h3 class="heading">Get in Touch With Us!</h3>
  <p class="contact-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sollicitudin consectetur netus dui, ultrices ornare lectus ac egestas. Vivamus tellus vestibulum aliquet.</p>
  <form onsubmit="function submit_contact_form() {
    var FullName = document.getElementById('FullName').value;
    var Email = document.getElementById('Email').value;
    var MobileNumber = document.getElementById('MobileNumber').value;
    var Subject = document.getElementById('Subject').value;
    var Message = document.getElementById('Message').value;
    var data = {
      FullName: FullName,
      Email: Email,
      MobileNumber: MobileNumber,
      Subject: Subject,
      Message: Message
    }
    //$.ajax({
    //  url: '<?php //echo BACKEND_URL;?>//website/submit_contact_form',
    //  type: 'POST',
    //  data: data,
    //  success: function (data) {
    //    console.log(data);
    //  }
    //});
    
    fetch('<?php echo BACKEND_URL;?>website/submit_contact_form', {
      method: 'POST',
      body: JSON.stringify(data),
      headers: {
        'Content-Type': 'application/json'
      }
    }).then(res => res.json())
      .then(response => {
        console.log('Success:', response)
        alert(response.message || 'Thank you for contacting us. We will get back to you soon.')
          window.location.reload()
      })
      .catch(error => console.error('Error:', error));
      
  }
  submit_contact_form()" class="contact-us-form"  method="post" action="javascript:void(0)" >

      <div class="row m-0">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <input type="text" name="FullName" class="input-fields" id="FullName" placeholder="Full Name">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <input type="email" name="Email" class="input-fields" id="Email" placeholder="Email Address">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <input type="tel" name="MobileNumber" class="input-fields" id="MobileNumber"  placeholder="Mobile Number">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <input type="text" name="Subject" class="input-fields" id="Subject"  placeholder="Subject">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <textarea name="Message" id="Message" class="input-fields"  placeholder="Your Message"></textarea>
      </div>

      <input type="submit" value="Send" class="btn basic-btn">

      </div>
  </form>
    </div>
</div>
<!-- <div class="maps text-center mb-4">
    <img src="<?php echo base_url();?>assets/images/form.png" alt="" style="max-width:100%;">
</div> -->

<div class="company-info">
  <div class="container">
  <div class="row m-0">
    <div class="col-lg-3 col-md-5 col-sm-12 mb-5">
      <div class="d-flex company-info-box">
        <img src="<?php echo base_url();?>assets/images/call-icon.png" alt="">
        <div>
          <p>Phone Number</p>
          <h3>1234567890</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-5 col-md-7 col-sm-12 mb-5">
      <div class="d-flex company-info-box">
        <img src="<?php echo base_url();?>assets/images/gmail-icon.png" alt="">
        <div>
          <p>Gmail</p>
          <h3>Gyanavana@gmail.com</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
      <div class="d-flex company-info-box">
        <img src="<?php echo base_url();?>assets/images/location-icon.png" alt="">
        <div>
          <p>Map Street</p>
          <h3>Location with address</h3>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>


<?php require_once(APPPATH . 'views/includes/footer.php'); ?>
<style>
  a.nav-link.cactive:before{
  width: 75%;
  }
</style>

</body>

</html>