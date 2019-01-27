<h2>
    <?= $title ?>
</h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
<fieldset>
    <div class="form-group">
        <label for="title">Post Title</label>
        <input name="title" class="form-control" id="title" placeholder="Enter title">
    </div>
    <div class="form-group">
        <label for="body">Text</label>
        <textarea class="form-control" id="body" placeholder="Insert text" name="body"></textarea>
    </div>
    <div class="form-group">
        <label>Category select</label>
        <select name="category_id" class="form-control">
            <?php foreach($categories as $category): ?>
            <option value="<?php echo $category['id']; ?>">
                <?php echo $category['name']; ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group"><label>File Upload </label>
      <input type="file" name="userfile" size="20">
    </div>
</fieldset>
<button type="submit" class="btn btn-primary">Submit</button>
</fieldset>
</form>