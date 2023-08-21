<?php

get_header();
?>
<div class="mt-20 pb-20 px-5 lg:px-10 xl:px-40 max-w-8xl m-auto">
    <div class="pb-20 border-b  border-solid  border-gray">
        <h1 class="font-Montserrat text-5xl text-primary font-bold lg:w-2/3">Certifications ipsum dolor sit amet vitae.</h1>
        <p class="text-lg text-text mt-5 lg:w-2/3 font-Roboto">Lorem ipsum dolor sit amet consectetur. Lectus et faucibus sagittis non consectetur adipiscing. Sit tellus lectus est non ut adipiscing.</p>
    </div>
</div>

<section class="font-Roboto" style="background:url(<?php echo get_stylesheet_directory_uri() ?>/src/images/Group473.svg); background-position: right; background-repeat: no-repeat; ">
    <div class="px-5 lg:px-10 xl:px-40 pb-20 max-w-8xl m-auto">
        <div class="">
            <div id="products-card" class="flex flex-row w-full flex-wrap justify-center">
                <?php
                // The Loop
                for ($i = 0; $i < 8; $i++) {
                ?>
                    <div class="mb-20 w-full sm:w-1/2 px-4 text-center">
                        <div class="">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/src/images/Rectangle.svg" width=65 height=65 alt="">
                        </div>
                        <div class="mt-3 lg:mt-8 text-start">
                            <h3 class="mb-4  text-2xl font-bold text-text2 font-Montserrat">Hi-Tech PE-65MI (CDPH 1.2/LEED v4)</h3>
                            <a class="font-semibold text-lg text-primary">View Document &#62</a>
                        </div>
                    </div>
                <?php
                }  ?>
            </div>
        </div>
        <div class="border-b  border-solid  border-gray"></div>
    </div>
</section>



<?php

get_footer();
