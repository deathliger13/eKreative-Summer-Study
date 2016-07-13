<!Doctype html>
<html lang="en">
<?php
$data = [
   'logo' => 'img/logo.png',
    'menu' => [
        ['title' => 'Home',
        'url' => 'index.php'],
    [
        'title' => 'About',
        'url' => 'aboutPage.php'],
    [
        'title' => 'Work',
        'url' => 'workPage.php'],
    [
        'title' => 'Blog',
        'url' => 'blogPage.php'],
    [
        'title' => 'Contact',
        'url' => 'contactPage.php']
],
];
?>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link type="text/css" rel="stylesheet" href="normalize.css"/>
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,700,600,300,300italic,600italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <div class="headerPortfolio">
        <div>
        <img class="logo" src = <?php echo $data['logo'];?> alt = "404"/>
        </div>
        <div>
            <ul class="list">

                <?php foreach ( $data['menu'] as $menuItem){?>
                    <li><a href  = "<?php echo $menuItem['url'];?>"><?php echo $menuItem['title'];?></a></li>
                <?php }?>


            </ul>
            <?php ?>
        </div>
    </div>
</header>

