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

    <h1>Book List</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Book ID</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Year</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
   
      <?php foreach($books as $key => $book) :?>
      <tr>
        <td><?= $key + 1 ?></td>
        <td><?= $book['id'] ?></td>
        <td><?= $book['title'] ?></td>
        <td><?= $book['author'] ?></td>
        <td><?= $book['year'] ?></td>

        <td><a href="<?=base_url()?>/books/view/<?= $book['id'] ?>">View</a></td>
        <td><a href="<?=base_url()?>/books/delete/<?= $book['id'] ?>">Delete</a></td>
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