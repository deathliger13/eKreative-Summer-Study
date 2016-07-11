<?php include 'header.php'; ?>
<div class="backimg">
<div class="textCenter">
    <?php
    $homecontent = [
        ['txt1' => 'Integer at tortor ut magna',
         'txt2' => 'finibus lobortis sed quis tellus.',
        ],

        [
            'img1' => 'PSD/img/layer-2.png',
            'txt3' => 'Tincidunt',
            'txt4' => 'Phasellus arcu justo, ullamcorper non diam sit amet, luctus condimentum metus. Nullam
                tempus egestas efficitur. Sed quam dolor.'
        ],
    [
        'img2' => 'img/layer-3.png',
        'txt5' => 'Duis bibendum',
        'txt6' => 'Ut arcu arcu, faucibus eu risus blandit, pulvinar viverra justo. Phasellus arcu justo,
                ullamcorper non diam sit amet, luctus condimentum metus. In hac habitasse platea dictumst.'
        ],
        [
            'img3' => 'img/layer-4.png',
        ]
    ];

    ?>
    <?php foreach ($homecontent as $hcontent) {?>
    <p><?php echo $hcontent['txt1']?></p>
    <p><?php echo $hcontent['txt2']?></p>
    <div class="imgContainer1">
        <div class="img1"><img src=<?php echo $hcontent['img1']?>/>


            <p><?php echo $hcontent['txt3']?></p>
            <p class=" txt1"><?php echo $hcontent['txt4']?></p>
        </div>
        <div class="img2"><img src=<?php echo $hcontent['img2']?>>
            <p><?php echo $hcontent['txt5']?></p>
            <p class="txt2"> <?php echo $hcontent['txt6']?> </p>
        </div>
        <div class="img3"><img src="<?php echo $hcontent['img3']?>">
            <p>Donec ligula</p>
            <p class="txt3">Nullam tempus egestas efficitur. Sed quam dolor, vulputate sed mattis et, sodales quis
                orci. Ut arcu arcu, faucibus eu risus blandit,.</p>
        </div><?php } ?>
    </div>
    <div class="butt1">
        <button class="txtButt">Read more</button>
    </div>
</div>

</div>
<h3 class="oNews">Our News</h3>
<div class="imgContainer2">
    <div class="imgSquare1"><img src="img/layer-5.png"/>
        <p>Lore ipsum</p>
        <p class="txtSquare1">Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel, pretium lobortis erat.
            Nulla vitae hendrerit odio.</p>
        <button>Read More</button>
    </div>
    <div class="imgSquare2"><img src="img/layer-6.png"/>
        <p>Lore ipsum</p>
        <p class = "txtSquare2">Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel, pretium lobortis erat.
            Nulla vitae hendrerit odio.</p>
        <button>Read More</button>
    </div>
    <div class="imgSquare3"><img src="img/layer-7.png"/>
        <p>Lore ipsum</p>
        <p class="txtSquare3">Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel, pretium lobortis erat.
            Nulla vitae hendrerit odio.</p>
        <button>Read More</button>

    </div>
</div>
<?php include 'footer.php'; ?>