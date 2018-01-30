
    <div class="blog-post" onclick="document.location.href = '<?php echo get_permalink() ?>';">
        <div class=read-more-placeholder>
            <div class="card-thumbnail">
                <?php echo get_the_post_thumbnail(null,'large'); ?>  
            </div>
            <div class="card-information">
                <h2 class="title"><?php the_title(); ?></h2>
                <p class="date"><?php the_date(); ?></p>
                <hr />
                <div class="text"> 
                    <?php the_content("", true); ?> 
                </div>
                <div class="lees-meer">
                    <img src="<?php bloginfo('template_directory');?>/images/lees-meer.png" />
                </div>            
                <hr />            
            </div>
        </div>
        <?php include("post-social-media.php") ?>
    </div>