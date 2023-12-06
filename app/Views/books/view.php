<!-- MASTER PAGE -->
<?= $this->extend('layout/pcmain') ?>
<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- container -->

    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <div class="col-md-12">
            <br /> <br /><br /> <br /><br /> <br />
            <h1>Do you want to Delete this Book?</h1>

                <form action="<?=base_url()?>books/delete/<?=$books['id']?>" method="post">

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="txtTitle" name="txtTitle" readonly value="<?=$books['title']?>">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Author</label>
                <input type="text" class="form-control" id="txtAuthor" name="txtAuthor" readonly placeholder="Enter Author" value="<?=$books['author']?>">
            
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Year</label>
                <input type="text" class="form-control" id="txtYear" name="txtYear" readonly placeholder="Enter Year" value="<?=$books['year']?> ">
            
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Yes</button>
                <a href="<?=base_url()?>/books/list" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">No</a>


                </form>
    <br /> <br />
</div>
</div>
</div>
</div>

<?= $this->endSection('content') ?>