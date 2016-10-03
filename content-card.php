<div class="col-sm-6" style="float: left;">
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
<style>
    .blog-post{
        
        padding: 0px;
        border: solid 2px #f4f4f4;
        padding: 10px;
        /*-webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.25);
        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.25);
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.25);*/
        margin-bottom: 20px;    
        cursor: pointer;
        background-color: white;
    }

    .col-sm-9 {
        padding:0;
    }
.blog-post .card-thumbnail{
    background: #FFEAF1;
}
.blog-post:hover .card-thumbnail img{
    opacity: 0.1;
}

    .blog-post .card-thumbnail img {
        width:100%;
        height: auto;
        max-height: 200px;
    }

    .blog-post .card-information{
        padding:5px;
        font-size:15px;
    }

    .blog-post .card-information .title {
        margin-top: 3px;
        font-size: 23px;
        text-align: center;
    }

    .blog-post .card-information .date {    
        font-size: 18px;
        text-align: center;
    }

    .blog-post .card-information hr{
        border-top: solid 2px #f4f4f4;
    }
    
    .blog-post .card-information .text > * {
        text-align:left !important;
    }
    .blog-post .card-information .text img, .blog-post .card-information .text .separator{
        display:none;
    }
</style>