<?php include 'header.php'; ?>
    <div class="backimg">
    <div class="textCenter">
<?php
$homecontent = [
    [
        'img1' => 'PSD/img/layer-2.png',
    ],
    [
        'img2' => 'img/layer-3.png',

    ],
    [
        'img3' => 'img/layer-4.png',
    ],
    [
        'h3' => 'Our News',
        'img4' => 'img/layer-5.png',
        'butt1'=>'Read More'
    ],
    [
        'img5' => 'img/layer-6.png',
        'butt2' => 'Read More'
    ],
    [
        'img6' => 'imf/layer-7.png',
        'butt3' => 'Read more'
    ]
];

?>
<?php foreach ($homecontent as $hcontent) { ?>
    <p>Integer at tortor ut magna</p>
    <p>finibus lobortis sed quis tellus.</p>
    <div class="imgContainer1">
        <div class="img1"><img src=<?php echo $hcontent['img1'] ?>/>


            <p>Tincidunt</p>
            <p class=" txt1">Phasellus arcu justo, ullamcorper non diam sit amet, luctus condimentum metus. Nullam
                tempus egestas efficitur. Sed quam dolor.</p>
        </div>
        <div class="img2"><img src=<?php echo $hcontent['img2'] ?>>
            <p>Duis bibendum</p>
            <p class="txt2"> Ut arcu arcu, faucibus eu risus blandit, pulvinar viverra justo. Phasellus arcu justo,
                ullamcorper non diam sit amet, luctus condimentum metus. In hac habitasse platea dictumst. </p>
        </div>
        <div class="img3"><img src="<?php echo $hcontent['img3'] ?>">
            <p>Donec ligula</p>
            <p class="txt3">Nullam tempus egestas efficitur. Sed quam dolor, vulputate sed mattis et, sodales quis
                orci. Ut arcu arcu, faucibus eu risus blandit,.</p>
        </div>
    </div>
    <div class="butt1">
        <button class="txtButt">Read more</button>
    </div>
    </div>

    </div>
    <h3 class="oNews"><?php echo $hcontent['h3'] ?></h3>
    <div class="imgContainer2">
        <div class="imgSquare1"><img src=<?php echo $hcontent['img4'] ?>/>
            <p>Lore ipsum</p>
            <p class="txtSquare1">Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel,
                pretium lobortis erat.
                Nulla vitae hendrerit odio.</p>
            <button><?php echo $hcontent['butt1'] ?></button>
        </div>
        <div class="imgSquare2"><img src=<?php echo $hcontent['img5'] ?>/>
            <p>Lore ipsum</p>
            <p class="txtSquare2">Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel,
                pretium lobortis erat.
                Nulla vitae hendrerit odio.</p>
            <button><?php echo $hcontent['butt2'] ?></button>
        </div>
        <div class="imgSquare3"><img src=<?php echo $hcontent['img6'] ?>/>
            <p>Lore ipsum</p>
            <p class="txtSquare3">Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel,
                pretium lobortis erat.
                Nulla vitae hendrerit odio.</p>
            <button><?php echo $hcontent['butt1'] ?></button>

        </div>
    </div>
<?php } ?>
<?php include 'footer.php'; ?>