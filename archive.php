<?php 
get_header();
$cat = get_queried_object()->term_id;
?>
<!-- Content -->
<main id="content">
    <?php if ( category_has_parent($cat) && ( cat_is_ancestor_of(29,$cat) || cat_is_ancestor_of(31,$cat) ) ){
        get_template_part( "template/content","newmediachild" );
    }else{
        get_template_part( "template/content","features" ); 
    }
    ?>
</main>  <!-- /Content -->
<?php get_footer(); ?>