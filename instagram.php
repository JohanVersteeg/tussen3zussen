<div class="container-fluid instagram-photos">
    <div class="row">
        <div class="title left"></div>
        <div class="photoroll">
            <?php for($i = 1; $i < 7; $i++) { ?>
                
                <div class="col-sm-2" >
                    <img src="<?php bloginfo('template_directory');?>/images/instagram/<?php echo $i; ?>.jpg" />
                    <div class="shadow"></div>
                </div>
            <?php } ?>    
        </div>
        <div class="title right"></div>
    </div>
</div>

