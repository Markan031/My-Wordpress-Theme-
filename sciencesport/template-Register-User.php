<?php

/*  Template Name: Register User Template */
$register_hero = get_field("register_hero");
?>

<?

get_header();
?>

<main id="primary" class="site-main Register-User-Site">

    <div class="register-hero" style="background-image:url('<?echo $register_hero?>')">
        <div class="register-hero-whitening">
            <h1 class="register-join-us">JOIN US ON OUR ADVENTURE!</h1>
        </div>
    </div>
    <div class="register-title-con">
        <h1 class="register-title">REGISTER</h1>
    </div>
    <div class="register-form-con"><?echo do_shortcode ("[register_form]");?></div>
    

</main>

<?get_footer();?>