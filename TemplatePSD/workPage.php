<?php include 'header.php'; ?>
<?php
$workContent = [
    ['button' => 'ALL'],
    ['button' => 'WEB'],
    ['button' => 'APPS'],
    ['button' => 'ICONS'],
];
$workIMG = [
    [
        'img' => 'img/iso.png',
        'text' => 'Isometric Perspective Mock-Up'
    ],
    [
        'img' => 'img/time.png',
        'text' => 'Time Zone App UI'
    ],
    [
        'img' => 'img/viro.png',
        'text' => 'Viro Media Players UI'
    ],
    [
        'img' => 'img/blog.png',
        'text' => 'Blog / Magazine Flat UI Kit'
    ],
]
?>

<div class="workBody">
    <div class="workContent">
        <h2 class="workHeader">OUR PORTFOLIO</h2>
        <p class="workTxt">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
            consectetur, adipisci velit, sed quia non numquam</p>

            <div class="workBtn">
                <?php foreach ($workContent as $work) { ?>
                <button class = "forbutt"><?php echo $work['button'] ?></button>
                <?php } ?>
            </div>

        <?php foreach ($workIMG as $workI) { ?>
            <div class="workImg">
                <img src="<?php echo $workI['img'] ?>" alt="404" class="working">
            </div>
            <p class="imgTxt"><?php echo $workI['text'] ?></p>
        <?php } ?>
        <button class  = "Load">LOAD MORE PROJECTS</button>
    </div>
</div>
<p></p>

<?php include 'footer.php.'; ?>
