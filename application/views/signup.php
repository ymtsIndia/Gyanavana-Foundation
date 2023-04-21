<!doctype html>
<html lang="en">

<head>
		<?php require_once(APPPATH . 'views/includes/css.php'); ?>
		<title>Gyana Vana Foundation :: Signup </title>
</head>

<body>
<section class="banner">
		<?php require_once(APPPATH . 'views/includes/menu.php'); ?>
		
	<div class="container-fluid banner-content">
        <div class="contact-form">
            <div class="container">
                <h3 class="heading" style="color: white;text-align: center;margin-bottom: 20px">Signup</h3>
                <form action="/" class="contact-us-form" method="post">

                    <div class="row m-0">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="name" class="input-fields" id="" placeholder="Full Name">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="email" name="email" class="input-fields" id="" placeholder="Email Address">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="password" name="password" class="input-fields" id=""  placeholder="Password">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="subject" class="input-fields" id=""  placeholder="Subject">
                        </div><div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="subject" class="input-fields" id=""  placeholder="Subject">
                        </div><div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="subject" class="input-fields" id=""  placeholder="Subject">
                        </div><div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="subject" class="input-fields" id=""  placeholder="Subject">
                        </div>

                        <input type="submit" value="Send" class="btn basic-btn">

                    </div>
                </form>
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