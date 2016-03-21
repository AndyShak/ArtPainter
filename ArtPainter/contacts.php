<?php
/*
Template Name: Шаблон страницы контактов
*/
?>
<?php get_header('page'); ?>
<div class="content-main">

	<div class="content-left">
		


<h1><?php the_title() ?></h1>
<div class="contact-form">
<form>
                	<p><label for="firstName" >Your Name</label><input type="text" name="name" id="firstName" /></p>
                    <p><label for="email" >Your Email*</label><input type="text" name="email" id="email" /></p>
                    <p><label for="subject" >Subject</label><input type="text" name="subject" id="subject" /></p>
                    <p><label for="message" >Message</label><textarea name="message" id="message"></textarea></p>
                    <p><input type="image" src="<?php bloginfo(template_url);?>/images/contact-btn.jpg" name="send-msg" />
                </form>
</div>



	</div>

	<div class="sidebar">
        	<div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_post_thumbnail() ?>
<h1>Contact Details</h1>

<?php $custom_fields = get_post_custom( get_the_ID() ); ?>
<?php 
foreach ($custom_fields as $key => $value) {
    if( preg_match('#^contact-#', $key) ){
        echo "<p class='{$key}'>{$value[0]}</p>";
    }   
}
if($custom_fields['business-number'][0]){
    echo "<p>{$custom_fields['business-number'][0]}</p>";
}
?>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>                
            	

            </div>
        </div>
            
</div>
</div>
<?php get_footer('page'); ?>