<?php

include ("connection/conn.php");

    $title = 'Home';
    $nav_color = 'navbar-dark';
    $btn_outline_light = 'white';

    include ('inc/head.php');

    // TICKETS
    $ticketQuery = "
        SELECT * FROM bfc_ticket
        ORDER BY bfc_ticket.ticket_price ASC";
    $statement = $conn->prepare($ticketQuery);
    $statement->execute();
    $count_ticket = $statement->rowCount();
    $ticket_result = $statement->fetchAll();

    // SPEAKERS
    $speakerQuery = "
        SELECT * FROM bfs_speaker
        ORDER BY speaker_name ASC";
    $statement = $conn->prepare($speakerQuery);
    $statement->execute();
    $count_speaker = $statement->rowCount();
    $speaker_result = $statement->fetchAll();
?>

  
    <section class="cover overflow-hidden bg-warning inverted">
        <div class="d-flex flex-column min-vh-100 py-20 container foreground">
            <div class="row justify-content-center my-auto">
                <div class="col-lg-8 col-xl-6">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start text-start pb-2 pt-lg-2 pb-xl-0 pt-xl-5 mt-xxl-5">
                        <span class="fs-sm"><span class="text-color fw-semibold">400+</span> attendees are already with us</span>
                    </div>
                    <h1 class="display-1 mb-1"><?= ucwords($head); ?></h1>
                </div>
            </div>
        </div>
        <figure class="background background-dimm" style="background-image: url('assets/media/peakpx.jpg')" data-top-top="transform: translateY(0%);" data-top-bottom="transform: translateY(20%);"></figure>
        <span class="scroll-down"></span>
    </section>

    <!-- features -->
    <section class="py-15 py-xl-20">
        <div class="container">
            <div class="row justify-content-center mb-6">
                <div class="col-lg-8 text-center">
                    <span class="badge bg-opaque-primary text-secondary mb-2 rounded-pill">Theme</span>
                    <h2 class="fw-bold"><span class="d-lg-block">Cure for disempowered economies.</h2>
                    <div class="row mb-8">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="row separated">
                        <div class="col-lg-7 p-5">
                            <div class="d-flex align-items-end">
                                <h5 class="fs-1 mb-0 me-2 lh-1 text-warning fw-bold">INVESTORS</h5>
                            </div>
                        </div>
                        <div class="col-lg-5 p-5">
                            <div class="d-flex align-items-end">
                                <h5 class="fs-1 mb-0 me-2 lh-1 text-primary fw-bold">BUILDERS</h5>
                            </div>
                        </div>
                        <div class="col-lg-5 p-5">
                            <div class="d-flex align-items-end">
                                <h5 class="fs-1 mb-0 me-2 lh-1 text-info fw-bold">DEVELOPERS</h5>
                            </div>
                        </div>
                        <div class="col-lg-7 p-5">
                            <div class="d-flex align-items-end">
                                <h5 class="fs-1 mb-0 me-2 lh-1 text-danger fw-bold">STUDENTS</h5>
                            </div>
                        </div>
                        <div class="col-lg-7 p-5">
                            <div class="d-flex align-items-end">
                                <h5 class="fs-1 mb-0 me-2 lh-1 text-secondary fw-bold">ENTREPENEURS</h5>
                            </div>
                        </div>
                        <div class="col-lg-5 p-5">
                            <div class="d-flex align-items-end">
                                <h5 class="fs-1 mb-0 me-2 lh-1 text-dark fw-bold">EDUCATORS</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <!-- cta -->
    <section class="py-15 py-xl-20">
        <div class="container">
            <div class="row g-4 g-xl-6">
                <div class="col-lg-6" data-aos="fade-up">
                    <a href="" class="card h-100 border card-arrow">
                        <div class="card-body">
                            <h4 class="card-title fw-light fs-4"><span class="fw-bold">Let's connect.</span> Be a speaker.</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="" class="card card-arrow bg-warning inverted overflow-hidden">
                        <div class="card-body">
                            <h4 class="card-title fw-light fs-4">We'd love to <span class="fw-bold">get in touch</span> with you as a sponsor.</h4>
                        </div>
                        <img class="position-absolute top-50 start-50 translate-middle level-3" src="./assets/media/svg/dialog.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- organizers -->
    <section class="bg-orange mx-xl-3 py-15 py-xl-20 inverted overflow-hidden">
        <div class="container level-1">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mb-5">Organizers</h2>
                    <img src="assets/media/organizers/bcfa-logo-sm.png" width="100px" alt="">
                    <img src="assets/media/logo/Bitcoin-Freedom-2023.png" width="500px" alt="">
                    <div class="grouped-inputs p-1 border rounded-pill mb-2">
                        <div class="row g-1">
                            <div class="col-lg-9">
                                <input type="email" name="subscribe" id="subscribe" class="form-control px-4 rounded-pill" aria-label="Text input with dropdown button" placeholder="Your email address">
                            </div>
                            <div class="col-lg-3 d-grid">
                                <button type="button" onclick="subscribe_products(); return false;"  class="btn btn-white rounded-pill">Subscribe</button>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">We'll never share your email with anyone else.</small>
                </div>
            </div>
        </div>
        <figure class="background background-dimm background-parallax" style="background-image: url('./assets/media/event-12.png')" data-bottom-top="transform: translateY(0%);" data-top-bottom="transform: translateY(20%);"></figure>
    </section>

    <section class="py-15 py-xl-20 bg-black inverted">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="accordion accordion-minimal accordion-highlight" id="accordion-1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1-1">
                                <button class="accordion-button fs-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                    How to apply as a Speaker ?
                                </button>
                            </h2>
                            <div id="collapse-1-1" class="accordion-collapse collapse" aria-labelledby="heading-1-1" data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p class="text-secondary">Use this "<a href="<?= PROOT; ?>become-a-speaker" class="text-warning">link</a>" to apply as a speaker by filling in the form details.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1-2">
                                <button class="accordion-button fs-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                    How to join the sponser list?
                                </button>
                            </h2>
                            <div id="collapse-1-2" class="accordion-collapse collapse" aria-labelledby="heading-1-2" data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p class="text-secondary">
                                        To join the sponser list you will need to send use an email through <a href="mailto:sponsor@bitfreesummit.africa" class="text-warning">sponsor@bitfreesummit.africa</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1-2">
                                <button class="accordion-button fs-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                    How do i buy ticket?
                                </button>
                            </h2>
                            <div id="collapse-1-2" class="accordion-collapse collapse" aria-labelledby="heading-1-2" data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p class="text-secondary">
                                        Tickets are only available when prices are being set, and from there you choose between Fiat or Crypto purchase.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1-3">
                                <button class="accordion-button fs-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                    How do i buy ticket with FIAT?
                                </button>
                            </h2>
                            <div id="collapse-1-3" class="accordion-collapse collapse" aria-labelledby="heading-1-2" data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p class="text-secondary">
                                        To buy with Fiat, you will have to navigate to the price section and pick the category of your choice and hit on "Buy with Fiat" button. Provide your email and the number of tickets you want to purchase and proceed with payment.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1-4">
                                <button class="accordion-button fs-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
                                    How do i buy ticket with Crypto?
                                </button>
                            </h2>
                            <div id="collapse-1-4" class="accordion-collapse collapse" aria-labelledby="heading-1-2" data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p class="text-secondary">
                                        To buy with Crypto, you will have to navigate to the price section and pick the category of your choice and hit on "Buy with Crypto" button. Provide your email and the number of tickets you want to purchase and proceed with payment. NB: We accept only Bitcoin (BTC).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1-6">
                                <button class="accordion-button fs-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-6" aria-expanded="false" aria-controls="collapse-1-6">
                                    Do I get free updates?
                                </button>
                            </h2>
                            <div id="collapse-1-6" class="accordion-collapse collapse" aria-labelledby="heading-1-6" data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p class="text-secondary">
                                        <span class="fw-bold text-white">Yes.</span> Everyone can take advantage of lifetime updates by subscribing to our daily updates.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid" src="<?= PROOT; ?>assets/media/svg/faq.svg" alt="FAQ">
                </div>
            </div>
        </div>
    </section>

<?php include ('inc/foot.php'); ?>