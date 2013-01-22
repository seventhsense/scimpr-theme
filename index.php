<?php get_header(); ?>

<?php if(is_category()): ?>
    <div class="alert alert-info">
        カテゴリー： <?php single_cat_title(); ?>
    </div>
<?php endif; ?>

<?php if(is_tag()): ?>
    <div class="alert alert-info">
        タグ： <?php single_tag_title(); ?>
    </div>
<?php endif; ?>

<div id="main" class="row">

      
        <div id="content">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <div class="post span3">
            <h3><?php the_title(); ?></h3>
            <span class="post-category label label-success pull-right"><?php the_tags(' '); ?></span>
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('thumbnail'); ?>
            <?php endif; ?>
            <p class="more"><a href="<?php the_permalink(); ?>">続きを読む</a></p>
          </div>
        <?php endwhile; endif; ?>


        </div>
     
<br>



</div>
<div class="pagelink">
    <ul class="pager">
    <li class="previous">
    <?php next_posts_link('&larr; 古い記事 '); ?>
    </li>
    <li class="next">
    <?php previous_posts_link('新しい記事 &rarr; '); ?>
    </li>
    </ul>
</div>
<?php get_footer(); ?>