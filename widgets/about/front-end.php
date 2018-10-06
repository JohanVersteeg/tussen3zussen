<div class="about">

<img src="<?php bloginfo('template_directory');?>/images/samen.png" />

    <h4>Welkom</h4>
    <p>
    <?php echo $instance['about'] ?>
    </p>
<div class="text-center">
    <a href="https://www.tussen3zussen.nl/over-ons/"><img src="<?php bloginfo('template_directory');?>/images/lees-meer.png" class="read-more"/></a>
</div>
    <div class='social-media'>

        <?php
$socialMedia = [
    "youtube",
    "snapchat",
    "instagram",
    "facebook",
    "pinterest",
    "twitter",
];

foreach ($socialMedia as $media) {
    if (!empty($instance[$media])) {
        echo '<a href="' . $instance[$media] . '" target="_blank">';
        echo '<i class="' . $media . ' fa fa-' . $media . '" aria-hidden="true"></i>';
        echo '</a>';
    }
}
?>
<p><br><a class="blsdk-follow" href="https://www.bloglovin.com/blogs/tussen-3-zussen-19621395" target="_blank" data-blsdk-type="button" data-blsdk-counter="false">Follow</a><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s);js.id = id;js.src = "https://www.bloglovin.com/widget/js/loader.js?v=1";fjs.parentNode.insertBefore(js, fjs);}(document, "script", "bloglovin-sdk"))</script></p>
    </div>
</div>