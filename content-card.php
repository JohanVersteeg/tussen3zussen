<div class="col-sm-6">
    <div class="blog-post">
        <div class="card-thumbnail">
            <?php echo get_the_post_thumbnail(null); ?>  
        </div>
        <div class="card-information">
            <h2 class="title"><?php the_title(); ?></h2>
            <p class="date"><?php the_date(); ?></p>
            <hr />
            <div class="text"> 
                <?php the_content(null, true); ?> 
            </div>
        </div>
    </div>
</div>