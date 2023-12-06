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
                <h1>Edit PC</h1>

                <form action="<?= base_url('pcs/update/' . $pc['id']) ?>" method="post">
                
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="txtBrand" name="txtBrand" value="<?= $pc['brand'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Model</label>
                        <input type="text" class="form-control" id="txtModel" name="txtModel" value="<?= $pc['model'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Year</label>
                        <input type="text" class="form-control" id="txtYear" name="txtYear" value="<?= $pc['year'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Processor</label>
                        <input type="text" class="form-control" id="txtProcessor" name="txtProcessor" value="<?= $pc['processor'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Memory</label>
                        <input type="text" class="form-control" id="txtMemory" name="txtMemory" value="<?= $pc['memory'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Storage</label>
                        <input type="text" class="form-control" id="txtStorage" name="txtStorage" value="<?= $pc['storage'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Graphics Card</label>
                        <input type="text" class="form-control" id="txtGraphicsCard" name="txtGraphicsCard" value="<?= $pc['graphics_card'] ?>">
                    </div>

                    <button name="submit" type="submit" class="btn btn-primary">Update PC Details</button>
                </form>
                <br /> <br />
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>
