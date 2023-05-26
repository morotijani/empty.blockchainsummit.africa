<?php

include ("connection/conn.php");

$title = 'Home';
$nav_color = 'navbar-light';
$btn_outline_light = 'dark';

include ('inc/head.php');

?>
    <!-- listing -->
    <section class="py-15 py-xl-20">
        <div class="container mt-5 mt-xl-10">
            <div class="row justify-content-center mb-5 mb-xl-10">
                <div class="col-lg-8 text-center">
                    <h1 class="fw-light mb-3"><span class="fw-bold">1 partner</span> for now.</h1>
                    <button class="btn btn-filter rounded-pill current" data-filter="*" data-target="#grid1">all</button>
                    <button class="btn btn-filter rounded-pill" data-filter=".filter-media" data-target="#grid1">media partners</button>
                    <button class="btn btn-filter rounded-pill" data-filter=".filter-ecosystem" data-target="#grid1">ecosytem partners</button>
                </div>
            </div>

            <div class="row g-1" id="grid1" data-isotope>
                <!-- <div class="col-12 filter-media">
                    <a href="https://coinpedia.org" target="_blank" class="card bg-white card-hover-border">
                        <div class="card-body">
                            <div class="row align-items-center g-2 g-md-4 text-center text-md-start">
                                <div class="col-md-2 col-lg-3">
                                    <img src="<?= PROOT; ?>assets/media/partners/coinpedia.png" alt="Logo" class="logo">
                                </div>
                                <div class="col-md-6">
                                    <p class="fs-lg mb-0">CoinPedia</p>
                                    <ul class="list-inline list-inline-separated text-muted">
                                        <li class="list-inline-item">Coinpedia Blockchain</li>
                                        <li class="list-inline-item">Fintech News Media</li>
                                    </ul>
                                </div>
                                <div class="col-md-3 text-lg-end">
                                    <span>Visit media</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> -->

            </div>
        </div>
    </section>

<?php include ('inc/foot.php'); ?>