<?php get_header(); ?> 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="center-heading">
                <h2>Новости</h2>
            </div>
        </div>
    </div>
</div>

<div class="divide20"></div>

<div class="container blog-left-img">
    <div class="row">
        <div class="col-md-12">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <div class="blog-post">
                <div class="row">
                    <div class="col-md-4 margin20">
                        <a href="#">
                            <div class="item-img-wrap">
                                <div class="arrow-box">
                                    <i class="fa fa-calendar"></i> <?php the_time('j.m.Y') ?>
                                </div>
                               <?php the_post_thumbnail('full', 'class=img-responsive'); ?>
                            </div>
                        </a>
                    </div>

                      <div class="col-md-8 margin20">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p>
                           <?php the_excerpt(); ?>
                        </p>
                         <p><a href="<?php the_permalink(); ?>" class="btn btn-theme-bg pull-right">Подробнее</a></p>
                    </div>
                </div>
        </div>
<?php endwhile; ?>
       <div class="text-center">
            <div class="pagination pagination-lg">
               
                    <?php 
                        //global $wp_query;
                        $big = 999999999;

                        echo paginate_links( array(
                                'base' => str_replace($big, '%#%', esc_url( get_pagenum_link($big))),
                                'format' => '?page=%#%',
                                'current' => max(1, get_query_var('paged')),
                                'total' => $wp_query->max_num_pages,
                                'prev_text' => __( '<i class="fa fa-arrow-left"></i>', 'textdomain' ),
                                'next_text' => __( '<i class="fa fa-arrow-right"></i>', 'textdomain' ),
                        ) );
                    ?>
           
            </div>
        </div>
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
