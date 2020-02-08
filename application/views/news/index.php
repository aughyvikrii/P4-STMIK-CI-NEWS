<h2><?php echo $title; ?> <a href="http://localhost/p4_1218624/ci_modul/index.php/news/create" class="btn btn-success"> Create New </a> </h2>
<table class="table table-bordered" border='1' cellpadding='4'>
    <tr>
        <td><strong>Title</strong></td>
        <td><strong>Content</strong></td>
        <td><strong>Action</strong></td>
    </tr>
    <?php foreach ($news as $news_item): ?>

        <tr>
            <td>
                <?php echo $news_item['title']; ?>
            </td>
            <td>
                <?php echo $news_item['text']; ?>
            </td>
            <td>
                <a href="<?php echo site_url('news/view/'.$news_item['id']); ?>" class="btn btn-sm btn-info">View</a> 
                <a href="<?php echo site_url('news/edit/'.$news_item['id']); ?>" class="btn btn-sm btn-warning">Edit</a> 
                <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
</table>