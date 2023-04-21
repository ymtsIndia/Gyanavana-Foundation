<nav class="navbar navbar-expand-lg bg-body-tertiary1">
  <div class="container">
    <!-- <a class="navbar-brand text-white" href="#">GYANA VANA FOUNDATION</a> -->
    <a class="navbar-brand text-white" href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>assets/images/logo1.png" class="logo-img" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link hactive" aria-current="page" href="<?php echo base_url(); ?>home">Home</a></li>
        <li class="nav-item"><a class="nav-link aactive" href="<?php echo base_url(); ?>about">About</a></li>
        <li class="nav-item"><a class="nav-link vactive" href="<?php echo base_url(); ?>media">Media</a></li>
        <li class="nav-item"><a class="nav-link dactive" href="<?php echo base_url(); ?>donation">Donation</a></li>
        <li class="nav-item"><a class="nav-link sactive" href="<?php echo base_url(); ?>service">Service</a></li>
        <li class="nav-item"><a class="nav-link cactive" href="<?php echo base_url(); ?>contact">Contact</a></li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
        
      </ul>
      <form class="d-flex" role="search">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <!-- <button class="btn btn-outline-success" type="submit">Login</button> -->
        <a class="btn login-btn" href="<?php echo base_url(); ?>login">Login</a>
        <a class="btn login-btn" href="<?php echo base_url(); ?>signup" style="margin-left: 10px;background-color:white !important;color:deepskyblue !important;">Signup</a>
      </form>
    </div>
  </div>
</nav>
