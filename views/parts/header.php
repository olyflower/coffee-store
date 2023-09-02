<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee shop</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= ASSETS_URI ?>/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="<?= ASSETS_URI ?>/css/style.css">
</head>
<body>
<section id="navigation" class="fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="d-flex flex-wrap justify-content-center py-3">
                    <a href="/"
                       class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <img src="<?= IMAGES_URI ?>/logo.png" alt="Logo">
                    </a>

                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="#banner" class="nav-link" aria-current="page">HOME</a></li>
                        <li class="nav-item"><a href="#about" class="nav-link">ABOUT</a></li>
                        <li class="nav-item"><a href="#catalog" class="nav-link">COFFEE</a></li>
                        <li class="nav-item"><a href="#reviews" class="nav-link">REVIEW</a></li>
                        <li class="nav-item"><a href="#blog" class="nav-link">BLOG</a></li>
                    </ul>
                </header>
            </div>
        </div>
    </div>
</section>