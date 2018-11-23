<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php echo get_permalink(); ?>" class="w_img-crop"><?php the_post_thumbnail();?></a>

    <div class="news_cnt">
        <h3 class="title">
            <?php
            the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' );
            ?>
        </h3>
        <div class="short_txt">
            <?php the_excerpt(); ?>
        </div>

        <div class="btn_w_line btn_b">
            <button class="btn">
                <a href="<?php echo get_permalink(); ?>">
                    <?php echo __('[:ru]Детальнее[:ua]Детальніше[:]') ?>
                </a>
            </button>
        </div>
    </div>
</article>
