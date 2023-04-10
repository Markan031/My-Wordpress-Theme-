<?php

/*  Template Name: About Us Template */

?>

<?
$about_us_hero_image = get_field("about_us_hero_image");
$about_us_first_info_image = get_field("about_us_first_info_image");
$about_us_second_info_image = get_field("about_us_second_info_image");

get_header();
?>

<main id="primary" class="site-main about-us-site">


    <div class="hero-image-about-us" style="background-image: url('<?echo $about_us_hero_image?>');">
        <div class="hero-image-about-us-whitening">
            <h1 class ="hero-h1-about-us">OUR ACADEMY</h1>
            <p class ="hero-p-about-us">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, quae. Tempore voluptatum beatae, voluptatem aliquid hic quis tempora officiis. Veritatis officiis necessitatibus accusantium fugit cumque? Aliquam ab quia perferendis sequi veniam laborum aperiam sapiente quasi similique quam qui, nam quidem accusamus perspiciatis, labore hic accusantium.</p>
        </div> 
    </div>
   


    <div class="about-us-first-info">
        <div class="about-us-first-info-flex-h1-arrow">
            <i class="fa-solid fa-caret-right fa-caret-about-us"></i>
             <h1 class ="about-us-first-info-h1">OUR LITTLE STORY</h1> 
        </div>
        <div class="about-us-first-info-text-and-image">
            <div class="about-us-first-info-text-and-image-container">
                <div class="about-us-first-info-image" style="background-image: url('<?echo $about_us_first_info_image?>')"></div>
                <p class ="about-us-first-info-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, laborum? Pariatur laboriosam harum quam, obcaecati magnam ea! Omnis pariatur quidem odio magnam enim inventore nam, voluptate, sint maiores neque accusantium laudantium praesentium dolorum, aliquam natus consectetur ipsa. Eligendi accusamus eaque autem at voluptatum a officia nam fugiat iure, quasi quis, velit, dolorem fugit dolore enim nulla? Consectetur amet dolorum reiciendis quae animi voluptatem aperiam esse perspiciatis voluptates alias numquam incidunt cum optio dignissimos recusandae architecto earum tenetur sunt, illum quisquam accusamus eaque perferendis! Dolorem, eius quibusdam. Totam libero nesciunt eius sunt. Dolore alias consectetur dolor nostrum nobis consequatur impedit nisi ab perspiciatis quidem? Quos neque architecto, dolorem unde obcaecati, beatae ratione maiores ut, voluptate earum eligendi maxime ducimus! Architecto, commodi!</p>
                <button class="read-more-about-us-first-info-text">Read more</button>
            </div>
        </div>
    </div>



    <div class="about-us-second-info">

    <div class="about-us-first-info-text-and-image">
    
            <div class="about-us-first-info-text-and-image-container">
                <button class="read-more-about-us-second-info-text">Read more</button>
                <p class ="about-us-second-info-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, laborum? Pariatur laboriosam harum quam, obcaecati magnam ea! Omnis pariatur quidem odio magnam enim inventore nam, voluptate, sint maiores neque accusantium laudantium praesentium dolorum, aliquam natus consectetur ipsa. Eligendi accusamus eaque autem at voluptatum a officia nam fugiat iure, quasi quis, velit, dolorem fugit dolore enim nulla? Consectetur amet dolorum reiciendis quae animi voluptatem aperiam esse perspiciatis voluptates alias numquam incidunt cum optio dignissimos recusandae architecto earum tenetur sunt, illum quisquam accusamus eaque perferendis! Dolorem, eius quibusdam. Totam libero nesciunt eius sunt. Dolore alias consectetur dolor nostrum nobis consequatur impedit nisi ab perspiciatis quidem? Quos neque architecto, dolorem unde obcaecati, beatae ratione maiores ut, voluptate earum eligendi maxime ducimus! Architecto, commodi!</p>
                <div class="about-us-second-info-image" style="background-image: url('<?echo $about_us_second_info_image?>')"></div>
                
            </div>
        </div>
    </div>

    <div class="cover-up-about-us"></div>




</main>

<?get_footer();?>