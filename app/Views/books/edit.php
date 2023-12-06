<!-- MASTER PAGE -->
<?= $this->extend('layout/main') ?>
<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- container -->

    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <div class="col-md-12">
            <br /> <br /><br /> <br /><br /> <br />
            <h1>Add New Book</h1>

                <form action="<?=base_url()?>books/update/<?=$books['id']?>" method="post">

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="txtTitle" name="txtTitle" value="<?=$books['title']?>">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Author</label>
                <input type="text" class="form-control" id="txtAuthor" name="txtAuthor" placeholder="Enter Author" value="<?=$books['author']?>">
            
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Year</label>
                <input type="text" class="form-control" id="txtYear" name="txtYear" placeholder="Enter Year" value="<?=$books['year']?>">
            
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Update Book Details</button>

                </form>
    <br /> <br />
</div>
</div>
</div>
</div>

<?= $this->endSection('content') ?>