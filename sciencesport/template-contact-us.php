<?
/* Template Name: Contact Template 
 */ 
?>

<?get_header();

$contact_us_hero_image = get_field("contact_us_hero_image");

?>


<div class="contact-us-main-div">
        <div class="contact-us-hero-image" style="background-image:url('<?echo $contact_us_hero_image?>')">
            <div class="contact-us-hero-image-opacity">
                    <h1 class="contact-us-hero-image-h1">FEEL FREE TO CONTACT US!</h1>
            </div>
        </div>
        <div class="contact-us-main-title-con">
            <h1 class="contact-us-main-title">Contact Us</h1>
        </div>
        <div class="contact-form-main-container">
            <div class="contact-form-smaller-container">
                <div class="contact-form-main">
                    <form id = "contact-form">
                        <input name="name" placeholder="Your Name" type="text" required>
                        <input name="surname" placeholder="Your Surname" type="text" required>
                        <input name="email" placeholder="Your Email" type="email" required>
                        <textarea class="textarea-form" required></textarea>
                        <input type ="submit" value="send" class="submit">
                    </form>
                </div>
                <div class="contact-form-map-info-con">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d177891.77679597997!2d15.824248265386553!3d45.84011036381781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d692c902cc39%3A0x3a45249628fbc28a!2sZagreb!5e0!3m2!1shr!2shr!4v1673895488995!5m2!1shr!2shr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="google-map">
                    </iframe>
                    <div class="how-to-reach-us-con">
                        <h1 class ="how-to-reach-us">HOW TO REACH US :</h1>
                        <p class="how-to-reach-us-p">
                            Zagreb, 10000</br>
                            St. peters Street 321
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
        
</div>
<div class="contact-us-covering"></div>

<?get_footer(); ?>
