<div id="comments">

<?php if(have_comments()): ?>
    <h3>コメント</h3>

    <ul>
    <?php wp_list_comments('callback=mydesign'); ?>
    </ul>
<?php endif; ?>

<?php comment_form(); ?>

<?php if(pings_open()): ?>
<div id="trackback-url" class="alert alert-info">
<p><strong>トラックバックURL:  </strong>
<?php trackback_url(); ?></p>
</div>

<?php endif; ?>

</div>
