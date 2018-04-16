<p>
    <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:');?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />

    <label for="<?php echo $this->get_field_id('about'); ?>"><?php _e('About:');?></label>
    <textarea class="widefat" id="<?php echo $this->get_field_id('about'); ?>" name="<?php echo $this->get_field_name('about'); ?>"><?php echo esc_attr($about); ?></textarea>

<br /><br />
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
    echo "<label for=' . $this->get_field_id( $media ) .'>" . _e(ucfirst($media . ' link') . ":") . "</label>";
    echo "<input class='widefat' id='" . $this->get_field_id($media) . "' name='" . $this->get_field_name($media) . "' type='text' value='" . esc_attr($instance[$media]) . "' />";
}
?>
</p>
