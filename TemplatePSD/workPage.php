<?php include 'header.php'; ?>
<?php
$workContent = [
    ['button' => 'ALL'],
    ['button' => 'WEB'],
    ['button' => 'APPS'],
    ['button' => 'ICONS'],
];
$workIMG1 = [
    [
        'img' => 'img/iso.png',
        'text' => 'Isometric Perspective Mock-Up'
    ],
    [
        'img' => 'img/time.png',
        'text' => 'Time Zone App UI'
    ]];
$workIMG2 = [
    [
        'img' => 'img/viro.png',
        'text' => 'Viro Media Players UI'
    ],
    [
        'img' => 'img/blog.png',
        'text' => 'Blog / Magazine Flat UI Kit'
    ],
];
?>

<div class="workBody">
    <div class="workContent">
        <h2 class="workHeader">OUR PORTFOLIO</h2>
        <p class="workTxt">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
            consectetur, adipisci velit, sed quia non numquam</p>

        <div class="workBtn">
            <?php foreach ($workContent as $work) { ?>
                <button class="forbutt"><?php echo $work['button'] ?></button>
            <?php } ?>
        </div>

        <?php foreach ($workIMG1 as $workI1) { ?>
            <div class="workImg1">
                <img src="<?php echo $workI1['img'] ?>" alt="404" class="working1">
                <p class="imgTxt"><?php echo $workI1['text'] ?></p>
            </div>

        <?php } ?>

        <?php foreach ($workIMG2 as $workI2) { ?>
            <div class="workImg2">
                <img src="<?php echo $workI2['img'] ?>" alt="404" class="working2">
                <p class="imgTxt"><?php echo $workI2['text'] ?></p>
            </div>

        <?php } ?>
        <button class="Load">LOAD MORE PROJECTS</button>

    </div>


</div>
<?php include 'footer.php'; ?>
