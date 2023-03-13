<?php

require_once ('connection/conn.php');

$title = 'Speakers';
$nav_color = 'navbar-dark';
$btn_outline_light = 'white';
include ('inc/head.php');

// SPEAKERS
$speakerQuery = "
    SELECT * FROM bsa_speaker
    ORDER BY bsa_speaker.speaker_name ASC";
$statement = $conn->prepare($speakerQuery);
$statement->execute();
$count_speaker = $statement->rowCount();
$speaker_result = $statement->fetchAll();
?>

  
    <!-- speakers -->
    <section class="py-15 py-xl-20 bg-primary inverted">
        <div class="container">
            <div class="row align-items-end mb-5">
                <div class="col-lg-6">
                    <h2 class="fw-bold">Meet the speakers behind the conference.</h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a href="" class="action underline text-white">Want to be a SPEAKER?<i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="row g-2 g-lg-5">
                <?php if ($count_speaker > 0): ?>
                    <?php foreach ($speaker_result as $speaker): ?>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up">
                            <a href="<?= $speaker["speaker_url"]; ?>" title="<?= $speaker["speaker_url"]; ?>" target="_blank" class="card card-hover-gradient inverted equal-1-1 equal-lg-3-4">
                                <div class="card-wrap">
                                    <div class="card-footer text-shadow mt-auto">
                                        <h5 class="mb-0"><?= ucwords($speaker['speaker_name']); ?></h5>
                                        <span class="text-muted"><?= ucwords($speaker['speaker_status']); ?></span>
                                    </div>
                                </div>
                                <figure class="background" style="background-image: url('<?= PROOT; ?>assets/media/speaker/boss.jpg')"></figure>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php include ('inc/foot.php'); ?>