<?php

get_header();

while (have_posts()) {
    the_post(); ?>


    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>);"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title(); ?></h1>
            <div class="page-banner__intro">
                <p>Dont forget to replace me later</p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">


        <!-- this chunck of code below affects the breadcrumb on the pages and dynamicly switches the text on the breadcrumb based off of the page its on -->
        <?php
            // if the id of the post is a child to the parent id then display the title of parent page on breadcrumb if its parent page, dont display bredcrumb //
            $theParentVariable = wp_get_post_parent_id(get_the_ID());
            if ($theParentVariable) { ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParentVariable); ?>"><i class="fa fa-home" aria-hidden="true"></i><?php echo get_the_title($theParentVariable); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
            </div>
        <?php
            }
            ?>


        <!-- <div class="page-links">
            <h2 class="page-links__title"><a href="#">About Us</a></h2>
            <ul class="min-list">
                <li class="current_page_item"><a href="#">Our History</a></li>
                <li><a href="#">Our Goals</a></li>
            </ul>
        </div> -->

        <div class="generic-content">
            <?php the_content(); ?>
        </div>

    </div>

<?php }


get_footer();

?>