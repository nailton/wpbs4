<?php get_header(); ?>
<div class="row">
    <div class="col-sm-12 col-md-4 mb-5">
        <div class="card">
            <img class="card-img-top" src="assets/image.jpeg" alt="donuts">
            <div class="card-body">
                <h5 class="card-title mb-4">Elit excepteur.</h5>
                <a href="" title="" class="btn btn-my-color-1">Leia mais</a>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4 mb-5">
        <div class="card">
            <img class="card-img-top" src="assets/image.jpeg" alt="donuts">
            <div class="card-body">
                <h5 class="card-title mb-4">Ut irure.</h5>
                <a href="" title="" class="btn btn-my-color-1">Leia mais</a>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4 mb-5">
        <div class="card">
            <img class="card-img-top" src="assets/image.jpeg" alt="donuts">
            <div class="card-body">
                <h5 class="card-title mb-4">Irure ullamco eiusmod.</h5>
                <a href="" title="" class="btn btn-my-color-1">Leia mais</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-sm-12">
        <?php if (have_posts()) : while(have_posts()): the_post();?>

        <div class="blog-post">
            <h3 class="mb-3 pb-2 border-bottom"><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h3>
            <div class="row">
                <div class="col-md-12 col-lg-6 mb-3">
                    <a href="<?php the_permalink(); ?>" title="">
                    <?php the_post_thumbnail('post-thumnail',array('class'=>'img-fluid')); ?>
                    </a>
                </div>
                <div class="col-md-12 col-lg-6 mb-3">
                   <?php the_excerpt(); ?>
                </div>
            </div>
            <p class="text-muted">Publicado: <span class="badge badge-my-color-1"><?php echo get_the_date('d/m/y'); ?></span></p>
        </div>

        <?php endwhile;?>
        <?php else: get_404_template(); endif; ?>

        <div class="blog-pagination mb-5">
          <?php next_posts_link('Mais antigos'); ?>  <?php previous_posts_link('Mais novos'); ?>
        </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
