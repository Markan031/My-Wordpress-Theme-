<?
/*  Template Name: Blog Template */

get_header();

$blog_post_hero_image = get_field("blog_post_hero_image");
?>



<main id="primary" class="site-main blog-body"> 
    

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'paged' => $paged
);
?>

<div class="blog-post-hero-image" style="background-image: url('<?echo $blog_post_hero_image?>')">
    <div class="blog-post-hero-image-opacity">
        <h1 class="blog-post-hero-image-h1">READ OUR LATEST NEWS</h1>
        <div class="blog-post-hero-image-text-container">
            <i class="fa-solid fa-caret-right fa-caret-blog"></i>
            <p class ="blog-post-hero-image-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et non ipsa distinctio maiores repellendus nostrum odio numquam delectus? Odit, iusto sequi, dolore maiores aperiam rem non dolorem eligendi voluptatibus aut dignissimos molestiae consequatur veritatis ipsum architecto adipisci nostrum quia porro.</p>
        </div>
    </div> 
</div>
<?

$loop = new WP_Query($args);
?>
<div class="blog-main-container">
    <div class="Our-blog-con">
        <h1 class="our-blog-h1">OUR BLOG</h1>
    </div>
<?
if ($loop->have_posts()) :
    while ($loop->have_posts()) :
        $loop->the_post();?>
        <div class="news-page-content-wrapper">
                <div class="news-page-content">
                    <div class="news-page-thumbnail" style="background-image:url('<? echo the_post_thumbnail_url();?>')"></div>
                    <div class="news-page-content-info-container">
                        <div class="blog-post-title-and-date-container">
                            <h1 class="blog-post-title-h1"><a class="blog-post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <div class="blog-post-date"><?echo get_the_date()?></div>
                        </div>

                        <p class="blog-post-text"><?php echo get_the_excerpt(); ?></p>
                        <a class="blog-post-read-more" href="<?php the_permalink(); ?>">Read More&raquo; </a>
                    </div>

                </div>
              
            </div>   
        
    <?endwhile;
   

    
endif;
?>
</div>
<?


wp_reset_postdata();


?>
<div class="blog-post-pagination"><?post_pagination($paged, $loop->max_num_pages);?></div>

<div class="blog-post-cover"></div>
              


</main>


<?get_footer();?>