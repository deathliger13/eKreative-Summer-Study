<?php include 'header.php'; ?>
<?php
$blogContent = [
    [
        'img' => 'img/web.png',
        'text' => 'Web Design'
    ],
    [
        'img' => 'img/htmlCss.png',
        'text' => 'HTML / CSS'

    ],
    [
        'img' => 'img/graphic.png',
        'text' => 'GRAPHIC DESIGN'
    ],
    [
        'img' => 'img/ui.png',
        'text' => 'UI / UX'
    ],
];
?>
<div class="blogBody">
    <div class="blogContent">
        <h2 class="blogHeader">WE GOT SKILLS!</h2>
        <p class="blogTxt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="blCon">
        <?php foreach ($blogContent as $blog) { ?>
        <div class="blogContainer">
            <img src="<?php echo $blog['img'] ?>" alt="404" class="imgBod"/>
            <p class="blogHeader3"><?php echo $blog['text'] ?></p>
        </div>

        <?php }?>
        </div>
    </div>

</div>


<?php include 'footer.php'; ?>
