<?php get_header();
$white_title = get_field("title")["white_title"];
$green_title = get_field("title")["green_title"];
$video_embed = get_field("video")["video_embed"];
$video_thumbnail = get_field("vide")["thumbnail_video"] ?: get_stylesheet_directory_uri() . '/assets/images/rectangle-gray.png';
$core_values = get_field("core_values");
$questionnaire_text_blocks = get_field("questionnaire")["text_block"];
$questionnaire_video = get_field("questionnaire")["video_embed"];
$pricing = get_field("pricing");

//echo "<pre>";
//var_dump($pricing_table);
//echo "</pre>";
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <main class="row ">
        <section id="about-us" class="menu">
            <h1 class="font-[500] text-center">
                <span class=""> <?php echo ($white_title) ?></span>
                <span class="text-primary "> <?php echo ($green_title) ?></span>
            </h1>
            <div id="video-section" class="">
                <div id="video" class="relative flex justify-center w-full h-[210px] sm:h-[350px] md:h-[419px] lg:h-[585px]" style="background-image: url('<?php echo $video_thumbnail ?> ')">
                    <div id="play_button" class="absolute center-absolute cursor-pointer">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/polygon.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="features" class="menu">
            <h2 class="text-center mb-[38px] md:mb-[80px]">Core Values</h2>
            <div class="flex justify-around flex-col md:flex-row items-center gap-y-[14px] md:gap-y-0">
                <?php foreach ($core_values as $key => $value) : ?>
                    <p class="opacity text-[14px] lg:text-[18px]"> <?php echo ($value["core_value"]) ?> </p>
                <?php endforeach ?>
            </div>

            <div id="core-values-phone">
                <div class="flex flex-wrap md:flex-nowrap mt-[50px] md:mt-0">
                    <div class="w-full md:w-1/2 mb-[40px] md:mb-0 flex justify-center">
                        <div class="md:w-[45%]">
                            <h4> <?php echo  $questionnaire_text_blocks[0]["title_questionnaire"] ?> </h4>
                            <p class="pt-[11px] opacity"> <?php echo  $questionnaire_text_blocks[0]["text_questionnaire"] ?> </p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2  mb-[40px] md:mb-0 flex justify-center">
                        <div class="md:w-[45%]">
                            <h4> <?php echo  $questionnaire_text_blocks[1]["title_questionnaire"] ?> </h4>
                            <p class="pt-[11px] opacity"> <?php echo  $questionnaire_text_blocks[1]["text_questionnaire"] ?> </p>
                        </div>
                    </div>
                </div>

                <!-- Hidden for desktop and tablet view -->
                <div class="block md:hidden ">
                    <?php for ($i = 2; $i <= count($questionnaire_text_blocks); $i++) : ?>
                        <div class=" mb-[40px]">
                            <h4> <?php echo  $questionnaire_text_blocks[$i]["title_questionnaire"] ?> </h4>
                            <p class="pt-[11px] opacity"> <?php echo  $questionnaire_text_blocks[$i]["text_questionnaire"] ?> </p>
                        </div>
                    <?php endfor ?>
                </div>

                <!-- Hidden for mobile view -->
                <div class="md:flex">
                    <div class="hidden md:flex flex-col items-center w-[25%]">
                        <div class="md:mt-[80px] lg:mt-[153px]">
                            <h4> <?php echo  $questionnaire_text_blocks[2]["title_questionnaire"] ?> </h4>
                            <p class="pt-[11px] opacity"> <?php echo  $questionnaire_text_blocks[2]["text_questionnaire"] ?> </p>
                        </div>
                        <div class="mt-[153px]">
                            <h4> <?php echo  $questionnaire_text_blocks[4]["title_questionnaire"] ?> </h4>
                            <p class="pt-[11px] opacity"> <?php echo  $questionnaire_text_blocks[3]["text_questionnaire"] ?> </p>
                        </div>
                    </div>
                    <div class="w-full md:w-[50%] flex mt-[50px] md:[80px] lg:mt-[153px]">
                        <div class="w-full h-[660px] bg-top bg-no-repeat relative" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/phone.png')">
                            <div id="video2" class="w-[280px] absolute center-absolute">
                                <div id="play_button" class=" flex flex-col items-center ">
                                    <p class="mb-[32px] text-[32px] "> Questionnaire </p>
                                    <img class="w-[86px] cursor-pointer" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/polygon.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[25%] hidden md:flex flex-col items-center">
                        <div class="md:mt-[80px] mt-[153px]">
                            <h4> <?php echo  $questionnaire_text_blocks[3]["title_questionnaire"] ?> </h4>
                            <p class="pt-[11px] opacity"> <?php echo  $questionnaire_text_blocks[4]["text_questionnaire"] ?> </p>
                        </div>
                        <div class="mt-[153px]">
                            <h4> <?php echo  $questionnaire_text_blocks[5]["title_questionnaire"] ?> </h4>
                            <p class="pt-[11px] opacity"> <?php echo  $questionnaire_text_blocks[5]["text_questionnaire"] ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pricing" class="mt-[50px] md:mt-[150px] overflow-x-hidden menu">
            <h2 class="text-center mb-[80px]">Pricing</h2>

            <div class="table-container mt-[80px] border-[#888] border-solid border-[1px] p-[15px] sm:p-[50px] max-w-[220px] sm:max-w-[400px]  md:max-w-[550px]  lg:max-w-[700px]  rounded-[15px] m-auto">
                <table class="relative w-full border-separate border-spacing-0">
                    <thead>
                        <tr>
                            <th class="w-[40%] md:w-[50%]"></th>
                            <th class="text-center  text-[10px] sm:text-[14px] lg:text-[18px] text-[#1DA1CB] font-[400]">Monthly</th>
                            <th class="text-end  text-[10px] sm:text-[14px] lg:text-[18px] text-[#106682] font-[400]">Annually</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pricing["pricing_table"] as $key => $value) : ?>
                            <tr class="">
                                <td class="opacity text-[7px] sm:text-[12px] lg:text-[14px] pt-[20px] sm:pt-[45px] text-start"><?php echo $value["name"] ?></td>
                                <td class="text-center pt-[20px] sm:pt-[45px]"> <img class="w-[18px] sm:w-auto inline-block" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/monthly-check.svg" alt=""> </td>
                                <td class="text-end pt-[20px] sm:pt-[45px]"> <img class="w-[18px] sm:w-auto inline-block" src=" <?php echo get_stylesheet_directory_uri() ?>/assets/images/annually-check.svg" alt=""> </td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <td class="pt-[20px] sm:pt-[45px]"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-center text-[#1DA1CB] text-[7px] sm:text-[12px] lg:text-[14px] border-[#88888870] border-solid border-t-[1px] pt-[20px] sm:pt-[45px] "><?php echo $pricing["price_monthly"] ?></td>
                            <td class="text-end text-[#1DA1CB] text-[7px] sm:text-[12px] lg:text-[14px] border-[#88888870] border-solid border-t-[1px] pt-[20px] sm:pt-[45px] "><?php echo $pricing["price_annual"] ?></td>
                        </tr>
                        <tr>
                            <td class="pt-[10px] sm:pt-[45px]"></td>
                        </tr>

                        <tr class="relative">
                            <td class="absolute sm:right-[-228px] right-[-118px] md:right-[-270px] lg:right-[-320px] z-10 top-[-17px] sm:top-[-34px] text-[7px] sm:text-[12px] lg:text-[18px] font-[500] text-primary">Discount Offer </td>
                        </tr>

                        <tr class="">
                            <td class="pt-[15px]"></td>
                            <td class="text-center text-[7px] sm:text-[12px] lg:text-[14px] border-[#009779] border-solid border-y-[1px] border-l-[1px] rounded-l-[50px] py-[4px] sm:py-[10px]"><?php echo $pricing["discount_monthly"] ?></td>
                            <td class="text-end  text-[7px] sm:text-[12px] lg:text-[14px] border-[#009779] border-solid border-y-[1px] py-[4px] sm:py-[10px]"><?php echo $pricing["discount_annual"] ?></td>

                        </tr>

                        <tr class="absolute right-[-146px] sm:right-[-264px] md:right-[-303px] lg:right-[-353px] bottom-[33px] sm:bottom-[70px] md:bottom-[70px] lg:bottom-[73px]">
                            <td class="z-10 bg-[#0F0F0F;] text-center text-primary text-[7px] sm:text-[12px] lg:text-[14px] border-[#009779] border-solid border-y-[1px] py-[4px] sm:py-[10px] px-[15px] sm:px-[40px] md:px-[60px] font-[500]">Completed</td>
                            <td class=" z-10 bg-[#0F0F0F;] text-center text-[7px] sm:text-[10px] lg:text-[12px] border-[#009779] border-solid border-y-[1px] border-r-[1px] rounded-r-[50px] pr-[15px] sm:pr-[30px] lg:pr-[50px] opacity"><?php echo $pricing["discount_text"] ?></td>

                        </tr>

                        <tr>
                            <td></td>
                            <td class=" text-end text-[#1DA1CB] text-[8px] sm:text-[16px] lg:text-[18px] pt-[20px] sm:pt-[45px] "><?php echo $pricing["total_monthly"] ?> <span class="opacity text-[5px] md:text-[10px]"> per month</span> </td>
                            <td class=" text-end text-[#1DA1CB] text-[8px] sm:text-[16px] lg:text-[18px] pt-[20px] sm:pt-[45px] "><?php echo $pricing["total_annual"] ?> <span class="opacity text-[5px] md:text-[10px]"> per month</span> </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>
        <section class="my-[80px] md:mx-0">
            <div class="text-center">
                <a class="button"> Download App </a>
            </div>
        </section>

    </main>
</div>
<script>
    let video = document.querySelector("#video")
    let video2 = document.querySelector("#video2")


    function playVideo(video, iframe) {

        firstSplit = iframe.split('src="')
        secondSplit = firstSplit["1"].split('"')[0]
        secondSplit += "?autoplay=1&mute=0"

        video.querySelector("#play_button").classList.add("hidden")

        setTimeout(() => {
            video.innerHTML = `<iframe src="${secondSplit}" title="YouTube video player" frameborder="0" allow="acelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen> </iframe>`
        }, 100);
    }



    video.querySelector("#play_button").addEventListener("click", () => {
        let iframe = `<?php echo $video_embed ?>`
        playVideo(video, iframe)
    })

    video2.querySelector("#play_button").addEventListener("click", () => {
        let iframe = `<?php echo $questionnaire_video ?>`
        playVideo(video2, iframe)
    })
</script>

<?php get_footer(); ?>