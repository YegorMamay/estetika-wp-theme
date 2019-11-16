<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>
<div class="container">

<?php get_template_part('loops/content', 'home'); ?>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <!-- активный класс для блока active -->
            <div class="block-services active">
                <div class="block-services__dots"></div>
                <div class="block-services__description">
                    Sed ut perspiciatis unde omnis iste
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="block-services">
                <div class="block-services__dots"></div>
                <div class="block-services__description">
                    Sed ut perspiciatis unde omnis iste
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="block-services">
                <div class="block-services__dots"></div>
                <div class="block-services__description">
                    Sed ut perspiciatis unde omnis iste
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="block-services">
                <div class="block-services__dots"></div>
                <div class="block-services__description">
                    Sed ut perspiciatis unde omnis iste
                </div>
            </div>
        </div>
    </div>

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
