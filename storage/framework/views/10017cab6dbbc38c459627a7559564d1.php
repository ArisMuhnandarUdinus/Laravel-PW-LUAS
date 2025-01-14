<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Buat Penerbit</h3>

<form action="<?php echo e(route('penerbit.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="">Nama Penerbit:</label>
        <input type="text" name="nama_penerbit" id="" placeholder="Masukkan nama penerbit">
    </div>

    <button type="submit" class="tombol">Submit</button>
</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/penerbit/create.blade.php ENDPATH**/ ?>