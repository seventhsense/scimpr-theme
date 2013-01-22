<?php get_header(); ?>


    <div class="alert alert-info">
        検索ワード： <?php the_search_query(); ?>
    </div>

<div id="main" >
  <div class="row">
      
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
        <?php endwhile; else: ?>
	<div class="post span12">
	<h4 id="noresult">検索ワードに一致する記事は見つかりませんでした。</h4>
	</div>
	<?php endif; ?>


        </div>
     

  </div>

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

</div>
<?php get_footer(); ?>

