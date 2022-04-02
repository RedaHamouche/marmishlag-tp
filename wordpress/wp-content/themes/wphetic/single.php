<?php 
    $ad = get_field('custom_banner_img') || null;
?>
<?php get_header(); ?>

<main class="single">

    <?php if (isset($ad)) : ?>
        <figure class="ad">
            <img src="<?= $ad ?>" alt="pub"/>
        </figure>
    <?php endif; ?>
        
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <section class="card">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
            </section>
            
        <?php endwhile; ?>
    <?php endif; ?>
</main>
                
<?php get_footer(); ?>