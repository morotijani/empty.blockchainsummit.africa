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
                    <h1 class="fw-light mb-3"><span class="fw-bold">1 sponsor</span> for now.</h1>
                    <button class="btn btn-filter rounded-pill current" data-filter="*" data-target="#grid1">all</button>
                    <button class="btn btn-filter rounded-pill" data-filter=".filter-lead" data-target="#grid1">lead</button>
                    <button class="btn btn-filter rounded-pill" data-filter=".filter-diamon" data-target="#grid1">diamond</button>
                    <button class="btn btn-filter rounded-pill" data-filter=".filter-golden" data-target="#grid1">golden</button>
                    <button class="btn btn-filter rounded-pill" data-filter=".filter-silver" data-target="#grid1">silver</button>
                </div>
            </div>

            <div class="row g-1" id="grid1" data-isotope>
                <!-- <div class="col-12 filter-silver">
                    <a href="https://inqoins.io" target="_blank" class="card bg-white card-hover-border">
                        <div class="card-body">
                            <div class="row align-items-center g-2 g-md-4 text-center text-md-start">
                                <div class="col-md-2 col-lg-3">
                                    <img src="<?= PROOT; ?>assets/media/sponsors/inqoins.png" alt="Logo" class="logo">
                                </div>
                                <div class="col-md-6">
                                    <p class="fs-lg mb-0">Inqoins</p>
                                    <ul class="list-inline list-inline-separated text-muted">
                                        <li class="list-inline-item">Buy</li>
                                        <li class="list-inline-item">Sell and trade on the go. Anywhere, anytime.</li>
                                    </ul>
                                </div>
                                <div class="col-md-3 text-lg-end">
                                    <span>Visit partner</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> -->

            </div>
        </div>
    </section>

<?php include ('inc/foot.php'); ?>