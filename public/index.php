<?php
    $site_url = 'https://dddeurope.com/2019';
    $page_title = 'Domain-Driven Design Europe 2019';
    $page_description = 'The Software Modelling & Design Conference';
    $twitter_handle = '@ddd_eu';
    $youtube_handle = 'DomainDrivenDesignEurope';
    $facebook_handle = 'dddeurope';
    $logo = '//res.cloudinary.com/humanmusic/image/upload/c_scale,w_400/v1516832580/DDDEU19_dynamic_design_beige_v1_i5db0v.png'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- † -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="application-name" content="<?= $page_title ?>">
    <meta name="robots" content="index,follow"><!-- All Search Engines -->
    <link rel="stylesheet" type="text/css" href='https://css.tito.io/v1.1' />
    <link href="main.css?v2" rel="stylesheet"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- For IE 11, Chrome, Firefox, Safari, Opera -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $site_url; ?>/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $site_url; ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= $site_url; ?>/favicon-96x96.png">

    <!-- Facebook -->
    <meta property="og:url" content="<?= $site_url; ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:image" content="<?= $logo; ?>">
    <meta property="og:description" content="<?= $page_description; ?>">
    <meta property="og:site_name" content="<?= $page_title ?>">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="<?= $page_title ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="<?= $page_description; ?>">
    <meta name="twitter:site" content="<?= $twitter_handle; ?>">
    <meta name="twitter:creator" content="<?= $twitter_handle; ?>">
    <meta name="twitter:url" content="<?= $site_url; ?>">
    <meta name="twitter:title" content="<?= $page_title ?>">
    <meta name="twitter:description" content="<?= $page_description; ?>">
    <meta name="twitter:image" content="<?= $logo; ?>">

    <!-- Google -->
    <meta itemprop="name" content="<?= $page_title ?>">
    <meta itemprop="description" content="<?= $page_description; ?>">
    <meta itemprop="image" content="<?= $logo; ?>">

    <!-- Apple -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?= $page_title ?>">
    <link rel="apple-touch-icon" href="<?= $site_url; ?>/apple-touch-icon.png">

    <!-- Android -->
    <meta name="theme-color" content="#282927">
    <meta name="mobile-web-app-capable" content="yes">

    <title><?= $page_title; ?></title>
    <meta name="description" content="<?= $page_description; ?>">
    <base href="<?= $site_url; ?>">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <script src='https://js.tito.io/v1' async></script>

</head>
<body>

<header>
    <a href="https://dddeurope.com">
        <img src="<?= $logo; ?>" alt="<?= $page_title; ?>">
    </a>
    <div>
        <h1>Academic Research on Domain-Driven Design</h1>
    </div>
</header>

<div>
<?php include __DIR__.'/../papers.html'?>
</div>

<a name="mailinglist"></a>
<div class="mailinglist">
    <h3>Receive Important Updates</h3>
    <form action="//laracon.us8.list-manage.com/subscribe/post?u=b1d18f05960daf7f80e04b9a2&amp;id=c7acea270f" method="post" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
        <input type="email" value="" name="EMAIL" placeholder="email address" required="">
        <input type="submit" value="Subscribe" name="subscribe" class="button success">
    </form>

</div>


<footer>
    <p>
        <a class="footer-navigation__link" href="mailto:contact@dddeurope.com">Contact us</a>
        |
        <a class="footer-navigation__link" href="https://coc.dddeurope.com">Code of Conduct</a>
        |
        <a class="footer-navigation__link" href="https://training.dddeurope.com/">DDD Training</a>

        <br>
        Editions:
            <a class="footer-navigation__link" href="/2016">2016</a>
            | <a class="footer-navigation__link" href="/2017">2017</a>
            | <a class="footer-navigation__link" href="/2018">2018</a>
            | <a class="footer-navigation__link" href="/2019">2019</a>

    </p>



    <p class="social">
        <small>
            <a href="https://twitter.com/<?= $twitter_handle; ?>">
                <i class="fa fa-twitter-square" aria-hidden="true"></i>
                Twitter
            </a>
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="https://www.youtube.com/c/<?= $youtube_handle; ?>">
                <i class="fa fa-youtube-square" aria-hidden="true"></i>
                YouTube
            </a>
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="https://www.facebook.com/<?= $facebook_handle; ?>">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                Facebook
            </a>
        </small>
    </p>
    <p>
        <em>Copyright 2019 - Human Music B.V. All rights reserved.</em>
    </p>
</footer>

</body>
</html>