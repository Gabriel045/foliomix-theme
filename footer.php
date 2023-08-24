<footer>
    <section class="flex h-[350px] items-center">
        <div class="w-1/2 flex h-full border-r-[1px] border-r-[#333333] relative">
            <img class="inline-block w-[150px]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg " alt="">
            <p class="absolute bottom-[38px] opacity text-[14px]">Copyright 2023 Company Name All Rights Reserved</p>
        </div>
        <div class="w-1/2 flex">
            <div class="w-1/2 pl-[119px]">
                <ul class="flex flex-col gap-[30px] justify-end">
                    <?php
                    $primaryNav = wp_get_nav_menu_items("3");
                    foreach ($primaryNav as $navItem) {
                        echo '<li><a class="opacity text-[14px]" href="' . $navItem->url . '" title="' . $navItem->title . '">' . $navItem->title . '</a></li>';
                    } ?>
                </ul>
            </div>
            <div class="w-1/2 flex justify-end gap-[50px]">
                <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/twitter-x.svg" alt=""></div>
                <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/instagram.svg" alt=""></div>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>
</body>

</html>