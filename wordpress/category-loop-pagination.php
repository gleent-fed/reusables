<div id="article-list">
<ul>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;                           
query_posts( 'post_type=documents&category_name=by-customers&paged='.$paged );
query_posts( 'post_type=post&category_name=by-customers&paged='.$paged );						   
//query_posts( 'post_type=documents&paged='.$paged );
//query_posts( 'post_type=post&paged='.$paged );
if (have_posts()) : while (have_posts()) : the_post(); ?>

<li>
    <h3><?php the_title(); ?></h3>
    <?php the_excerpt();  ?>
</li>

<?php endwhile; ?>
<?php woo_pagenav(); ?>
<?php endif; wp_reset_query(); ?>
</ul>
</div>