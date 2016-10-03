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
<style>
.instagram-photos{
    background: #ffe7eb;
    padding: 10px 0px;
    -webkit-box-shadow: 0 -1px 6px -6px rgba(0,0,0,0.1);
    -moz-box-shadow: 0 -1px 6px -6px rgba(0,0,0,0.1);
    box-shadow: 0 -1px 6px 0 rgba(0,0,0,0.1);
}

.instagram-photos .row{
    padding: 10px 60px;
    border-top: 10px dotted white;
    border-bottom: 10px dotted white;
    margin:0;
    position: relative;    
}
.instagram-photos .col-sm-2{
    padding-left: 3px;
    padding-right: 3px;
}

.instagram-photos img{
    width: 100%;
}

.instagram-photos .title{
    display: block;
    position: absolute;
    top:10px;
    width: 40px;
    bottom:20px;
    background: url("<?php bloginfo('template_directory');?>/images/instagram/logo.png");
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
}

.instagram-photos .title.left{
    left: 10px;
}

.instagram-photos .title.right{
    right: 10px;
}

.shadow {
    position: absolute;
    height: 100%;
    -webkit-box-shadow: inset 0px 0px 70px 0px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: inset 0px 0px 70px 0px rgba(0, 0, 0, 0.15);
    box-shadow: inset 0px 0px 70px 0px rgba(0, 0, 0, 0.15);
    top: 0;
    right: 3px;
    left: 3px;
}
</style>

