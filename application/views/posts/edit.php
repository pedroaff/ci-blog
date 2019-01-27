<h2><?= $title ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
            <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                <fieldset>
                  <div class="form-group">
                    <label for="title">Post Title</label>
                    <input name="title" class="form-control" id="title" value="<?php echo $post['title']; ?> ">
                  </div>
                  <div class="form-group">
                    <label for="body">Text</label>
                    <textarea cols="50" rows="5" class="form-control" id="body" placeholder="Insert text" name="body"><?php echo $post['body']; ?> </textarea>
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
                  </fieldset>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
