<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('news/edit/'.$news_item['id']); ?>
        <table class="table table-bordered">
 <tr>
 <td><label for="title">Title</label></td>
 <td><input type="input" class="form-control" name="title" size="50" value="<?php echo $news_item['title'] ?>"
/></td>
 </tr>
 <tr>
 <td><label for="text">Text</label></td>
 <td><textarea name="text" class="form-control" rows="10" cols="40"><?php echo $news_item['text']
?></textarea></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" name="submit" class="btn btn-primary" value="Edit news item" /></td>
 </tr>
 </table>
</form>