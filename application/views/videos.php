<!doctype html>
<html lang="en">

<head>
    <?php require_once(APPPATH . 'views/includes/css.php'); ?>
    <title>Gyana Vana Foundation :: Videos </title>
</head>

<body>
    <section class="banner">
        <?php require_once(APPPATH . 'views/includes/menu.php'); ?>

        <div class="container-fluid banner-content">
            <div class="row">
                <div class="col-lg-6 text-info1">
                    <h2 class="page-heading">
                        Uniting voices for the Nation
                    </h2>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum distinctio vero
                        expedita numquam voluptate saepe aperiam. Voluptates, expedita nihil provident aperiam
                        architecto voluptatem culpa reiciendis illum aut itaque eos eius.</p>


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

    <section class="video-search-list">
        <div class="container">
            <div class="row m-0" id='service-videos-list'>
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
    </section>


    <?php require_once(APPPATH . 'views/includes/footer.php'); ?>
    <style>
    a.nav-link.vactive:before {
        width: 75%;
    }

    img.kmap {
        height: 570px;
    }

    .video-search select {
        background-image: linear-gradient(#ffffff, #59cfcf 50%, #a9dda9);
        background-repeat: no-repeat;
        width: 47%;
        height: 50px;
        margin-top: 30px;
        margin: 15px 0 20px 10px;
        border-radius: 10px;
        border: 1px solid #fff;
        text-align: center;
        font-weight: 600;
    }

    .video-search input.btn.basic-btn {
        background: #53C351;
        /* background-image: linear-gradient(#ffffff, #59cfcf 50%, #53c351); */
        background-repeat: no-repeat;
        border-radius: 8px;
        width: 47%;
        height: 48px;
        color: #000;
        margin-top: 0px;
        margin-left: 10px;
        border: 1px solid #fff;
        text-align: center;
        font-weight: 600;
    }

    .youtube iframe {
        border-radius: 10px;
        width: 100%;
        min-height: 320px;
    }
    </style>
    <script>
    // Wait for page to load
    window.addEventListener('load', function() {
        const post_url = '<?php echo BACKEND_URL	. 'admin/get_service_videos';?>'

        // Make GET request
        fetch(post_url)
            .then(response => response.json())
            .then(data => {
                // Process response data
                //                 {
                //   "id": 1,
                //   "title": "adsadsa",
                //   "videoPath": "first_video_1682345430244.mp4",
                //   "description": "dasdsadsd",
                //   "createdAt": "2023-04-25T10:31:01.074Z",
                //   "updatedAt": "2023-04-25T10:31:01.074Z",
                //   "isApproved": false
                // }

                //<div class="col-lg-4 col-md-6 col-sm-12">
                //    <div class="youtube">
                //        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/LPvby34KeOA"
                //           title="YouTube video player" frameborder="0"
                //           allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                //          allowfullscreen></iframe>
                //   </div>
                //    </div>

                // https://gyanavana.php.ymtsindia.org:8085/static/first_video_1682345430244.mp4

                let html = '';

                data.forEach((item, index) => {
                    html += `<div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="youtube">
                                    <iframe width="100%" height="auto" src="https://gyanavana.php.ymtsindia.org:8085/static/${item.videoPath}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                            </div>`;
                });

                document.getElementById('service-videos-list').innerHTML = html;



            })
            .catch(error => {
                // Handle errors
                console.error(error);
            });

    });
    </script>

</body>

</html>