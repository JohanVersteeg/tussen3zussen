<?php
$profile_url = "https://www.instagram.com/" . $_GET['username'];
$html = file_get_contents($profile_url);

$startText = "window._sharedData = ";

$start = strpos($html, $startText) + strlen($startText);
$end = strpos($html, ";</script>", $start);

$json = json_decode(substr($html, $start, $end - $start));

for ($i = 0; $i < 6; $i++) {
    $mediaItem = $json->entry_data->ProfilePage[0]->user->media->nodes[$i];
    ?>

<div class="col-xs-6">
    <div style='position: relative; overflow: hidden;'>
    <img src="<?php echo $mediaItem->thumbnail_src ?>" />
    <div class="shadow" onclick="document.location.href = '<?php echo "https://www.instagram.com/p/" . $mediaItem->code; ?>';">
        <span class="media-information">
            <span class="likes">
                <i class="fa fa-heart" aria-hidden="true"></i>
                <span class="number"> <?php echo $mediaItem->likes->count; ?> </span>
            </span>
            <span class="comments">
                <i class="fa fa-comment" aria-hidden="true"></i>
                <span class="number"> <?php echo $mediaItem->comments->count; ?> </span>
            </span>
        </span>
        </div></div>
</div>

<?php
}
?>

<!--<div class="row">
            <div class="col-xs-6"><img src="<?php bloginfo('template_directory');?>/images/instagram/1.jpg"/></div>
            <div class="col-xs-6"><img src="<?php bloginfo('template_directory');?>/images/instagram/2.jpg"/></div>
        </div>
        <div class="row">
            <div class="col-xs-6"><img src="<?php bloginfo('template_directory');?>/images/instagram/3.jpg"/></div>
            <div class="col-xs-6"><img src="<?php bloginfo('template_directory');?>/images/instagram/4.jpg"/></div>
        </div>
        <div class="row">
            <div class="col-xs-6"><img src="<?php bloginfo('template_directory');?>/images/instagram/5.jpg"/></div>
            <div class="col-xs-6"><img src="<?php bloginfo('template_directory');?>/images/instagram/6.jpg"/></div>
        </div>-->