

<?php $__env->startSection('tittle','Tokoku'); ?>

<?php $__env->startSection('navbar'); ?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Tokoku</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo e(url('dashboard')); ?>">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('category')); ?>">Category List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('login')); ?>">Login</a>
          </li>
        </ul>
        <a href="<?php echo e(url('product/create')); ?>" class="btn btn-primary">Add Product</a>
        
      </div>
    </div>
  </nav>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('body'); ?>

<div class="card">
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Gambar Produk</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>sendal</td>
            <td>sendal.png</td>
            <td>sendal</td>
            <td>10000</td>
            <td>3</td>
            <td><a  href="<?php echo e(url('product/{show}')); ?>" class="btn btn-secondary" >Edit</a>  <a href="#" class="btn btn-danger">Delete</a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>sepatu</td>
            <td>sepatu.png</td>
            <td>sepatu</td>
            <td>20000</td>
            <td>2</td>
            <td><a href="<?php echo e(url('product/{show}')); ?>" class="btn btn-secondary">Edit</a>  <a href="#" class="btn btn-danger">Delete</a></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>buku</td>
            <td>buku.png</td>
            <td>buku</td>
            <td>30000</td>
            <td>1</td>
            <td><a href="<?php echo e(url('product/{show}')); ?>" class="btn btn-secondary">Edit</a>  <a href="#" class="btn btn-danger">Delete</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<?php $__env->stopSection(); ?>





<?php $__env->startSection('footer'); ?>
<div class="card">
    <div class="card-header">
      Quote
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>A well-known quote, contained in a blockquote element.</p>
        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
      </blockquote>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel project\tokoku1\resources\views/front.blade.php ENDPATH**/ ?>