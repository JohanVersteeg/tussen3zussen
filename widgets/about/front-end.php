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
    </div>
</div>