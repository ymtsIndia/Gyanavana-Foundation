<!doctype html>
<html lang="en">

<head>
  <?php require_once(APPPATH . 'views/includes/css.php'); ?>
  <title>Gyana Vana Foundation</title>
</head>

<body>
  <section class="banner">
    <?php require_once(APPPATH . 'views/includes/menu.php'); ?>

    <div class="container banner-content">
      <div class="row m-0">
        <div class="col-lg-6 text-info">
          <h2 class="banner-text">
            Empowering communities, creating change, and building a better world for all.
          </h2>

          <p class="banner-quote">"Never doubt that a small group of thoughtful, committed citizens can change the world; indeed, it's the only thing that ever has." - Margaret Mead</p>

          <a class="btn basic-btn" href="#donate">Donate Now</a>
        </div>
        <div class="col-lg-6 text-img">
          <img src="<?php echo base_url(); ?>assets/images/home-banner2.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="first-div mb-5">
    <div class="container services">
      <h2 class="banner-text text-dark">
        About Us
      </h2>

      <p class="first-info">The statement refers to a situation where political candidates visit a government school in their electoral constituency and encourage students to sing the national anthem while filming a video that lasts for two minutes. The objective behind this activity is to exhibit the candidate's patriotism and to foster a connection with the younger generation, who are potential future voters.
      </p>
      <!-- <a href="#" class="read-more-btn">Read More</a> -->
      <div class="row mt-5 d-none" style="margin:0" ;>
        <div class="col-lg-4 col-md-6 service-box">
          <img src="<?php echo base_url(); ?>assets/images/empty.png" alt="">
          <h3 class="service-heading">Nikkodi Constituency Govt school</h3>
          <p class="service-date">14 Feb . Material</p>
          <p class="service-content">NAME: Example<br>
            Candidate: MLA<br>
            Constituency: Nikkodi<br>
            District: Chikkodi<br>
            State: Karnataka
          </p>

          <!-- <a href="#" class="read-more-btn view">Read More</a> -->
        </div>
        <div class="col-lg-4 col-md-6 service-box">
          <img src="<?php echo base_url(); ?>assets/images/empty.png" alt="">
          <h3 class="service-heading">Athani Constituency Govt School</h3>
          <p class="service-date">14 Feb . Material</p>
          <p class="service-content">NAME: Example<br>
            Candidate: MLA<br>
            Constituency: Nikkodi<br>
            District: Chikkodi<br>
            State: Karnataka
          </p>

          <!-- <a href="#" class="read-more-btn view">Read More</a> -->
        </div>
        <div class="col-lg-4 col-md-6 service-box">
          <img src="<?php echo base_url(); ?>assets/images/empty.png" alt="">
          <h3 class="service-heading">Arabhavi Constituency Govt school</h3>
          <p class="service-date">14 Feb . Material</p>
          <p class="service-content">NAME: Example<br>
            Candidate: MLA<br>
            Constituency: Nikkodi<br>
            District: Chikkodi<br>
            State: Karnataka
          </p>

          <!-- <a href="#" class="read-more-btn view">Read More</a> -->
        </div>
      </div>
    </div>
  </section>

  <div class="container">
  <h2 class="banner-text text-dark">
    Programs
  </h2>
  </div>
  
  <section class="edu-vidya">
    <div class="container">
    <h3 class="heading">WHY Education</h3>
      <div class="d-flex service-image">

        <div class="service-intro">
          
          <p>There is no better place to start than ensuring that underprivileged children have access to school if we need to address issues like healthcare, poverty, population control, unemployment, and human rights. Children are empowered by education to not only have a secure future but also to develop into good local, national, and international citizens. All children between the ages of 6 and 14 now have access to free, obligatory education according to the Right to Education (RTE) Act, which went into effect in 2010. However, even ten years later, many children in the nation still experience a steep learning curve. Many children are prevented from receiving an education because of the socioeconomic circumstances of their parents and the poor quality of education provided in schools.</p>
          
          <a href="<?php echo base_url(); ?>education-service" class="read-more-btn">View More</a>
        </div>
        <img src="<?php echo base_url(); ?>assets/images/service/11.jpg" alt="" class="service-newimage">
      </div>

    </div>
  </section>

  <section class="banner">
    <div class="container-fluid banner-content">
      <div class="row">
        <div class="col-lg-6 text-info1">
          <h3 class="page-heading camp">
            About Vidhya Campaign
          </h3>

          <h4 class="text-white">Uniting voices for the Nation</h4>
          <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum distinctio vero expedita numquam voluptate saepe aperiam. Voluptates, expedita nihil provident aperiam architecto voluptatem culpa reiciendis illum aut itaque eos eius.</p>
           

          <form action="/" class="video-search" method="post">
            <select name="state" id="state">
              <option value="">Select State</option>
              <option value="k">Karnataka</option>
              <option value="andhra">Andhra Pradesh</option>
            </select>
            <select name="district" id="district">
              <option value="">Select District</option>
              <option value="district1">District 1</option>
              <option value="district2">District 2</option>
              <option value="district3">District 3</option>
              <option value="district4">District 4</option>
              <option value="district5">District 5</option>
              <option value="district6">District 6</option>
              <option value="district7">District 7</option>
            </select>
            <select name="city" id="city">
              <option value="">Select City</option>
              <option value="city1">City Name 1</option>
              <option value="city1">City Name 2</option>
              <option value="city1">City Name 3</option>
              <option value="city1">City Name 4</option>
              <option value="city1">City Name 5</option>
              <option value="city1">City Name 6</option>
              <option value="others">Others</option>

            </select>
            <input type="submit" value="Search" class="btn basic-btn">
          </form>


        </div>
        <div class="col-lg-6 text-img new-img text-center">
          <img src="<?php echo base_url(); ?>assets/images/karnataka-map.png" alt="" class="kmap">
        </div>
      </div>
    </div>
  </section>

  <section class="edu-vidya plantation" style="background:#fff;">
    <div class="container">
      <div class="d-flex service-image">


        <img src="<?php echo base_url(); ?>assets/images/service/plantation.jpg" alt="" class="service-newimage">

        <div class="service-intro">
          <h3 class="heading">Plantation</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fuga recusandae ea nobis tenetur magni. Facilis similique incidunt explicabo molestias repellendus sint, praesentium reprehenderit saepe, laboriosam distinctio corporis dicta non!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fuga recusandae ea nobis tenetur magni. Facilis similique incidunt explicabo molestias repellendus sint, praesentium reprehenderit saepe, laboriosam distinctio corporis dicta non!</p>
          
          <a href="<?php echo base_url(); ?>plantation-service" class="read-more-btn">View More</a>
        </div>
      </div>

    </div>
  </section>

  <section class="edu-vidya renewal">
    <div class="container">
      <div class="d-flex service-image">

        <div class="service-intro">
          <h3 class="heading">Renewal Energy</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fuga recusandae ea nobis tenetur magni. Facilis similique incidunt explicabo molestias repellendus sint, praesentium reprehenderit saepe, laboriosam distinctio corporis dicta non!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fuga recusandae ea nobis tenetur magni. Facilis similique incidunt explicabo molestias repellendus sint, praesentium reprehenderit saepe, laboriosam distinctio corporis dicta non!</p>
          
          <a href="<?php echo base_url(); ?>renewable-energy-service" class="read-more-btn">View More</a>
        </div>
        <img src="<?php echo base_url(); ?>assets/images/service/renewble.jpg" alt="" class="service-newimage">
      </div>

    </div>
  </section>

  <section class="edu-vidya jallsudh" style="background:#fff;">
    <div class="container">
      <div class="d-flex service-image">


        <img src="<?php echo base_url(); ?>assets/images/service/water-purification.jpg" alt="" class="service-newimage">

        <div class="service-intro">
          <h3 class="heading">Jall Sudh</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fuga recusandae ea nobis tenetur magni. Facilis similique incidunt explicabo molestias repellendus sint, praesentium reprehenderit saepe, laboriosam distinctio corporis dicta non!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fuga recusandae ea nobis tenetur magni. Facilis similique incidunt explicabo molestias repellendus sint, praesentium reprehenderit saepe, laboriosam distinctio corporis dicta non!</p>
          
          <a href="<?php echo base_url(); ?>jall-sudh-service" class="read-more-btn">View More</a>
        </div>
      </div>

    </div>
  </section>

  <section class="edu-vidya waste-recycle">
    <div class="container">
      <div class="d-flex service-image">

        <div class="service-intro">
          <h3 class="heading">Waste Recycle</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fuga recusandae ea nobis tenetur magni. Facilis similique incidunt explicabo molestias repellendus sint, praesentium reprehenderit saepe, laboriosam distinctio corporis dicta non!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fuga recusandae ea nobis tenetur magni. Facilis similique incidunt explicabo molestias repellendus sint, praesentium reprehenderit saepe, laboriosam distinctio corporis dicta non!</p>
          
          <a href="<?php echo base_url(); ?>waste-recycle-service" class="read-more-btn">View More</a>
        </div>
        <img src="<?php echo base_url(); ?>assets/images/service/9.jpg" alt="" class="service-newimage">
      </div>

    </div>
  </section>


  <!-- <section class="second-div">
    <div class="container">
    <h3 class="heading">Renewable Energy</h3>
      <h2 class="banner-text">
        Renewable energy: Harnessing the power of nature for a cleaner, greener world
      </h2>

      <p class="first-info">Renewable energy: Harnessing the power of nature for a cleaner, greener world, Renewable energy is energy that is derived from naturally replenishing sources such as sunlight, wind, water, geothermal heat, and biomass. Unlike non-renewable sources of energy like fossil fuels, renewable energy is sustainable and has minimal environmental impact.
      </p>
      <a href="#" class="read-more-btn">Read More</a>

      <img src="<?php echo base_url(); ?>assets/images/solar.png" alt="" class="solar">

    </div>
  </section> -->
  
<!--  --><?php //print_r($videos); ?>
<!--  stdClass Object ( [message] => Videos fetched successfully [videos] => Array ( [0] => stdClass Object ( [id] => 1 [title] => First Video [videoPath] => uploads/serviceVideos/first_video_1682356598890.mp4 [description] => Imagine Dragons [createdAt] => 2023-04-24T17:16:38.960Z [updatedAt] => 2023-04-24T17:16:38.960Z [videoUrl] => http://192.168.1.4:8080/uploads/serviceVideos/first_video_1682356598890.mp4 ) [1] => stdClass Object ( [id] => 2 [title] => Second Video [videoPath] => uploads/serviceVideos/second_video_1682356603412.mp4 [description] => Imagine Dragons [createdAt] => 2023-04-24T17:16:43.460Z [updatedAt] => 2023-04-24T17:16:43.460Z [videoUrl] => http://192.168.1.4:8080/uploads/serviceVideos/second_video_1682356603412.mp4 ) [2] => stdClass Object ( [id] => 3 [title] => Third Video [videoPath] => uploads/serviceVideos/third_video_1682356608448.mp4 [description] => Imagine Dragons [createdAt] => 2023-04-24T17:16:48.497Z [updatedAt] => 2023-04-24T17:16:48.497Z [videoUrl] => http://192.168.1.4:8080/uploads/serviceVideos/third_video_1682356608448.mp4 ) [3] => stdClass Object ( [id] => 4 [title] => Fourth Video [videoPath] => uploads/serviceVideos/fourth_video_1682356612186.mp4 [description] => Imagine Dragons [createdAt] => 2023-04-24T17:16:52.235Z [updatedAt] => 2023-04-24T17:16:52.235Z [videoUrl] => http://192.168.1.4:8080/uploads/serviceVideos/fourth_video_1682356612186.mp4 ) [4] => stdClass Object ( [id] => 5 [title] => Fifth Video [videoPath] => uploads/serviceVideos/fifth_video_1682356615164.mp4 [description] => Imagine Dragons [createdAt] => 2023-04-24T17:16:55.206Z [updatedAt] => 2023-04-24T17:16:55.206Z [videoUrl] => http://192.168.1.4:8080/uploads/serviceVideos/fifth_video_1682356615164.mp4 ) [5] => stdClass Object ( [id] => 6 [title] => Sixth Video [videoPath] => uploads/serviceVideos/sixth_video_1682356618950.mp4 [description] => Imagine Dragons [createdAt] => 2023-04-24T17:16:59.001Z [updatedAt] => 2023-04-24T17:16:59.001Z [videoUrl] => http://192.168.1.4:8080/uploads/serviceVideos/sixth_video_1682356618950.mp4 ) ) )-->


  <section class="latest-projects">
    <div class="container1">
      
      <div class="row m-0">
        <div class="col-lg-6 p-0">

          <div class="vid-title">Educate specially abled children</div>
        </div>
        <div class="col-lg-6">
        <h3 class="heading mb-4">Stories In Motion</h3>
          <div class="row m-0">
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="youtube">
                      <iframe width="100%" height="auto" src="https://www.youtube.com/embed/LPvby34KeOA"
                              title="YouTube video player" frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                              allowfullscreen></iframe>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="youtube">
                      <iframe width="100%" height="auto" src="https://www.youtube.com/embed/LPvby34KeOA"
                              title="YouTube video player" frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                              allowfullscreen></iframe>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="youtube">
                      <iframe width="100%" height="auto" src="https://www.youtube.com/embed/LPvby34KeOA"
                              title="YouTube video player" frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                              allowfullscreen></iframe>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="youtube">
                      <iframe width="100%" height="auto" src="https://www.youtube.com/embed/LPvby34KeOA"
                              title="YouTube video player" frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                              allowfullscreen></iframe>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="upi-form" style=" background: #e5f0ee;"  id="donate">
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

        <img src="<?php echo base_url(); ?>assets/images/quickpaymode.png" alt="">
      </div>
    </div>
  </section>

  <section class="latest-blog d-none">
    <div class="container">
      <h3 class="heading mb-4">Our Latest Blogs</h3>
      <div class="row m-0">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="blog-box">
            <img src="<?php echo base_url(); ?>assets/images/empty.png" alt="">
            <p class="service-date">Forest, Crisis</p>
            <h3 class="service-heading">The EU needs to hold the financial sector in global deforestation</h3>
            <p class="service-content">Temporibus debitis iste perferendis consequuntur sit, blanditiis dolore vitae aliquam! Modi dolores repellendus nam atque necessitatibus saepe maiores iste nisi natus molestiae!
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="blog-box">
            <img src="<?php echo base_url(); ?>assets/images/empty.png" alt="">
            <p class="service-date">Forest, Crisis</p>
            <h3 class="service-heading">The EU needs to hold the financial sector in global deforestation</h3>
            <p class="service-content">Temporibus debitis iste perferendis consequuntur sit, blanditiis dolore vitae aliquam! Modi dolores repellendus nam atque necessitatibus saepe maiores iste nisi natus molestiae!
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="blog-box">
            <img src="<?php echo base_url(); ?>assets/images/empty.png" alt="">
            <p class="service-date">Forest, Crisis</p>
            <h3 class="service-heading">The EU needs to hold the financial sector in global deforestation</h3>
            <p class="service-content">Temporibus debitis iste perferendis consequuntur sit, blanditiis dolore vitae aliquam! Modi dolores repellendus nam atque necessitatibus saepe maiores iste nisi natus molestiae!
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <?php require_once(APPPATH . 'views/includes/footer.php'); ?>
  <style>
    a.nav-link.hactive:before {
      width: 75%;
    }

    img.service-newimage {
      border-radius: 10px;
      filter: drop-shadow(2px 4px 6px grey);
      max-height: 400px;
    }
    .d-flex.service-image {
    align-items: center;
}

    .service-intro {
      padding: 0 30px;
      text-align: justify;
    }
  </style>
</body>

</html>