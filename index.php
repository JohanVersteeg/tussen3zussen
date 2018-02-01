<?php
get_header();
$isItemPage = is_page() || is_single();
?>
</style>
<div class="multiple-items-page <?php if (isFirstPage()) {
    echo "first-post-big";
} else {
    echo "first-post-not-big";
}
?>">
	<div class="row">
		<div class="col-sm-9">
			<?php
if (!have_posts()) {
    echo "<center>Geen items gevonden</center>";
}

if (isFirstPage()) {
    showFirstPosts();
}
echo "<div class='row'><div class='col-sm-6 left'>";
showListWithPosts(isFirstPage());
echo "</div>";
echo "<div class='col-sm-6 right'>";
showListWithPosts(isFirstPage());
echo "</div></div>";
?>
		</div>
		<?php get_sidebar();?>
	</div>
</div>
<div class="paginate-links">
	<?php echo paginate_links($args); ?>
</div>

<?php get_footer();?>

<?php
function showFirstPosts()
{
    $i = 0;
    while (have_posts()) {
        if ($i == 0) {
            showPost(false, $i);
        } else {
            skipPost();
        }
        $i++;
    }
}

function showListWithPosts($skipFirst)
{
    $i = 0;
    while (have_posts()) {
        $even = !($i % 2 == 0);
        if ($i == 0 && $skipFirst) {
            skipPost();
            $i++;
            continue;
        }
        showPost($even, $i);
        $i++;
    }
}

function showPost($even, $i)
{
    echo "<div class='" . ($even ? 'even' : 'odd') . "'>";

    the_post();
    //echo $i;
    get_template_part('content-card', get_post_format());

    echo "</div>";
}

function isFirstPage()
{
    return is_home() && ((get_query_var('paged')) ? get_query_var('paged') : 0) == 0;
}

function skipPost()
{
    the_post();
}
?>