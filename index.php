<?php
$data = require 'data.php';
$menu = $data['miscData']['mainMenu'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="font-awesome-3.2.1/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700" rel="stylesheet">
    <link href="flexslider/flexslider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header class="main-header">
    <?php
        $headerData = $data['headerData'];
    ?>
    <div class="navigational-part">
        <nav>
            <ul class="nav-list clearfix">
                <?php foreach ($menu as $item) { ?>
                    <li><a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a></li>
                <?php } ?>
            </ul>
        </nav>
        <h1>
            <a href="<?php echo $headerData['siteLogo']['url']; ?>"><img src="<?php echo $headerData['siteLogo']['src']; ?>" alt="<?php echo $headerData['siteLogo']['alt']; ?>"></a>
        </h1>
        <div class="header-right-side">
            <dl class="social">
                <?php foreach ($headerData['socialLinks'] as $item) { ?>
                    <dt class="<?php echo $item['class']; ?>"></dt>
                    <dd><?php echo $item['count']; ?></dd>
                <?php } ?>
            </dl>
            <a class="primary-btn scale" href="<?php echo $headerData['buttonBuy']['url']; ?>"><?php echo $headerData['buttonBuy']['title']; ?></a>
        </div>
    </div>
    <div class="promotional-part flexslider">
        <ul class="slides">
            <?php foreach ($headerData['slides'] as $slide) { ?>
                <li>
                    <div class="slide <?php echo $slide['position']; ?>-slide">
                        <p><?php echo $slide['textLine1']; ?></p>
                        <p><?php echo $slide['textLine2']; ?></p>
                        <a class="alternative-btn scale" href="<?php echo $slide['url']; ?>"><?php echo $slide['btnTitle']; ?></a>
                        <div class="slider-control">.</div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</header>
<main class="container">
    <section class="members">
        <?php
            $sectionData = $data['membersSectionData'];
        ?>
        <h2 class="section-heading">
            <span><?php echo $sectionData['headingLine1']; ?></span>
            <span><?php echo $sectionData['headingLine2']; ?></span>
        </h2>
        <div class="paginator clearfix">
            <ul class="clearfix">
                <li><a class="icon-angle-left scale" href="#"></a></li>
                <li><a class="icon-angle-right scale" href="#"></a></li>
            </ul>
        </div>
        <ul class="members-list members-slider">
            <?php foreach ($sectionData['membersList'] as $member) { ?>
                <li>
                    <a href="<?php echo $member['profileUrl']; ?>">
                        <img src="<?php echo $member['photo']; ?>" alt="Member - <?php echo $member['name']; ?>, <?php echo $member['job']; ?>">
                        <div class="member-info">
                            <h5><?php echo $member['name']; ?></h5>
                            <span><?php echo $member['job']; ?></span>
                            <dl class="social">
                                <?php foreach ($member['socialData'] as $item) { ?>
                                    <dt class="<?php echo $item['class']; ?>"></dt>
                                    <dd><?php echo $item['count']; ?></dd>
                                <?php } ?>
                            </dl>
                        </div>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </section>
    <div class="clearfix">
        <section class="upcoming-concert">
            <?php
                $sectionData = $data['concertsSectionData'];
            ?>
            <h2 class="section-heading">
                <span><?php echo $sectionData['headingLine1']; ?></span>
                <span><?php echo $sectionData['headingLine2']; ?></span>
            </h2>
            <?php foreach ($sectionData['concerts'] as $concert) { ?>
                <div class="left-side">
                    <img src="<?php echo $concert['poster']; ?>" alt="Concert poster">
                </div>
                <div class="right-side">
                    <h5><?php echo $concert['title']; ?></h5>
                    <table class="concert-info">
                        <?php foreach ($concert['details'] as $key => $detail) { ?>
                            <tr>
                                <td><?php echo $key; ?></td>
                                <td><?php echo $detail; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <a class="alternative-btn scale" href="<?php echo $concert['ticketUrl']; ?>">Purchase Ticket</a>
                </div>
            <?php } ?>
            <div class="slider-control">.</div>
        </section>
        <section class="latest-videos">
            <?php
                $sectionData = $data['latestVideosSectionData'];
            ?>
            <h2 class="section-heading">
                <span><?php echo $sectionData['headingLine1']; ?></span>
                <span><?php echo $sectionData['headingLine2']; ?></span>
            </h2>
            <div class="paginator clearfix">
                <ul class="clearfix">
                    <li><a class="icon-angle-left scale" href="#"></a></li>
                    <li><a class="icon-angle-right scale" href="#"></a></li>
                </ul>
            </div>
            <?php foreach ($sectionData['videos'] as $video) { ?>
                <iframe src="<?php echo $video['url']; ?>"
                    allowfullscreen></iframe>
            <?php } ?>
        </section>
    </div>
    <section class="our-founder clearfix">
        <?php
            $sectionData = $data['ourFounderSectionData'];
        ?>
        <img src="<?php echo $sectionData['imageUrl']; ?>" alt="<?php echo $sectionData['alt']; ?>">
        <div class="info">
            <h2><?php echo $sectionData['heading']; ?></h2>
            <p><?php echo $sectionData['text']; ?></p>
            <a class="primary-btn scale" href="<?php echo $sectionData['btnUrl']; ?>"><?php echo $sectionData['btnText']; ?></a>
        </div>
    </section>
    <div class="clearfix">
        <section class="popular-songs">
            <?php
                $sectionData = $data['popularSongsSectionData'];
            ?>
            <h2 class="section-heading">
                <span><?php echo $sectionData['headingLine1']; ?></span>
                <span><?php echo $sectionData['headingLine2']; ?></span>
            </h2>
            <iframe src="<?php echo $sectionData['playerUrl']; ?>"></iframe>
            <ul class="song-list">
                <?php foreach ($sectionData['songs'] as $key => $song) { ?>
                    <li><a class="scale" href="<?php echo $song['url']; ?>"><?php if (($key + 1) < 10) { echo '0' . ($key + 1) . '. ' . $song['title']; } else { echo ($key + 1) . '. ' . $song['title']; } ?></a></li>
                <?php } ?>
            </ul>
        </section>
        <section class="instagram-feed">
            <?php
                $sectionData = $data['instagramFeedSectionData'];
            ?>
            <h2 class="section-heading">
                <span><?php echo $sectionData['headingLine1']; ?></span>
                <span><?php echo $sectionData['headingLine2']; ?></span>
            </h2>
            <ul>
                <?php foreach ($sectionData['photos'] as $photo) { ?>
                    <li><a href="<?php echo $photo['linkUrl']; ?>"><img src="<?php echo $photo['img']; ?>" alt="<?php echo $photo['alt']; ?>"></a></li>
                <?php } ?>
            </ul>
        </section>
    </div>
    <section class="downloads">
        <?php
            $sectionData = $data['downloadsSectionData'];
        ?>
        <h2><?php echo $sectionData['heading']; ?></h2>
        <p><?php echo $sectionData['text']; ?></p>
        <ul class="clearfix">
            <?php foreach ($sectionData['stores'] as $store) { ?>
                <li>
                    <a class="scale" href="<?php echo $store['link']; ?>"><img src="<?php echo $store['buttonImage']; ?>" alt=""></a>
                </li>
            <?php } ?>
        </ul>
    </section>
    <section class="subscription">
        <form class="subscribe-form clearfix" action="#">
            <input type="email" name="email" placeholder="subscribe newsletter">
            <button class="icon-arrow-right scale" type="submit" name="submit" value="submit">Submit</button>
        </form>
    </section>
</main>
<footer class="main-footer">
    <nav>
        <ul class="nav-list clearfix">
            <?php foreach ($menu as $item) { ?>
                <li><a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a></li>
            <?php } ?>
        </ul>
    </nav>
    <p><?php echo $data['footerData']['copyrightText'];?></p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="flexslider/jquery.flexslider-min.js"></script>
<script src="js/main.js"></script>
</body>
</html>