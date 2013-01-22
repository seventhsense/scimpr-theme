<div id="footer">
    <div class="foot-sidebar row">
        <div class="span3"><?php dynamic_sidebar(1); ?></div>
        <div class="span3"><?php dynamic_sidebar(2); ?></div>
        <div class="span3"><?php dynamic_sidebar(3); ?></div>
        <div class="span3"><?php dynamic_sidebar(4); ?></div>
    </div>

    <hr />
    <p class="copyright">Copyright &copy; <?php bloginfo('name'); ?>, All rights reserved.</p>
</div>
</div>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/sexymenu.js"></script>
<?php wp_footer(); ?>
</body>
</html>
