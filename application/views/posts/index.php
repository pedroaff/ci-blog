<h2>
    <?= $title ?>
</h2>

<?php foreach ($posts as $post) : ?>
<h3>
    <?php echo $post['title']; ?>
</h3>
<div class="row">
    <div class="col-md3">
        <img class="thumbnail post-thumb"src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
    </div>
    <div class="col-md0">
        <small>Posted on:
            <?php echo $post['created_at']; ?>| <strong>
                <?php echo $post['name']; ?></strong></small>
        <hr>
        <?php echo $post['body']; ?><br>
        <p>
            <a class="btn btn-default" href="<?php echo site_url('posts/' . $post['slug']); ?>">View More</a>
        </p>

    </div>
</div>
<?php endforeach; ?>