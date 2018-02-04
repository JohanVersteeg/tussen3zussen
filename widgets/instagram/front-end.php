<div class="about">
    <h4><?php echo esc_attr($title); ?></h4>

    <div id="instagram-widget" class='instagram-photos container-fluid'>
        <script>
        $(function(){
            $("#instagram-widget").load("<?php bloginfo('template_directory');?>/widgets/instagram/request-data.php?username=<?php echo esc_attr($instance['username']) ?>");
        });
        </script>
    </div>
</div>
