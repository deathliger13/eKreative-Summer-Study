<footer class = "footer"/>
<?php
$footerContent = [
    [
        'txt' => 'Facebook',
        'url' => 'https://uk-ua.facebook.com/'
    ],
    [
        'txt' => 'Twitter',
        'url' => 'https://twitter.com/?lang=ru'
    ],
    [
        'txt' => 'Google+',
        'url' => 'plus.google.com'
    ],
    [
        'txt' => 'LinkedIn',
        'url' => 'https://www.linkedin.com/'
    ],
    [
        'txt' => 'Behance',
        'url' => 'https://www.behance.net/'
    ],
    [
        'txt' => 'Dribbble',
        'url' => 'https://dribbble.com/'
    ],
    [
        'txt' => 'GitHub',
        'url' => 'https://github.com/'
    ],

];


?>
<?php foreach ($footerContent as $footer) {?>
<div class="footContent">

<p class="txtfooter"><a href = "<?php echo $footer['url']?>"</a> <?php echo $footer['txt']?></p>

</div>
<?php }?>

</footer>
</div>
</body>

</html>