<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>
<div class="container">

<?php get_template_part('loops/content', 'home'); ?>

    <div class="middle-block">
        <div class="middle-block__item">
            <div class="middle-block__icon-wrapper">
                <img class="middle-block__icon" src="/wp-content/themes/estetika-wp-theme/assets/img/svg/request.svg" alt="icon">
            </div>
            <div class="middle-block__description">Lorem ipsum dolor sit amet</div>
        </div>
        <div class="middle-block__string"></div>
        <div class="middle-block__item">
            <div class="middle-block__icon-wrapper">
                <img class="middle-block__icon" src="/wp-content/themes/estetika-wp-theme/assets/img/svg/manager.svg" alt="icon">
            </div>
            <div class="middle-block__description">Lorem ipsum dolor sit amet</div>
        </div>
        <div class="middle-block__string"></div>
        <div class="middle-block__item">
            <div class="middle-block__icon-wrapper">
                <img class="middle-block__icon" src="/wp-content/themes/estetika-wp-theme/assets/img/svg/notification.svg" alt="icon">
            </div>
            <div class="middle-block__description">Lorem ipsum dolor sit amet</div>
        </div>
        <div class="middle-block__string"></div>
        <div class="middle-block__item">
            <div class="middle-block__icon-wrapper">
                <img class="middle-block__icon" src="/wp-content/themes/estetika-wp-theme/assets/img/svg/visit.svg" alt="icon">
            </div>
            <div class="middle-block__description">Lorem ipsum dolor sit amet</div>
        </div>
    </div>

    <!-- класс js-item-slider событие слайдера -->
    <div class="row js-item-slider">
        <div class="col-md-3">
            <div class="slider-item">
                <div class="slider-item__image-wrapper">
                    <img class="slider-item__image" src="/wp-content/themes/estetika-wp-theme/assets/img/item.jpg" alt="image">
                </div>
                <div class="slider-item__title">Крем "Данне"</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="slider-item">
                <div class="slider-item__image-wrapper">
                    <img class="slider-item__image" src="/wp-content/themes/estetika-wp-theme/assets/img/item.jpg" alt="image">
                </div>
                <div class="slider-item__title">Крем "Данне"</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="slider-item">
                <div class="slider-item__image-wrapper">
                    <img class="slider-item__image" src="/wp-content/themes/estetika-wp-theme/assets/img/item.jpg" alt="image">
                </div>
                <div class="slider-item__title">Крем "Данне"</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="slider-item">
                <div class="slider-item__image-wrapper">
                    <img class="slider-item__image" src="/wp-content/themes/estetika-wp-theme/assets/img/item.jpg" alt="image">
                </div>
                <div class="slider-item__title">Крем "Данне"</div>
            </div>
        </div>
    </div>

<!--    <div class="row">-->
<!--        <div class="col-12 col-sm-6 col-md-4 col-lg-3">-->
<!--            активный класс для блока active -->
<!--            <div class="block-services active">-->
<!--                <div class="block-services__dots"></div>-->
<!--                <div class="block-services__description">-->
<!--                    Sed ut perspiciatis unde omnis iste-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-12 col-sm-6 col-md-4 col-lg-3">-->
<!--            <div class="block-services">-->
<!--                <div class="block-services__dots"></div>-->
<!--                <div class="block-services__description">-->
<!--                    Sed ut perspiciatis unde omnis iste-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-12 col-sm-6 col-md-4 col-lg-3">-->
<!--            <div class="block-services">-->
<!--                <div class="block-services__dots"></div>-->
<!--                <div class="block-services__description">-->
<!--                    Sed ut perspiciatis unde omnis iste-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-12 col-sm-6 col-md-4 col-lg-3">-->
<!--            <div class="block-services">-->
<!--                <div class="block-services__dots"></div>-->
<!--                <div class="block-services__description">-->
<!--                    Sed ut perspiciatis unde omnis iste-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<button type="button" class="btn btn-primary btn-lg">кНопка 1</button>
<button type="button" class="btn btn-primary btn-lg btn-arrow">
    кНопка 2
    <span class="btn-arrow__round"></span>
</button>
<button type="button" class="btn btn-simple btn-lg">кНопка 3</button>
<button type="button" class="btn btn-simple btn-lg btn-arrow">
    кНопка 4
    <span class="btn-arrow__round"></span>
</button>
</div><!-- /.container -->
<?php get_footer(); ?>
