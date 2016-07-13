<footer class = "footer"/>
<?php
$footerContent = [
    [
        'txt' => 'Facebook',
        'url' => 'facebook.com'
    ],
    [
        'txt' => 'Twitter',
        'url' => 'twitter.com'
    ],
    [
        'txt' => 'Google+',
        'url' => 'plus.google.com'
    ],
    [
        'txt' => 'LinkedIn',
        'url' => 'linkedin.com'
    ],
    [
        'txt' => 'Behance',
        'url' => 'behance.net'
    ],
    [
        'txt' => 'Dribbble',
        'url' => 'dribbble.com'
    ],
    [
        'txt' => 'GitHub',
        'url' => 'github.com'
    ],

];


?>
<?php foreach ($footerContent as $footer) {?>
<div class="footContent">

<p class="txtfooter"><a href = "<?php echo $footer['url']?>"</a> <?php echo $footer['txt']?></p>

</div>
<?php }?>

</footer>
</body>

</html>