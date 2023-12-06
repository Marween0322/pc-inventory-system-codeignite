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
                <h1>Add New PC</h1>

                <form action="<?= base_url('pcs/store') ?>" method="post">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="txtBrand" name="txtBrand" placeholder="Enter brand of the PC">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Model</label>
                        <input type="text" class="form-control" id="txtModel" name="txtModel" placeholder="Enter model of the PC">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Year</label>
                        <input type="text" class="form-control" id="txtYear" name="txtYear" placeholder="Enter Year">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Processor</label>
                        <input type="text" class="form-control" id="txtProcessor" name="txtProcessor" placeholder="Enter processor details">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Memory</label>
                        <input type="text" class="form-control" id="txtMemory" name="txtMemory" placeholder="Enter memory details">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Storage</label>
                        <input type="text" class="form-control" id="txtStorage" name="txtStorage" placeholder="Enter storage details">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Graphics Card</label>
                        <input type="text" class="form-control" id="txtGraphicsCard" name="txtGraphicsCard" placeholder="Enter graphics card details">
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Save PC</button>

                </form>
                <br /> <br />
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>
