<?php include 'header.php'; ?>
<div class="index-content">

    <div class="background">
        <div class="container-1">
        <div class="txt">
            <p class="noty-title">Notify</p>
            <p class="noty-txt">A great new free psd theme to showcase your new application. </p>
            <div class="noty">
                <figure class="round-a">
                    <img src="img/apple.png" alt="404" class="apple">
                </figure>
                <figure class="round-an">
                    <img src="img/android.png" alt="404" class="android">
                </figure>
                <figure class="round-w">
                    <img src="img/windows.png" alt="404" class="windows">
                </figure>
            </div>
        </div>
        </div>

    </div>
    <div class="container-2">
    <div class="content-1 clearfix">
        <div class="c-1">
            <img src="img/wheelee.png" alt="404">
            <h3>Editable Theme</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla fringilla.</p>
        </div>
        <div class="c-1">
            <img src="img/star.png" alt="">
            <h3>Flat Design</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla fringilla.</p>
        </div>
        <div class="c-1">
            <img src="img/earth.png" alt="">
            <h3>Reach Your Audience</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla fringilla.</p>
        </div>
    </div>
    </div>

    <div class="content-2 clearfix">
        <div class="container-3">
        <div class="c-2">
            <h3>Get Notified Of Any Updates!</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla fringilla nisl congue
                congue. Maecenas nec condimentum libero, at elementum mauris. Phasellus eget nisi dapibus, ultricies
                nisl at, hendrerit risusuis ornare luctus id sollicitudin ante lobortis at.
            </p>
            <input type="text" name="Email" id="1">
            <button>Notify</button>
        </div>
        <div class="player">
            <iframe width="545" height="361" src="https://www.youtube.com/embed/AHsdQPjMMNk" frameborder="0"
                    allowfullscreen></iframe>
        </div>
        </div>
    </div>

    <div class="content-3">
        <div class="container-4">
            <p class="c3-txt">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum velit vitae
                nulla molestie eu commodo nulla dapib us. Donec id sollicitudin urna. Integer at dui ac leo fermentum
                varius eleifend ut.”
        </p>
        <div class="c-3">
            <h4>Jane Hut</h4>
            <?php
            $img = [
                ['img' => 'img/img.png'],
                ['img' => 'img/img-1.png'],
                ['img' => 'img/img-2.png'],
                ['img' => 'img/img-3.png'],
                ['img' => 'img/img-4.png'],
                ['img' => 'img/img-5.png'],
                ['img' => 'img/img-6.png'],
                ['img' => 'img/img-7.png'],
                ['img' => 'img/img-8.png'],
                ['img' => 'img/img-9.png'],
                ['img' => 'img/img-10.png'],
                ['img' => 'img/img-11.png'],
                ['img' => 'img/img-12.png'],
                ['img' => 'img/img-13.png'],
                ['img' => 'img/img-14.png'],
                ['img' => 'img/img-15.png'],
                ['img' => 'img/img-16.png'],
                ['img' => 'img/img-17.png'],
                ['img' => 'img/img-18.png'],
                ['img' => 'img/img-19.png'],
                ['img' => 'img/img-20.png'],

            ]
            ?>
            <?php foreach ($img as $image) { ?>
                <img src="<?php echo $image['img'] ?>" alt="404" class="images">
            <?php } ?>
        </div>

        <div class="c-4">
            <h3>Say Hi & Get in Touch</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit suspendisse. </p>
            <div class="img-social">
                <?php
                $social = [
                    ['img' => 'img/twitter.png'],
                    ['img' => 'img/facebook.png'],
                    ['img' => 'img/p.png'],
                    ['img' => 'img/google+.png'],
                    ['img' => 'img/linked.png'],
                    ['img' => 'img/youtube.png'],
                ]
                ?>
                <?php foreach ($social as $soc) { ?>
                    <figure class="soc">
                        <img src="<?php echo $soc['img'] ?>" alt="404" class="social">
                    </figure>
                <?php } ?>
            </div>
        </div>
        </div>
</div>

<?php include 'footer.php'; ?>
