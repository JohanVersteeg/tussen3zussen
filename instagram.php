<div class="container-fluid instagram-photos">
    <div class="row">
        <div class="title left" onclick="document.location.href = 'https://www.instagram.com/girlonthewhitebike';"></div>
        <div class="photoroll">
            <?php
                $json = file_get_contents("https://www.instagram.com/girlonthewhitebike/media/");
                $media = json_decode($json);
                for($i = 0; $i < 6; $i++) 
                {
                    $mediaItem = $media->items[$i];
            ?>
                
                <div class="col-xs-4 col-sm-2 photo-<?php echo $i ?>">
                    <img src="<?php echo $mediaItem->images->low_resolution->url ?>" />
                    <div class="shadow" onclick="document.location.href = '<?php echo $mediaItem->link; ?>';">
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
                    </div>
                </div>

            <?php 
                } 
            ?>    
        </div>
        <div class="title right" onclick="document.location.href = 'https://www.instagram.com/girlonthewhitebike';"></div>
    </div>
</div>

