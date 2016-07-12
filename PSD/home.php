<?php include 'header.php'; ?>
    <div class="backimg">
        <div class="textCenter">
            <p>Integer at tortor ut magna</p>
            <p>finibus lobortis sed quis tellus.</p>
            <?php
            $topContent = [
                [
                    'img' => 'PSD/img/layer-2.png',
                    'title' => 'Tincidunt',
                    'txt' => 'Phasellus arcu justo, ullamcorper non diam sit amet, luctus condimentum metus. Nullam
                tempus egestas efficitur. Sed quam dolor.',
                ],
                [
                    'img' => 'img/layer-3.png',
                    'title' => 'Duis bibendum',
                    'txt' => 'Ut arcu arcu, faucibus eu risus blandit, pulvinar viverra justo. Phasellus arcu justo,
                ullamcorper non diam sit amet, luctus condimentum metus. In hac habitasse platea dictumst.',
                ],
                [
                    'img' => 'img/layer-4.png',
                    'title' => 'Donec ligula',
                    'txt' => 'Nullam tempus egestas efficitur. Sed quam dolor, vulputate sed mattis et, sodales quis
                orci. Ut arcu arcu, faucibus eu risus blandit,.',
                ],
            ];

            $newsList = [
                [

                    'img' => 'img/layer-5.png',
                    'title' => 'Lore ipsum',
                    'text' => 'Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel,
                pretium lobortis erat.
                Nulla vitae hendrerit odio.',
                ],
                [
                    'img' => 'img/layer-6.png',
                    'title' => 'Lore ipsum',
                    'text' => 'Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel,
                pretium lobortis erat.
                Nulla vitae hendrerit odio.',
                ],
                [
                    'img' => 'img/layer-7.png',
                    'title' => 'Lore ipsum',
                    'text' => 'Est a elit scelerisque vestibulum. Donec est sem, lobortis sit amet imperdiet vel,
                pretium lobortis erat.
                Nulla vitae hendrerit odio.',
                ],
            ];

            ?>

            <?php foreach ($topContent as $top) { ?>
                <div class="imgContainer1">
                    <div class="img1"><div class="img2"><div class="img3"><img src=<?php echo $top['img']; ?>/>
                        <p><?php echo $top['title']; ?></p>
                        <p class=" txt1"><?php echo $top['txt']; ?></p>
                    </div></div></div>


                </div>
            <?php } ?>
            <div class="butt1">
                <button class="txtButt">Read more</button>
            </div>

        </div>

    </div>


    <h3 class="oNews">Our News</h3>
<?php foreach ($newsList as $news) { ?>
    <div class="imgContainer2">
    <div class="imgSquare1"><img src=<?php echo $news['img']; ?>/>
        <p><?php echo $news['title']; ?></p>
        <p class="txtSquare1"><?php echo $news['text']; ?></p>
        <button>Read More</button>
    </div>


<?php } ?>
    </div>

<?php include 'footer.php'; ?>