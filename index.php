<?php get_header(); ?>
        
<?php 

    // параметры по умолчанию
    $my_posts = get_posts( array(
        'numberposts' => 1,
        'category'    => 0,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'include'     => array(),
        'exclude'     => array(),
        'meta_key'    => '',
        'meta_value'  =>'',
        'post_type'   => 'main-screen',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

    global $post;

    foreach( $my_posts as $post ){
        setup_postdata( $post );
            ?>
                <section class="main-screen">
                    <div class="main-screen__bg ibg">
                        <picture><source srcset="<?php echo get_the_post_thumbnail_url(); ?>" type="image/webp"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="background"></picture>
                    </div>

                    <div class="main-screen__container">
                        <div class="main-screen__content">
                            <h1 class="main-screen__title"><?php the_title(); ?></h1>
                            <p class="main-screen__paragraph"><?php echo get_post_meta(get_the_ID(), 'main-screen-subtitle', true) ?></p>
                            <a href="https://sasha-kravets.github.io/resume/" class="main-screen__button button">Download</a>
                        </div>
                    </div>
                </section>

            <?php
    }

    wp_reset_postdata(); // сброс

?>


<div id="big-blog" class="text-section__container">
    <section class="text-section">

    <?php 

        // параметры по умолчанию
        $my_posts = get_posts( array(
            'numberposts' => 1,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'before-bb-text',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        global $post;

        foreach( $my_posts as $post ){
            setup_postdata( $post );
                ?>

                    <div class="text-section__before-title"><?php echo get_post_meta(get_the_ID(), 'pre-title', true) ?></div>
                    <h2 class="text-section__title"><?php the_title(); ?></h2>
                    <p class="text-section__text"><?php the_content(); ?></p>

                <?php
        }

        wp_reset_postdata(); // сброс

    ?>

    </section>
</div>

<section class="big-blog">

<?php 

    // параметры по умолчанию
    $my_posts = get_posts( array(
        'numberposts' => -1,
        'category'    => 0,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'include'     => array(),
        'exclude'     => array(),
        'meta_key'    => '',
        'meta_value'  =>'',
        'post_type'   => 'big-blog',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

    global $post;

    foreach( $my_posts as $post ){
        setup_postdata( $post );
            ?>

                <article class="big-blog__item item">
                    <div class="item__container">
                        <div class="item__img">
                            <picture><source srcset="<?php echo get_the_post_thumbnail_url();?>" type="image/webp"><img src="<?php echo get_the_post_thumbnail_url();?>"></picture>
                        </div>
                        <div class="item__content">
                            <h3 class="item__title"><?php the_title(); ?></h3>
                            <div class="item__subtitle"><?php echo get_post_meta(get_the_ID(), 'bb-subtitle', true) ?></div>
                            <p class="item__text"><?php the_content(); ?></p>
                        </div>
                    </div>
                </article>

            <?php
    }

    wp_reset_postdata(); // сброс

?>

</section>

<div id="small-blog" class="text-section__container">
    <section class="text-section">
            <?php 

                // параметры по умолчанию
                $my_posts = get_posts( array(
                    'numberposts' => 1,
                    'category'    => 0,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  =>'',
                    'post_type'   => 'before-smb-text',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                global $post;

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                        ?>
                        
                            <div class="text-section__before-title"><?php echo get_post_meta(get_the_ID(), 'pre-title', true) ?></div>
                            <h2 class="text-section__title"><?php the_title(); ?></h2>
                            <p class="text-section__text"><?php the_content(); ?></p>

                        <?php
                }

                wp_reset_postdata(); // сброс

            ?>
    </section>
</div>

<section class="small-blog">

    <?php 

    // параметры по умолчанию
    $my_posts = get_posts( array(
        'numberposts' => -1,
        'category'    => 0,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'include'     => array(),
        'exclude'     => array(),
        'meta_key'    => '',
        'meta_value'  =>'',
        'post_type'   => 'small-blog',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

    global $post;

    foreach( $my_posts as $post ){
        setup_postdata( $post );
            ?>

                <article class="small-blog__item small-blog-item">
                    <div class="small-blog-item__container">
                        <div class="small-blog-item__img">
                            <picture><source srcset="<?php echo get_the_post_thumbnail_url();?>" type="image/webp"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="article1"></picture>
                        </div>
                        <div class="small-blog-item__content">
                            <h3 class="small-blog-item__title"><?php the_title(); ?></h3>
                            <div class="small-blog-item__subtitle"><?php echo get_post_meta(get_the_ID(), 'smb-subtitle', true) ?></div>
                            <p class="small-blog-item__text"><?php the_content(); ?></p>
                        </div>
                    </div>
                </artic>

            <?php
    }

    wp_reset_postdata(); // сброс

    ?>
</section>

<?php get_footer(); ?>