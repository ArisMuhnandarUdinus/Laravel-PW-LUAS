<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Ubah Kategori</h3>

<form action="<?php echo e(route('kategori.update', $kategori->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
        <label for="">Nama Kategori:</label>
        <input type="text" name="nama_kategori" id="" value="<?php echo e($kategori->nama_kategori); ?>">
    </div>

    <button type="submit" class="tombol">Update</button>
</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/kategori/edit.blade.php ENDPATH**/ ?>