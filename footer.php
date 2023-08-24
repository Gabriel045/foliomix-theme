<footer>
    <section class="flex flex-wrap md:flex-nowrap h-full mt-[50px] md:mt-[200px] md:h-[350px] border-t-[1px]  border-[#333333] ">
        <div class="res w-full md:w-1/2 flex  h-[180px] md:h-[350px] border-b-[1px] md:border-b-[0px] md:border-r-[1px] border-[#333333] relative md:pt-[80px]">
            <img class="inline-block w-[200px] h-fit" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg " alt="">
            <p class="absolute bottom-[40px] md:bottom-[35px] opacity text-[12px] md:text-[14px]">Copyright 2023 Company Name All Rights Reserved</p>
        </div>
        <div class="res w-full md:w-1/2 flex flex-wrap md:flex-nowrap md:pt-[80px]">
            <div class="w-1/2 md:pl-[20px] xl:pl-[119px] py-[40px] md:py-[0px]">
                <ul class="flex flex-col gap-[30px] justify-end">
                    <?php
                    $primaryNav = wp_get_nav_menu_items("3");
                    foreach ($primaryNav as $navItem) {
                        echo '<li><a class="opacity text-[14px]" href="' . $navItem->url . '" title="' . $navItem->title . '">' . $navItem->title . '</a></li>';
                    } ?>
                </ul>
            </div>
            <div class="w-full md:w-1/2 flex justify-start md:justify-end gap-[50px]">
                <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/twitter-x.svg" alt=""></div>
                <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/instagram.svg" alt=""></div>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>
</body>

</html>