<?php
$content = get_field("content");

//echo "<pre>";
//var_dump($content);
//echo "</pre>";

get_header();

?>
<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row ">
        <section class="mx-[100px]">
            <h1 class="">
                <?php the_title(); ?>
            </h1>
        </section>
        <section class="mx-[100px]">
            <?php foreach ($content as $key => $value) : ?>
                <div class="mb-[70px]">
                    <h4 class="pb-[28px]"> <?php echo $value["title"]  ?> </h4>
                    <p> <?php echo $value["text"] ?> </p>
                </div>
            <?php endforeach ?>
        </section>
    </div>
</main>


<?php get_footer(); ?>