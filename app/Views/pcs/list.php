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

                <?php if(session()->getFlashdata('success')) :?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong><?= session()->getFlashdata('success') ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif;?>

                <?php if(session()->getFlashdata('success-delete')) :?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong><?= session()->getFlashdata('success-delete') ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif;?>
                
                <?php if(session()->getFlashdata('success-update')) :?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong><?= session()->getFlashdata('success-update') ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif;?>
                <br>
                <div class="text-center" style="font-size: 5em;">
                <h1>PC Inventory</h1>
                </div>

                <br><br><br><br><br><br><br><br><br><br><br>
                <a href="<?= base_url('pcs/createPC') ?>" class="btn btn-primary">Add New PC</a>
                <br><br><br>

                <h1>PC List</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Model</th>
                            <th scope="col">Year</th>
                            <th scope="col">Processor</th>
                            <th scope="col">Memory</th>
                            <th scope="col">Storage</th>
                            <th scope="col">Graphics Card</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($pcs as $key => $pc) :?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $pc['brand'] ?></td>
                                <td><?= $pc['model'] ?></td>
                                <td><?= $pc['year'] ?></td>
                                <td><?= $pc['processor'] ?></td>
                                <td><?= $pc['memory'] ?></td>
                                <td><?= $pc['storage'] ?></td>
                                <td><?= $pc['graphics_card'] ?></td>
                                <td>

                                <a href="<?= base_url() ?>pcs/show/<?= $pc['id'] ?>" class="btn btn-primary">Show</a>
                                <a href="<?= base_url('pcs/edit/' . $pc['id']) ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('pcs/delete/' . $pc['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this PC?')">Delete</a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <br /> <br />
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>
