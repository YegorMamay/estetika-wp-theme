<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>
<div class="container">

<?php get_template_part('loops/content', 'home'); ?>
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
