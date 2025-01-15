<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Ubah Resolusi</h3>

<form action="<?php echo e(route('resolusi.update', $resolusi->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
        <label for="">Nama Resolusi:</label>
        <input type="text" name="nama" id="" value="<?php echo e($resolusi->nama); ?>">
    </div>

    <button type="submit" class="tombol">Update</button>
</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/resolusi/edit.blade.php ENDPATH**/ ?>