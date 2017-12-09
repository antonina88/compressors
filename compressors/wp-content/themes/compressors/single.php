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
                                    <i class="fa fa-calendar"></i><?php the_time('j.m.Y') ?>
                                </div>
                               <?php the_post_thumbnail('full', 'class=img-responsive'); ?>
                            </div>
                        </a>
                    </div>

                      <div class="col-md-8 margin20">
                        <h2><?php the_title(); ?></h2>
                        <p>
                           <?php the_content(); ?>
                        </p>
                    </div>
                </div>
        </div>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
