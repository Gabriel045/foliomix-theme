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
    <main class="row">
        <section class="">
            <h1 class="font-[500] text-center">
                <span class="text-[56px]"> <?php echo ($white_title) ?></span>
                <span class="text-primary text-[56px]"> <?php echo ($green_title) ?></span>
            </h1>
        </section>
        <section class="">
            <div id="video" class="relative flex justify-center w-full h-[585px]" style="background-image: url('<?php echo $video_thumbnail ?> ')">
                <div id="play_button" class="absolute center-absolute cursor-pointer">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/polygon.svg" alt="">
                </div>
            </div>
            <!--<div id="video" class="hidden w-full h-[585px]"></div>-->
        </section>
        <section>
            <h2 class="text-center mb-[80px]">Core Values</h2>
            <div class="flex justify-around">
                <?php foreach ($core_values as $key => $value) : ?>
                    <div class="opacity text-[18px]"> <?php echo ($value["core_value"]) ?> </div>
                <?php endforeach ?>
            </div>
        </section>
        <section>
            <div class="flex">
                <div class="w-1/2 flex justify-center">
                    <div class="w-[45%]">
                        <h4> <?php echo  $questionnaire_text_blocks[0]["title_questionnaire"] ?> </h4>
                        <p class="pt-[11px] text-[14px] opacity"> <?php echo  $questionnaire_text_blocks[0]["text_questionnaire"] ?> </p>
                    </div>
                </div>
                <div class="w-1/2 flex justify-center">
                    <div class="w-[45%]">
                        <h4> <?php echo  $questionnaire_text_blocks[1]["title_questionnaire"] ?> </h4>
                        <p class="pt-[11px] text-[14px] opacity"> <?php echo  $questionnaire_text_blocks[1]["text_questionnaire"] ?> </p>
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="w-[25%] flex flex-col items-center">
                    <div class="mt-[153px]">
                        <h4> <?php echo  $questionnaire_text_blocks[2]["title_questionnaire"] ?> </h4>
                        <p class="pt-[11px] text-[14px] opacity"> <?php echo  $questionnaire_text_blocks[2]["text_questionnaire"] ?> </p>
                    </div>
                    <div class="mt-[153px]">
                        <h4> <?php echo  $questionnaire_text_blocks[4]["title_questionnaire"] ?> </h4>
                        <p class="pt-[11px] text-[14px] opacity"> <?php echo  $questionnaire_text_blocks[3]["text_questionnaire"] ?> </p>
                    </div>
                </div>
                <div class="w-[50%] flex mt-[153px]">
                    <div class="w-full h-[660px] bg-top bg-no-repeat relative" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/phone.png')">
                        <div id="video2" class="w-[280px] absolute center-absolute">
                            <div id="play_button" class=" flex flex-col items-center ">
                                <p class="mb-[32px] text-[32px] "> Questionnaire </p>
                                <img class="w-[86px] cursor-pointer" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/polygon.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-[25%] flex flex-col items-center">
                    <div class="mt-[153px]">
                        <h4> <?php echo  $questionnaire_text_blocks[3]["title_questionnaire"] ?> </h4>
                        <p class="pt-[11px] text-[14px] opacity"> <?php echo  $questionnaire_text_blocks[4]["text_questionnaire"] ?> </p>
                    </div>
                    <div class="mt-[153px]">
                        <h4> <?php echo  $questionnaire_text_blocks[5]["title_questionnaire"] ?> </h4>
                        <p class="pt-[11px] text-[14px] opacity"> <?php echo  $questionnaire_text_blocks[5]["text_questionnaire"] ?> </p>
                    </div>
                </div>
        </section>
        <section class="mt-[150px]">
            <h2 class="text-center mb-[80px]">Pricing</h2>

            <div class="mt-[80px] border-[#888] border-solid border-[1px] p-[50px] max-w-[700px]  rounded-[15px] m-auto">
                <table class="relative w-full border-separate border-spacing-0">
                    <thead>
                        <tr>
                            <th class="w-[50%]"></th>
                            <th class="text-center text-[18px] text-[#1DA1CB] font-[400]">Monthly</th>
                            <th class="text-end text-[18px] text-[#106682] font-[400]">Annually</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pricing["pricing_table"] as $key => $value) : ?>
                            <tr class="">
                                <td class="opacity text-[14px] pt-[45px] text-start"><?php echo $value["name"] ?></td>
                                <td class="text-center pt-[45px]"> <img class="inline-block" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/monthly-check.svg" alt=""> </td>
                                <td class="text-end pt-[45px]"> <img class="inline-block" src=" <?php echo get_stylesheet_directory_uri() ?>/assets/images/annually-check.svg" alt=""> </td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <td class="pt-[45px]"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-center text-[#1DA1CB] text-[14px] border-[#88888870] border-solid border-t-[1px] pt-[45px] "><?php echo $pricing["price_monthly"] ?></td>
                            <td class="text-end text-[#1DA1CB] text-[14px] border-[#88888870] border-solid border-t-[1px] pt-[45px] "><?php echo $pricing["price_annual"] ?></td>
                        </tr>
                        <tr>
                            <td class="pt-[45px]"></td>
                        </tr>

                        <tr class="relative">
                          <td class="absolute right-[-328px] z-10 top-[-34px] text-[18px] font-[500] text-primary">Discount Offer </td>
                        </tr>

                        <tr class="">
                            <td class="pt-[15px]"></td>
                            <td class="text-center  text-[14px] border-[#009779] border-solid border-y-[1px] border-l-[1px] rounded-l-[50px] py-[10px]">% off</td>
                            <td class="text-end  text-[14px] border-[#009779] border-solid border-y-[1px] py-[10px] pr-[20px]">% off</td>
                 
                        </tr>
                         
                        <tr class="absolute right-[-360px]  bottom-[73px]" >
                            <td class="z-10 bg-[#0F0F0F;] text-center text-primary text-[14px] border-[#009779] border-solid border-y-[1px] py-[10px] pl-[78px] pr-[50px] font-[500]">Completed</td>
                            <td class=" z-10 bg-[#0F0F0F;] text-center text-[12px] border-[#009779] border-solid border-y-[1px] border-r-[1px] rounded-r-[50px] pr-[50px] opacity">Lorem Ipsum Dolor</td>
                          
                        </tr>

                        <tr>
                            <td></td>
                            <td class=" text-end text-[#1DA1CB] text-[18px] pt-[45px] ">$$ .99 <span class="opacity text-[10px]"> per month</span> </td>
                            <td class=" text-end text-[#1DA1CB] text-[18px] pt-[45px] ">$$ .99 <span class="opacity text-[10px]"> per month</span> </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>
        <section>
            <div class="text-center">
              <span class="button"> Download App </span>
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