<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>
    <?php echo form_open('news/create'); ?>
        <table class="table table-bordered">
            <tr>
                <td>
                    <label for="title">Title</label>
                </td>
                <td>
                    <input type="input" class="form-control" name="title" size="50" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="text">Text</label>
                </td>
                <td>
                    <textarea name="text" class="form-control" rows="10" cols="40"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" class="btn btn-primary" value="Create news item" />
                </td>
            </tr>
        </table>
        </form>