<?php
get_header();

$category = get_queried_object();
$term_id = $category->term_taxonomy_id;

function breadcrumb($category)
{
    echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';
    echo "  /  ";
    echo $category->name;
}
?>
<div class="mt-20 pb-20 px-5 lg:px-10 xl:px-40 max-w-8xl m-auto">
    <div class="pb-20 border-b  border-solid  border-gray">
        <h1 class="font-Montserrat text-5xl text-primary font-bold">Training Lorem ipsum dolor sit amet vitae.</h1>
        <p class="text-lg text-text mt-5 lg:w-2/3 font-Roboto">Lorem ipsum dolor sit amet consectetur. Lectus et faucibus sagittis non consectetur adipiscing. Sit tellus lectus est non ut adipiscing.</p>
    </div>
    <div class="flex justify-between font-Roboto">
        <div class="breadcrumb text-text text-lg font-bold"><?php breadcrumb($category); ?></div>
        <span class="text-text flex">
            <p>Showing all <b>5 Results</b> </p>
            <img class="ml-3" src="<?php echo get_template_directory_uri() ?>/src/images/order.svg" alt="">
        </span>

    </div>
</div>

<?php

// The Query
$args = array(
    'post_type' => 'products',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'product_category',
            'field' => 'term_id',
            'terms' => $term_id,
        )
    ),
);
$the_query = new WP_Query($args);
?>
<section class="font-Roboto" style="background:url(<?php echo get_stylesheet_directory_uri() ?>/src/images/Group473.svg); background-size: cover; background-repeat: no-repeat; ">
    <div class="px-5 lg:px-10 xl:px-40 max-w-8xl m-auto">
        <div class="">
            <div id="products-card" class="flex flex-row w-full flex-wrap justify-center">
                <?php
                // The Loop
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                ?>
                        <div class="mb-20 w-full sm:w-1/2 px-4 text-center">
                            <a href="<?php echo get_permalink() ?>">
                                <div class="flex justify-center items-center h-72 rounded-md bg-white" style="box-shadow: -4px 4px 17px rgba(0, 0, 0, 0.15);">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/src/images/image5.svg" width=204 height=201px alt="">
                                </div>
                            </a>
                            <div class="mt-3 lg:mt-8 text-start">
                                <h3 class="mb-4  text-2xl font-bold text-secondary font-Montserrat"><?php echo the_title()  ?></h3>
                                <a class="font-semibold text-lg text-primary" href="<?php echo get_permalink() ?>">Quick View &#62</a>
                            </div>
                        </div>
                <?php

                    }
                }  ?>
            </div>
        </div>
    </div>
</section>
<?php
/* Restore original Post Data */
wp_reset_postdata();


get_footer();
