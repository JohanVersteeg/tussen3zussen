<div class="about">

<img src="<?php bloginfo('template_directory');?>/images/samen.png" />

    <h4>Welkom</h4>
    <p>

    Wij zijn drie zussen. In dit stukje kun je lezen dat we een blog hebben. Leuk he. Wil je weten wie ze zijn? lees hier meer over ons.
    </p>

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