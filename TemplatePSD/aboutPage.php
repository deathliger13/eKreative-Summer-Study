<?php include 'header.php'; ?>
<?php
$aboutContent = [
    [
        'img' => 'img/flag.png',
        'title' => 'Branding',
        'text' => 'Lorem ipsum dolor sit amet,
                   consectetuer adipiscing elit, sed diam nonummy nibh.'
    ],
    [
        'img' => 'img/pencil.png',
        'title' => 'Design',
        'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem.'

    ],
    [
        'img' => 'img/wheelee.png',
        'title' => 'Development',
        'text' => 'At vero eos et accusamus et iusto odio dignissimos qui blanditiis praesentium.'
    ],
    [
        'img' => 'img/rocket.png',
        'title' => 'Rocket Science',
        'text' => 'At vero eos et accusamus et iusto odio dignissimos qui blanditiis praesentium.'
    ],
];
?>
<div class="aboutBody">
    <div class="aboutContent">
        <h2 class="aboutHeader">Services We Provide</h2>
        <p class="aboutTxt">We are working with both individuals and businesses from all over the globe
            to create awesome websites and applications.
        </p>
        <div class="Container">
            <?php foreach ($aboutContent as $about) { ?>
            <div class="blockCon">
                    <img src="<?php echo $about['img'] ?>" alt="404" class="imgCon"/>
                    <h3 class="conHeader"><?php echo $about['title'] ?></h3>
                    <p class="conTxt"><?php echo $about['text'] ?></p>

            </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
