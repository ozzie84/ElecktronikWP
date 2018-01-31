<?php get_header(); ?>

    <main>
    <div id="fullpage">
    <div class="section">
        <div class="container">
            <div class="main_one">
                <div class="one_wrap">
                    <h1 class="one_wrap__head"><?php echo get_bloginfo('name'); ?></h1>
                    <p class="one_wrap__text"><?php echo get_bloginfo('description'); ?></p>
                    <?php if (have_posts()) : query_posts('p=54');
                        while (have_posts()) : the_post(); ?>
                            <a href="tel:<?php echo get_post_meta($post->ID, 'my_phone_link', true); ?>"
                               class="one_wrap__link"><?php the_title(); ?></a>
                        <? endwhile; endif;
                    wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="main_three">
            <div class="three_back"></div>
            <div class="container">
                <div class="three_wrap">
                    <h2 class="three_wrap__head"><?php echo get_cat_name(2); ?></h2>
                    <ul class="three_why">
                        <li class="three_why__items">
                            <?php if (have_posts()) : query_posts('p=15');
                                while (have_posts()) : the_post(); ?>
                                    <div class="three_why__head">
                                        <?php dynamic_sidebar('security'); ?>
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                    <?php the_content(); ?>
                                <? endwhile; endif;
                            wp_reset_query(); ?>
                        </li>
                        <li class="three_why__items">
                            <?php if (have_posts()) : query_posts('p=19');
                                while (have_posts()) : the_post(); ?>
                                    <div class="three_why__head">
                                        <?php dynamic_sidebar('electrician'); ?>
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                    <?php the_content(); ?>
                                <? endwhile; endif;
                            wp_reset_query(); ?></li>
                        <li class="three_why__items">
                            <?php if (have_posts()) : query_posts('p=23');
                                while (have_posts()) : the_post(); ?>
                                    <div class="three_why__head">
                                        <?php dynamic_sidebar('staff'); ?>
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                    <?php the_content(); ?>
                                <? endwhile; endif;
                            wp_reset_query(); ?>
                        </li>
                        <li class="three_why__items">
                            <?php if (have_posts()) : query_posts('p=25');
                                while (have_posts()) : the_post(); ?>
                                    <div class="three_why__head">
                                        <?php dynamic_sidebar('time'); ?>
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                    <?php the_content(); ?>
                                <? endwhile; endif;
                            wp_reset_query(); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="main_two">
            <div class="container">
                <h2 class="main_two__head"><?php echo get_cat_name(5); ?></h2>
                <?php if (have_posts()) : query_posts('p=58');
                    while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <? endwhile; endif;
                wp_reset_query(); ?>
                <div class="two_prices">
                    <div id="nav1" class="two_prices__items">
                        <?php if (have_posts()) : query_posts('p=65');
                            while (have_posts()) : the_post(); ?>
                                <h3 class="price_about"><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            <? endwhile; endif;
                        wp_reset_query(); ?>
                    </div>
                    <div id="nav2" class="two_prices__items">
                        <?php if (have_posts()) : query_posts('p=68');
                            while (have_posts()) : the_post(); ?>
                                <h3 class="price_about"><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            <? endwhile; endif;
                        wp_reset_query(); ?>
                    </div>
                    <div id="nav3" class="two_prices__items">
                        <?php if (have_posts()) : query_posts('p=70');
                            while (have_posts()) : the_post(); ?>
                                <h3 class="price_about"><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            <? endwhile; endif;
                        wp_reset_query(); ?>
                    </div>
                    <div id="nav4" class="two_prices__items">
                        <?php if (have_posts()) : query_posts('p=72');
                            while (have_posts()) : the_post(); ?>
                                <h3 class="price_about"><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            <? endwhile; endif;
                        wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="main_five">
            <div class="five_back"></div>
            <div class="container">
                <div class="five_wrap">
                    <h2 class="five_wrap__head"><?php echo get_cat_name(4); ?></h2>
                    <ul class="aboutUs">
                        <li class="aboutUs__items">
                            <?php if (have_posts()) : query_posts('p=36');
                                while (have_posts()) : the_post(); ?>
                                    <div class="aboutUs__img baseBorder ">
                                        <?php dynamic_sidebar('times'); ?>
                                    </div>
                                    <p class="aboutUs__text"><?php the_title(); ?></p>
                                <? endwhile; endif;
                            wp_reset_query(); ?>
                        </li>
                        <li class="aboutUs__items">
                            <?php if (have_posts()) : query_posts('p=38');
                                while (have_posts()) : the_post(); ?>
                                    <div class="aboutUs__img baseBorder">
                                        <?php dynamic_sidebar('heads'); ?>
                                    </div>
                                    <p class="aboutUs__text"><?php the_title(); ?></p>
                                <? endwhile; endif;
                            wp_reset_query(); ?>
                        </li>
                        <li class="aboutUs__items">
                            <?php if (have_posts()) : query_posts('p=40');
                                while (have_posts()) : the_post(); ?>
                                    <div class="aboutUs__img baseBorder">
                                        <?php dynamic_sidebar('head'); ?>
                                    </div>
                                    <p class="aboutUs__text"><?php the_title(); ?></p>
                                <? endwhile; endif;
                            wp_reset_query(); ?>
                        </li>
                        <li class="aboutUs__items">
                            <?php if (have_posts()) : query_posts('p=42');
                                while (have_posts()) : the_post(); ?>
                                    <div class="aboutUs__img baseBorder">
                                        <?php dynamic_sidebar('four'); ?>
                                    </div>
                                    <p class="aboutUs__text"><?php the_title(); ?></p>
                                <? endwhile; endif;
                            wp_reset_query(); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>