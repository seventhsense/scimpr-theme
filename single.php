<?php get_header(); ?>

  <div class="row">
           <div id="main" >
        <div id="content">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <div id="single-post" class="single-post">
            <div class="single-post-title">
              <h1><?php the_title(); ?></h1>
            </div>
            <div class="single-post-labels">
　　　　　　　　<div class="single-post-tags">
                <span class="post-tags label label-success pull-right"><?php the_tags(' '); ?></span>
              </div>
              <div class="single-post-category">
                <span class="post-category label label-warning pull-right"><?php the_category(' '); ?></span>
              </div>
            </div>


        <div id="control" class="control">
                
            <ol>
            </ol> 
            <a href="#">トップへ</a>
        </div>
        <div id="control-space" class="control">
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
　　　　　</div>


        <div id="single-post-content">
            <?php the_content(); ?>
            <div class="post-datetime">posted at <?php echo get_the_date(); ?> <?php the_time(); ?></div>
        </div>
            
          </div>
        <?php endwhile; endif; ?>
    

            
    <?php comments_template(); ?>

        </div>
      </div>
  </div>

<?php get_footer(); ?>