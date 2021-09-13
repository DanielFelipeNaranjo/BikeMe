<?php
/*
Template Name: Blog-Single
*/
?>


<!-- Header Section -->
<?php get_header();?>
<!-- Header Section -->

<div class="container">
    <!-- Start the loop. -->
    <?php while ( have_posts() ) : the_post(); ?>
    <!-- Start the loop. -->
    
<div class="sp-blog-title sp-xvmargin text-center">   
    <!-- Blog Title    -->
    <h1><?php the_title();?></h1>
    <!-- Blog Title    -->
</div>
</div>
    <!-- Blog Content -->
    <div class="sp-blog-content sp-xvmargin container">
        
    
    <?php
            the_content();
            get_template_part( 'content', get_post_format() );
            
            endwhile;
            ?>

</div>

<!-- Footer Section -->
<?php get_footer(); ?>
<!-- Footer Section -->
</body>