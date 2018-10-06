<?php
//header('Content-Type: application/json');
$profile_url = "https://www.instagram.com/" . $_GET['username'];
$html = file_get_contents($profile_url);

$startText = "window._sharedData = ";

$start = strpos($html, $startText) + strlen($startText);
$end = strpos($html, ";</script>", $start);

$json = json_decode(substr($html, $start, $end - $start));
//echo json_encode($json->entry_data->ProfilePage[0]->graphql->user->edge_owner_to_timeline_media->edges);
//die;

for ($i = 0; $i < 6; $i++) {
    $mediaItem = $json->entry_data->ProfilePage[0]->graphql->user->edge_owner_to_timeline_media->edges[$i]->node;
    ?>

<div class="col-xs-6">
    <div style='position: relative; overflow: hidden;'>
    <img src="<?php echo $mediaItem->thumbnail_resources[0]->src ?>" />
    <div class="shadow" onclick="document.location.href = '<?php echo "https://www.instagram.com/p/" . $mediaItem->shortcode; ?>';">
        <span class="media-information">
            <span class="likes">
                <i class="fa fa-heart" aria-hidden="true"></i>
                <span class="number"> <?php echo $mediaItem->edge_liked_by->count; ?> </span>
            </span>
            <span class="comments">
                <i class="fa fa-comment" aria-hidden="true"></i>
                <span class="number"> <?php echo $mediaItem->edge_media_to_comment->count; ?> </span>
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