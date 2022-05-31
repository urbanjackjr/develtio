<?php get_header(); ?>

<?php if(class_exists("ACF")) : ?>

<?php
    $hero_image = get_field("hero_image") ? get_field("hero_image") : get_template_directory_uri() . '/resources/assets/images/hero_image.png';
    $section_image = get_field("section_image") ? get_field("section_image") : get_template_directory_uri() . '/resources/assets/images/section_image.png';
?>

<section class="main__hero hero">
    <div class="hero__image">
        <img src="<?php echo $hero_image; ?>" alt="">
    </div>
    <div class="hero__content">
        <div class="hero__text">
            <h1 class="hero__title"><?php the_field("hero_title") ?></h1>
            <p class="hero__description"><?php the_field("hero_description") ?></p>
        </div>
        <div class="hero__form-wrap">
            <div class="hero__form form">
                <span class="form__title">
                    <?php the_field("contact_form_hook") ?>
                </span>
                <?php echo apply_shortcodes( '[contact-form-7 id="'. get_field("contact_form_id") .'"]') ?>
            </div>
        </div>
    </div>
</section>

<section class="main__section section">
    <div class="section__image">
        <img src="<?php echo $section_image; ?>" alt="">
    </div>
    <div class="section__content">
        <h2 class="section__title">
            <?php the_field("section_title") ?>
        </h2>
        <h3 class="section__subtitle">
            <?php the_field("section_subtitle") ?>
        </h3>
        <div class="section__text">
            <?php the_field("section_content") ?>
        </div>
        <a href="<?php the_field("section_button_link") ?>" class="button section__button">
            <?php the_field("section_button_text") ?>
        </a>
    </div>
</section>

<?php else : ?>

    <h2>Activate ACF and Contact Form 7</h2>

<?php endif; ?>

<?php get_footer(); ?>
