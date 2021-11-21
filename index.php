<?php get_header(); ?>
    <section>

<?php while(have_posts()) : the_post() ?>

        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        <h3 style="text-align:center;">Read more information by click on the image</h3>
        <a href="<?php the_field("zero_hunger_link_one") ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/pirmas.png" alt="" width="20%" height="20%" style="float: right;"></a>
        <a href="<?php the_field("zero_hunger_link_second") ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/antras.png" alt="" width="20%" height="20%"></a><br>
        <a href="<?php the_field("zero_hunger_link_third") ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/ketvirtas.png" alt="" width="20%" height="20%"></a>
        <a href="<?php the_field("zero_hunger_link_four") ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/penktas.png" alt="" width="20%" height="20%" style="float: right;"></a>
        <body>
      <h4 style="text-align: center; position:relative; top:-310px;">Information</h4><br>
      <p style="text-align: center; position:relative; top:-300px;">Almost 690 million people around the world experienced hunger in 2019, equivalent to 8.9 per cent<br>
       of the world population – an increase of nearly 60 million in five years.<br>
      <p style="text-align: center; position:relative; top:-280px;">An estimated 2 billion people, 25.9 per cent of the world population, were affected by moderate<br>
       or severe food insecurity in 2019, up from 22.4 per cent in 2015.<br>
       The fastest rise was recorded in Latin America and the Caribbean, although<br>
        the highest levels were registered in sub-Saharan Africa.</p>
      <p style="text-align: center; position:relative; top:-260px;">In women, anaemia increases the risk of adverse maternal and neonatal outcomes.<br>
       In 2019, the global prevalence of anaemia was 29.9 per cent in women of reproductive<br>
        age, 29.6 per cent in non-pregnant women and 36.5 per cent in pregnant women.<br>
        The prevalence was higher in Central and Southern Asia, at 47.5 per cent in women of reproductive age.</p>
    </body>
        <a href="<?php the_field("zero_hunger_link_five") ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/sestas.png" alt="" width="20%" height="20%"></a>
        <a href="<?php the_field("zero_hunger_link_six") ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/trecias.png" alt="" width="20%" height="20%" style="float: right;"></a>
        <?php endwhile; ?>

    </section>
<section>
    <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="hunger" width="50%" height="50%">
</section>
<?php get_footer(); ?>

