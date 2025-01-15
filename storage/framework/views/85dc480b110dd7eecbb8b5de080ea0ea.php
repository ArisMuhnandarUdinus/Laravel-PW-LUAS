<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Tambah Alat Tulis</h3>

<form action="<?php echo e(route('alattulis.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label>Nama Alat Tulis</label>
        <input type="text" name="nama" id="" placeholder="Masukkan nama">
    </div>

    <div class="form-group">
        <label>Stok</label>
        <input type="number" name="stok" id="" min="0" placeholder="Masukkan jumlah stok">
    </div>

    <div class="form-group">
        <label>Harga</label>
        <input type="number" name="harga" id="" min="1" placeholder="Masukkan harga">
    </div>

    <button type="submit" class="tombol">Submit</button>
</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-laravel\resources\views/alattulis/create.blade.php ENDPATH**/ ?>