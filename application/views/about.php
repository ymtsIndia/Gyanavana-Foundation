<!doctype html>
<html lang="en">

<head>
  <?php require_once(APPPATH . 'views/includes/css.php'); ?>
  <title>Gyana Vana Foundation :: About </title>
</head>

<body>
  <section class="banner">
    <?php require_once(APPPATH . 'views/includes/menu.php'); ?>

    <div class="container-fluid banner-content">
      <div class="row">
        <div class="col-lg-4 text-info1">
          <h2 class="page-heading">
            About Us
          </h2>
          <p class="breadcrum">
            <img src="<?php echo base_url(); ?>assets/images/arrow-grey.png" alt=""> <a href="<?php echo base_url(); ?>home"> Home</a>
            <img src="<?php echo base_url(); ?>assets/images/arrow-white.png" alt=""> <a href="javascript::void();"> About Us</a>

          </p>


        </div>
        <div class="col-lg-8 text-img new-img">
          <img src="<?php echo base_url(); ?>assets/images/about.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="about-info">
    <div class="container">
      <h3 class="heading mb-4">GYANA Vana Foundation is an NGO that is thoroughly working on the need of the hour </h3>

      <p class="about-text-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra in malesuada id consectetur morbi placerat amet sed orci. Non mauris nisi elementum et. Nisi id erat proin leo et. Phasellus augue justo, a rutrum gravida proin duis fringilla dictum. Risus, magna orci feugiat urna condimentum vulputate sed sit dui. Tristique felis, pretium elit quisque non nec, rutrum massa. Accumsan, diam augue eu odio. Amet, lobortis dictum lobortis vel, in. Consequat dictum bibendum feugiat et pulvinar habitasse ut arcu sit. Ornare purus, nibh accumsan semper facilisis. Velit scelerisque mauris, lectus nisl, metus. Elementum in volutpat, vitae habitasse dolor. Tristique nisl urna quis non. Quis quam enim purus amet, et, dui nulla laoreet est. </p>

      <div class="about-video text-center">
        <img src="<?php echo base_url(); ?>assets/images/about-video.png" alt="">
      </div>
    </div>
  </section>


  <section class="bythenum">
    <div class="container">
      <div class="row m-0">
        <div class="col-lg-6 col-md-6">
          <h3 class="heading mb-4">By The Numbers</h3>
          <p class="about-text-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra in malesuada id consectetur morbi placerat amet sed orci. Non mauris nisi elementum et.</p>

          <div class="counterstrike">
            <div class="row m-0">
              <div class="col-lg-6 col-md-12">
                <div class="d-flex countbox">
                  <img src="<?php echo base_url(); ?>assets/images/about1.png" alt="">
                  <h3 class="countvalue">60+</h3>
                </div>
                <p class="count-info">Conservation over 60 countries</p>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="d-flex countbox">
                  <img src="<?php echo base_url(); ?>assets/images/about2.png" alt="">
                  <h3 class="countvalue">800+</h3>
                </div>
                <p class="count-info">800+ Scientiest on staff</p>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="d-flex countbox">
                  <img src="<?php echo base_url(); ?>assets/images/about3.png" alt="">
                  <h3 class="countvalue">100+</h3>
                </div>
                <p class="count-info">Protected forest more than 100+ </p>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="d-flex countbox">
                  <img src="<?php echo base_url(); ?>assets/images/about4.png" alt="">
                  <h3 class="countvalue">99K+</h3>
                </div>
                <p class="count-info">More than 99k+ recycle plastic </p>
              </div>
              <!-- <div class="col-lg-6 col-md-12"></div> -->
            </div>
          </div>


        </div>
        <div class="col-lg-6 col-md-6">
          <img src="<?php echo base_url(); ?>assets/images/bythenumber.png" alt="">
        </div>
      </div>
    </div>
  </section>


  <section class="latest-projects">
    <div class="container1">

      <div class="row m-0">
        <div class="col-lg-6 p-0">
          <iframe width="100%" height="400" src="https://www.youtube.com/embed/LPvby34KeOA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

          <div class="vid-title">Educate specially abled children</div>
        </div>
        <div class="col-lg-6">
          <h3 class="heading mb-4">Stories In Motion</h3>
          <div class="row m-0">
            <div class="col-lg-6 col-md-6"><iframe width="100%" height="190" src="https://www.youtube.com/embed/LPvby34KeOA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
            <div class="col-lg-6 col-md-6"><iframe width="100%" height="190" src="https://www.youtube.com/embed/LPvby34KeOA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
            <div class="col-lg-6 col-md-6"><iframe width="100%" height="190" src="https://www.youtube.com/embed/LPvby34KeOA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
            <div class="col-lg-6 col-md-6"><iframe width="100%" height="190" src="https://www.youtube.com/embed/LPvby34KeOA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require_once(APPPATH . 'views/includes/footer.php'); ?>
  <style>
    a.nav-link.aactive:before {
      width: 75%;
    }

    section.bythenum {
    padding: 50px 0;
}
    p.about-text-info {
      text-align: justify;
    }

    h3.countvalue {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 50px;
    line-height: 88px;
    color: #2E2E2E;
    margin-left: 15px;
}
p.count-info {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 32px;
    color: #808080;
}
.d-flex.countbox>img {
    height: 80px;
    width: 80px;
}
  </style>
</body>

</html>