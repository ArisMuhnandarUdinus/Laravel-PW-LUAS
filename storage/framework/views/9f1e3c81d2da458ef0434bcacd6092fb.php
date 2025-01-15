<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Buat DetailPembelian</h3>

<form action="<?php echo e(route('detailpembelian.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label>Nama Detail Pembelian:</label>
        <input type="text" name="nama" id="" placeholder="Masukkan nama detail pembelian">
    </div>

    <button type="submit" class="tombol">Submit</button>
</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/detailpembelian/create.blade.php ENDPATH**/ ?>