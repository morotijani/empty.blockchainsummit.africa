
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="Blockchain Summit Africa">
    <meta name="description" content="Conference that talks and teaches about bitcoins">
    <meta name="keywords" content="bitcoin, africa, freedom, conference, summit, bitcoin, paxful, blockchainfoundationafrica, inqoins, ">
    <meta name="author" content="Blochain Foundation Africa" />
    <meta name="copyright" content="Blochain Foundation Africa" />
    <meta name="robots" content="index, follow">
    <meta name="title" content="Blockchain Summit Africa">
    <meta name="language" content="English">
    <link rel="canonical" href="http://example.com/" />

    <meta property="og:type" content="article" />
    <meta property="og:title" content="TITLE OF YOUR POST OR PAGE" />
    <meta property="og:description" content="DESCRIPTION OF PAGE CONTENT" />
    <meta property="og:image" content="LINK TO THE IMAGE FILE" />
    <meta property="og:url" content="PERMALINK" />
    <meta property="og:site_name" content="SITE NAME" />
  
    <link rel="shortcut icon" href="<?= PROOT; ?>assets/logo/logo-sm.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?= PROOT; ?>assets/css/libs.bundle.css" />
    <link rel="stylesheet" href="<?= PROOT; ?>assets/css/index.bundle.css" />
    <link rel="stylesheet" href="<?= PROOT; ?>assets/css/bsa.css" />
    <title><?= $title; ?> ~ Blockchain Summit Africa</title>
</head>
<body>
    <nav id="mainNav" class="navbar navbar-expand-lg navbar-sticky <?= $nav_color; ?>">
        <div class="container">
            <a href="index" class="navbar-brand">
                <img src="<?= PROOT; ?>assets/media/logo/logo-5.png" class="shadow-sm" alt="Logo">
            </a>
            <ul class="navbar-nav navbar-nav-secondary order-lg-3">
                <li class="nav-item d-lg-none">
                    <a class="nav-link nav-icon" href="" role="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="bi bi-list"></span>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a href="ticket" class="btn btn-outline-<?= $btn_outline_light; ?> rounded-pill ms-2">Be our Sponsor</a>
                </li>
            </ul>
              
            <div class="collapse navbar-collapse" id="navbar" data-bs-parent="#mainNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index" role="button">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sponsors" role="button">Sponsors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="partners" role="button">Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us" role="button">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="exhibit" role="button">Exhibit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tour" role="button">Tour</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a href="ticket" class="nav-link text-warning">Get Tickets</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>