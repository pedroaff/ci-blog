<h2>
    <?php echo $post['title']; ?>
</h2>
<img class="thumbnail post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>"
    alt="">
<div class="post-body">
    <small>
        <?php echo $post['created_at']; ?></small><br>
    <?php echo $post['body']; ?>
</div>

<hr>
<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('/posts/delete/' . $post['id']); ?>
<input type="submit" value="delete" class="btn btn-danger">
</form>