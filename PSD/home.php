<?php include 'header.php'; ?>
    <div class="backimg">
    <div class="textCenter">
<?php
$homecontent1 = ['img1' => 'PSD/img/layer-2.png'];
$homecontent2 =['img2' => 'img/layer-3.png'];
$homecontent3 =['img3' => 'img/layer-4.png'];
$homecontent4 = [
        'h3' => 'Our News',
        'img4' => 'img/layer-5.png',
        'butt1'=>'Read More'];
$homecontent5 = [
        'img5' => 'img/layer-6.png',
        'butt2' => 'Read More'
    ];
$homecontent6  =[
        'img6' => 'img/layer-7.png',
        'butt3' => 'Read more'
    ];


?>
<?php foreach ($homecontent1 as $hcontent1) { ?>
    <p>Integer at tortor ut magna</p>
    <p>finibus lobortis sed quis tellus.</p>
    <div class="imgContainer1">
        <div class="img1"><img src=<?php echo $hcontent1['img1'] ?>/>
            <?php } ?>

            <p>Tincidunt</p>
            <p class=" txt1">Phasellus arcu justo, ullamcorper non diam sit amet, luctus condimentum metus. Nullam
                tempus egestas efficitur. Sed quam dolor.</p>
        </div>
        <?php foreach ($homecontent2 as $hcontent2) { ?>
        <div class="img2"><img src=<?php echo $hcontent2['img2'] ?>>
            <p>Duis bibendum</p>
            <p class="txt2"> Ut arcu arcu, faucibus eu risus blandit, pulvinar viverra justo. Phasellus arcu justo,
                ullamcorper non diam sit amet, luctus condimentum metus. In hac habitasse platea dictumst. </p>
        </div>
        <?php } ?>
        <?php foreach ($homecontent3 as $hcontent3) { ?>
        <div class="img3"><img src="<?php echo $hcontent3['img3'] ?>">
            <p>Donec ligula</p>
            <p class="txt3">Nullam tempus egestas efficitur. Sed quam dolor, vulputate sed mattis et, sodales quis
                orci. Ut arcu arcu, faucibus eu risus blandit,.</p>
        </div>
        <?php } ?>
    </div>
    <div class="butt1">
        <button class="txtButt">Read more</button>
    </div>
    </div>

    </div>
<?php foreach ($homecontent4 as $hcontent4) { ?>
    <h3 class="oNews"><?php echo $hcontent4['h3'] ?></h3>
    <div class="imgContainer2">
        <div class="imgSquare1"><img src=<?php echo $hcontent4['img4'] ?>/>
            <p>Lore ipsum</p>
            <p class="txtSquare1">Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel,
                pretium lobortis erat.
                Nulla vitae hendrerit odio.</p>
            <button><?php echo $hcontent4['butt1'] ?></button>
        </div>
        <?php }?>
<?php foreach ($homecontent5 as $hcontent5) { ?>
        <div class="imgSquare2"><img src=<?php echo $hcontent5['img5'] ?>/>
            <p>Lore ipsum</p>
            <p class="txtSquare2">Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel,
                pretium lobortis erat.
                Nulla vitae hendrerit odio.</p>
            <button><?php echo $hcontent5['butt2'] ?></button>
        </div>
    <?php } ?>
<?php foreach ($homecontent6 as $hcontent6) { ?>
        <div class="imgSquare3"><img src=<?php echo $hcontent6['img6'] ?>/>
            <p>Lore ipsum</p>
            <p class="txtSquare3">Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel,
                pretium lobortis erat.
                Nulla vitae hendrerit odio.</p>
            <button><?php echo $hcontent6['butt1'] ?></button>

        </div>
<?php } ?>
    </div>

<?php include 'footer.php'; ?>