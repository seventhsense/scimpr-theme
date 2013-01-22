<?php
    //jQuery
    add_action('wp_head', 'myScript', 1);
    function myScript(){
	wp_enqueue_script('jquery');
    }


    //ウィジェット
    register_sidebar();
    register_sidebar();
    register_sidebar();
    register_sidebar();

    //受信したコメントのデザイン
    function mydesign($comment, $args, $depth){
        $GLOBALS['comment'] = $comment; ?>

        <li class="compost">
        <?php comment_text(); ?>
        <p class="cominfo"><?php comment_date(); ?> <?php comment_time(); ?>
         | 
        <?php comment_author_link(); ?>
        </p>


        <?php
    }

    // メニュー
    register_nav_menus(array(
        'navigation'  => 'ナビゲーションバー'
    ));


?>
