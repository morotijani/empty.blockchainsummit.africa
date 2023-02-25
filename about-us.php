<?php
require_once ('connection/conn.php');

$title = 'About Us';
$nav_color = 'navbar-light';
$btn_outline_light = 'light';
include ('inc/head.php');


?>
  

    <div class="offcanvas-wrap">
        <!-- hero -->
        <section class="overflow-hidden py-15 py-xl-20">
            <div class="container">
                <div class="row align-items-end mb-10 mt-5">
                    <div class="col-lg-8">
                        <h1 class="text-color">Passion Combined With Experience.</h1>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <p class="fs-lg text-muted mb-1">Completed <span class="text-black">250k+</span> <span class="d-block">conferences Africawide</span></p>
                    </div>
                </div>
            </div>
            <div class="container gallery-1" data-aos="fade-up">
                <div class="row flex-nowrap align-items-end g-2 g-xl-5 mb-2 mb-xl-5" data-bottom-top="transform: translateX(-25%)" data-top-bottom="transform: translateX(-40%)">
                    <div class="col-6 col-lg-5">
                        <figure class="media equal equal-16-10 media-image" data-bp='{"imgSrc": "./assets/media/event-1.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-1.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-5">
                        <figure class="media equal equal-16-10 media-image" data-bp='{"imgSrc": "./assets/media/event-2.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-2.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-5">
                        <figure class="media equal equal-16-10 media-image" data-bp='{"imgSrc": "./assets/media/event-3.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-3.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-5">
                        <figure class="media equal equal-16-10 media-image" data-bp='{"imgSrc": "./assets/media/event-4.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-4.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-5">
                        <figure class="media equal equal-16-10 media-image" data-bp='{"imgSrc": "./assets/media/event-5.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-5.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-5">
                        <figure class="media equal equal-16-10 media-image" data-bp='{"imgSrc": "./assets/media/event-14.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-14.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-5">
                        <figure class="media equal equal-16-10 media-image" data-bp='{"imgSrc": "./assets/media/event-7.png" , "parentGalleryClass": "gallery-1" }' >
                            <span style="background-image: url('./assets/media/event-7.png')"></span>
                        </figure>
                    </div>
                </div>
                <div class="row flex-nowrap align-items-start g-2 g-xl-5" data-bottom-top="transform: translateX(-50%)" data-top-bottom="transform: translateX(-35%)">
                    <div class="col-6 col-lg-5">
                        <figure class="media equal equal-16-10 media-image" data-bp='{"imgSrc": "./assets/media/event-8.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-8.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-5">
                        <figure class="media equal equal-16-10 media-image" data-bp='{"imgSrc": "./assets/media/event-12.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-12.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-5">
                        <figure class="media equal equal-16-10 media-image" data-bp='{"imgSrc": "./assets/media/event-11.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-11.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-5">
                        <figure class="media equal equal-16-10 media-image" data-bp='{"imgSrc": "./assets/media/event-13.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-13.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-5">
                        <figure class="media equal equal-16-10 media-image" data-bp='{"imgSrc": "./assets/media/event-10.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-10.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-5">
                        <figure class="media equal equal-16-10 media-image" data-bp='{"imgSrc": "./assets/media/event-9.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-9.png')"></span>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <!-- numbers -->
        <section class="pb-15 pb-xl-20">
            <div class="container">
                <div class="row mb-10">
                    <div class="col-lg-10">
                        <span class="eyebrow text-normal-color mb-4">About Us</span>
                        <h3 class="fs-4">We are Africans from various parts of the continent who believe in the Bitcoin revolution and are building a movement to bolster its Adoption.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span class="d-block display-3 fw-bold text-color">+80%</span>
                        <span class="lead text-secondary">working hours</span>
                    </div>
                    <div class="col">
                        <span class="d-block display-3 fw-bold text-color">84</span>
                        <span class="lead text-secondary">working hours</span>
                    </div>
                    <div class="col">
                        <span class="d-block display-3 fw-bold text-color">84</span>
                        <span class="lead text-secondary">working hours</span>
                    </div>
                    <div class="col">
                        <span class="d-block display-3 fw-bold text-color">84</span>
                        <span class="lead text-secondary">working hours</span>
                    </div>
                </div>
            </div>
        </section>


        <!-- team -->
        <section class="py-15 py-xl-20 bg-light overflow-hidden">
            <div class="container">
                <div class="row mb-10">
                    <div class="col-lg-8">
                        <h2>Our Team</h2>
                    </div>
                </div>
                <div class="row g-3 g-xl-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="equal-1-1 mb-2">
                                <figure class="background" style="background-image: url('./assets/media/team/boss.jpg')"></figure>
                            </div>
                            <h4 class="card-title">Mr. Philip</h4>
                            <span class="text-secondary">Senior Designer at Google</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="equal-1-1 mb-2">
                            <figure class="background" style="background-image: url('./assets/media/team/boss.jpg')"></figure>
                        </div>
                        <h4 class="fs-5 mb-0">Madam Ala</h4>
                        <span class="text-secondary">Senior Designer at Google</span>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="equal-1-1 equal-3-4 mb-2">
                            <figure class="background" style="background-image: url('./assets/media/team/boss.jpg')"></figure>
                        </div>
                        <h4 class="fs-5 mb-0">Mr. Pekay</h4>
                        <span class="text-secondary">Senior Designer at Google</span>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="equal-1-1 mb-2">
                            <figure class="background" style="background-image: url('./assets/media/team/boss.jpg')"></figure>
                        </div>
                        <h4 class="fs-5 mb-0">Michael Doe</h4>
                        <span class="text-secondary">Senior Designer at Google</span>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="equal-1-1 equal-3-4 mb-2">
                            <figure class="background" style="background-image: url('./assets/media/team/boss.jpg')"></figure>
                        </div>
                        <h4 class="fs-5 mb-0">Michael Doe</h4>
                        <span class="text-secondary">Senior Designer at Google</span>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="equal-1-1 equal-3-4 mb-2">
                            <figure class="background" style="background-image: url('./assets/media/team/tj.png')"></figure>
                        </div>
                        <h4 class="fs-5 mb-0">Moro Tijani</h4>
                        <span class="text-secondary">Senior Designer at Google</span>
                    </div>
                </div>
            </div>
        </section>


        <!-- instagram -->
        <section class="py-15 py-xl-20">
            <div class="container">
                <div class="row g-0 gallery-1">
                    <div class="col-lg-3">
                        <a href="" class="card card-arrow card-hover-arrow equal-lg-1-1 text-white bg-warning">
                            <div class="card-wrap">
                                <div class="card-header pb-0">
                                    <i class="bi bi-instagram fs-3"></i>
                                </div>
                                <div class="card-footer mt-auto">
                                    <h5 class="fs-lg">@bfc</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-3">
                        <figure class="media media-image equal-1-1" data-bp='{"imgSrc": "./assets/media/event-11.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-11.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-md-3">
                        <figure class="media media-image equal-1-1" data-bp='{"imgSrc": "./assets/media/event-2.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-2.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-md-3">
                        <figure class="media media-image equal-1-1" data-bp='{"imgSrc": "./assets/media/event-12.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-12.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-md-3">
                        <figure class="media media-image equal-1-1" data-bp='{"imgSrc": "./assets/media/event-5.png" , "parentGalleryClass": "gallery-1" }' >
                        <span  style="background-image: url('./assets/media/event-5.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-md-3">
                        <figure class="media media-image equal-1-1" data-bp='{"imgSrc": "./assets/media/event-14.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-14.png')"></span>
                        </figure>
                    </div>
                    <div class="col-6 col-md-3">
                        <figure class="media media-image equal-1-1" data-bp='{"imgSrc": "./assets/media/event-10.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-10.png')"></span>
                        </figure>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <figure class="media media-image equal-2-1 equal-lg-1-1" data-bp='{"imgSrc": "./assets/media/event-7.png" , "parentGalleryClass": "gallery-1" }' >
                            <span  style="background-image: url('./assets/media/event-7.png')"></span>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

<?php include ('inc/foot.php'); ?>