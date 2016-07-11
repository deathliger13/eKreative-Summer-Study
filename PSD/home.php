<?php include 'header.php'; ?>
    <div class="backimg">
        <div class="textCenter">
            <?php
            $topContent = [
                [
                    'img1' => 'PSD/img/layer-2.png',
                    'title1' => 'Tincidunt',
                    'txt1' => 'Phasellus arcu justo, ullamcorper non diam sit amet, luctus condimentum metus. Nullam
                tempus egestas efficitur. Sed quam dolor.',
                ],
                [
                    'img2' => 'img/layer-3.png',
                    'title2' => 'Duis bibendum',
                    'txt2' => 'Ut arcu arcu, faucibus eu risus blandit, pulvinar viverra justo. Phasellus arcu justo,
                ullamcorper non diam sit amet, luctus condimentum metus. In hac habitasse platea dictumst.',
                ],
                [
                    'img3' => 'img/layer-4.png',
                    'title3' => 'Donec ligula',
                    'txt3' => 'Nullam tempus egestas efficitur. Sed quam dolor, vulputate sed mattis et, sodales quis
                orci. Ut arcu arcu, faucibus eu risus blandit,.',
                ],
            ];

            $newsList = [
                [
                    'h3' => 'Our News',
                    'img1' => 'img/layer-5.png',
                    'title1' => 'Lore ipsum',
                    'text1' => 'Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel,
                pretium lobortis erat.
                Nulla vitae hendrerit odio.',
                ],
                [
                    'img1' => 'img/layer-6.png',
                    'title2' => 'Lore ipsum',
                    'text3' => 'Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel,
                pretium lobortis erat.
                Nulla vitae hendrerit odio.',
                ],
                [
                    'img1' => 'img/layer-7.png',
                    'title2' => 'Lore ipsum',
                    'text3' => 'Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel,
                pretium lobortis erat.
                Nulla vitae hendrerit odio.',
                ],
            ];

            ?>
            <?php foreach ($topContent as $top) { ?>
            <?php echo $top ?>
            <p>Integer at tortor ut magna</p>
            <p>finibus lobortis sed quis tellus.</p>
            <div class="imgContainer1">
                <div class="img1"><img src=<?php echo $top['img1'] ?>/>


                    <p><?php echo $top['title1'] ?></p>
                    <p class=" txt1"><?php echo $top['txt1'] ?></p>
                </div>


                <div class="img2"><img src=<?php echo $top['img2'] ?>/>
                    <p><?php echo $top['title2'] ?></p>
                    <p class="txt2"> <?php echo $top['txt3'] ?> </p>
                </div>


                <div class="img3"><img src="<?php echo $top['img3'] ?>">
                    <p><?php echo $top['title3'] ?></p>
                    <p class="txt3"><?php echo $top['txt3'] ?></p>
                </div>
                <?php } ?>
            </div>
            <div class="butt1">
                <button class="txtButt">Read more</button>
            </div>
        </div>

    </div>
<?php foreach ($newsList as $news) { ?>
    <h3 class="oNews"><?php echo $news['h3'] ?></h3>
    <div class="imgContainer2">
    <div class="imgSquare1"><img src=<?php echo $news['img1'] ?>/>
        <p><?php echo $news['title1'] ?></p>
        <p class="txtSquare1"><?php echo $news['txt1'] ?></p>
        <button>Read More</button>
    </div>


    <div class="imgSquare2"><img src=<?php echo $news['img2'] ?>/>
        <p><?php echo $news['title2'] ?></p>
        <p class="txtSquare1"><?php echo $news['txt2'] ?></p>
        <button>Read More</button>
    </div>


    <div class="imgSquare3"><img src=<?php echo $news['img3'] ?>/>
        <p><?php echo $news['title3'] ?></p>
        <p class="txtSquare1"><?php echo $news['txt3'] ?></p>
        <button>Read More</button>

    </div>
<?php } ?>
    </div>

<?php include 'footer.php'; ?>