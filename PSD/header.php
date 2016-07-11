<!DOCTYPE html>
<html lang="en">
<?php
$headerPanakeia = [
    'link1' => 'Fusce at',
    'link2' => 'Facilisis',
    'link3' => 'Ante donec',
    'link4' => 'Blandit rhoncus',
    'link5' => 'Placerat'
];
?>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <div class="containerPanakeia">
        <div>

            <p class="logoPanakeia">Panakeia</p>
            <p class=" logoFree">Free PSD template</p>
        </div>
        <div>
            <ul class="list">
                <?php
                foreach ($headerPanakeia as $header){
                ?>
                <li><a><?php echo "$header"?></a></li>
                <?php }?>
                <!--  <li><a href="#">Fusce at</a></li>
                  <li><a href="#">Facilisis</a></li>
                  <li><a href="#">Ante donec</a></li>
                  <li><a href="#">Blandit rhoncus</a></li>
                  <li><a href="#">Placerat</a></li> -->
            </ul>
        </div>
    </div>
</header>