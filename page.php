<?php get_header(); ?>

  <div class="row">
           <div id="main" >
        <div id="content">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <div class="single-post">
            <h1><?php the_title(); ?></h1>
            <span class="post-tags label label-success pull-right"><?php the_tags(' '); ?></span>
            <span class="post-category label label-warning pull-right"><?php the_category(' '); ?></span>
            <div class="post-datetime">posted at <?php echo get_the_date(); ?> <?php the_time(); ?></div>
            <?php the_content(); ?>
          </div>
        <?php endwhile; endif; ?>

        </div>
      </div>
  </div>

</div>
<?php get_footer(); ?>
