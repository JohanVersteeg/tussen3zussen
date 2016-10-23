<div class="about">
    <?php 
        echo get_avatar(get_the_author_meta( 'ID' ), 200); 
    ?>
    <h4>Welkom</h4>
    <p>
    <?php 
        the_author_meta( 'description' ); 
    ?> 
    </p>

    <div class='social-media'>

        <?php
            $socialMedia = [
                "youtube",
                "snapchat",
                "instagram",
                "facebook",
                "pinterest",
                "twitter"        
            ];

            foreach($socialMedia as $media){
                if(!empty($instance[$media])){
                    echo '<a href="'.$instance[$media].'" target="_blank">';
                    echo '<i class="'.$media.' fa fa-'.$media.'" aria-hidden="true"></i>';
                    echo '</a>';
                }
            }
        ?>   
    </div>
</div>