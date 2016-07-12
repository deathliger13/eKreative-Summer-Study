<?php

$topArray = [
    [
        'content' => 'lorem ipsum',
        'title' => 'test',
        'imgUrl' => 'img/layer-2.png'
    ],
    [
        'content' => 'lorem ipsum',
        'title' => 'test',
        'imgUrl' => 'img/layer-2.png'
    ],
];

$test = '22343hgfhfgh';
$a = (int) $test;
echo '<pre>';
var_dump($a);
exit;
?>

<div class="wrapper">
    <ul>
    <?php
    foreach ($topArray as $item) {
        ?>
        <li>
            <div class="title"><?php echo $item['title'];?></div>
            <div class="content"><?php echo $item['content'];?></div>
            <img src="<?php echo $item['imgUrl'];?>" alt="">

        </li>
        <?php
    }
    ?>
    </ul>
</div>
