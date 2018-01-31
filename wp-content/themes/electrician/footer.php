<div class="section green">
    <div class="main_final">
        <div class="final_back"></div>
        <div class="container">
            <div class="contacts">
                <h2 class="contacts__head"><?php echo get_cat_name(7); ?></h2>
                <form class="contacts__form">
                    <div class="label">
                        <input type="text" name="name" id="name" placeholder="Ваше имя" required>
                        <label for="name"></label>
                        <input type="text" name="phone" id="phone" placeholder="Ваш телефон" required
                               class="phone_mask">
                        <label for="phone"></label>
                        <input type="submit" id="send" value="Отправить">
                        <label for="send"></label>
                    </div>
                    <div class="label">
                        <textarea id="placeholder" placeholder="Черкани пару строк..." required></textarea>
                        <label for="placeholder"></label>
                        <input type="submit" id="send1" value="Отправить">
                        <label for="send1"></label>
                    </div>
                </form>
            </div>
            <div class="contacts">
                <h2 class="contacts__head"><?php echo get_cat_name(9); ?></h2>
                <div class="contacts__links">
                    <?php if (have_posts()) : query_posts('p=44');
                        while (have_posts()) : the_post(); ?>
                            <a href="tel:<?php echo get_post_meta($post->ID, 'my_phone_link', true); ?>"
                               class="phone"><?php the_title(); ?></a>
                        <? endwhile; endif;
                    wp_reset_query(); ?>
                    <?php if (have_posts()) : query_posts('p=56');
                        while (have_posts()) : the_post(); ?>
                            <a href="mailto:recipient@gmail.com?cc=<?php echo get_post_meta($post->ID, 'my_mail_link', true); ?>"
                               class="mail"><?php the_title(); ?></a>
                        <? endwhile; endif;
                    wp_reset_query(); ?>
                    <div class="social_final"><a
                                href="<?php echo get_post_meta($post->ID, 'soc_url_one', true); ?>"
                                target="blank" class="facebook">
                            <?php dynamic_sidebar('soc_one'); ?>
                        </a><a href="<?php echo get_post_meta($post->ID, 'soc_url_two', true); ?>"
                               class="skype">
                            <?php dynamic_sidebar('soc_two'); ?>
                        </a><a href="<?php echo get_post_meta($post->ID, 'soc_url_three', true); ?>"
                               class="viber">
                            <?php dynamic_sidebar('soc_three'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</main>

<script src="<?php echo get_template_directory_uri(); ?>/js/common.min.js"></script>
</body>
</html>