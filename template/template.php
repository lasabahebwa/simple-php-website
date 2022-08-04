<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link href="<?php site_url(); ?>/template/style.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
</head>

<body>
    <div class="wrap">

        <header>
            <h1><?php site_name(); ?></h1>
            <nav class="menu">
                <?php nav_menu(); ?>
            </nav>
        </header>

        <article>
            <h2><?php page_title(); ?></h2>
            <?php page_content(); ?>
            <div id="myChart"></div>
        </article>

        <footer>
            <small>&copy;<?php echo date('Y'); ?> <?php site_name(); ?>.<br><?php site_version(); ?></small>
        </footer>

    </div>
    <?php
    include "vendor/autoload.php";

    use ZingChart\PHPWrapper\ZC;

    $zc = new ZC("myChart");
    $zc->setChartType("area");
    $zc->setSeriesData(0, [1, 4, 2, 6, 4]);
    $zc->setTitle("My PHP graph title");
    $zc->render();
    ?>
</body>

</html>