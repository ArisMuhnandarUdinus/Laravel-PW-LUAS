<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Ubah Penerbit</h3>

<form action="<?php echo e(route('penerbit.update', $penerbit->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
        <label for="">Nama Penerbit:</label>
        <input type="text" name="nama_penerbit" id="" value="<?php echo e($penerbit->nama_penerbit); ?>">
    </div>

    <button type="submit" class="tombol">Update</button>
</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/penerbit/edit.blade.php ENDPATH**/ ?>