<div class="container-fluid     ">
<div class="row instagram">
<?php for($i = 1; $i < 7; $i++){
    ?>
    <div class="col-md-2" >
        <img src="<?php bloginfo('template_directory');?>/images/instagram/<?php echo $i; ?>.jpg" />
    </div>
    <?php
}
    ?>
</div>
</div>
<style>
.instagram .row{
    padding: 0;
}

.instagram .col-md-2{
    padding: 0;
}

.instagram img{
    width: 100%;
}
</style>