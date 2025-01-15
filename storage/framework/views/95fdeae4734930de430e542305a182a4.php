<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Ubah Alat Tulis</h3>

<form action="<?php echo e(route('alattulis.update', $alattulis->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="form-group">
        <label>Nama Alat Tulis AlatTulis:</label>
        <input type="text" name="nama" placeholder="Masukkan nama alat tulis" value="<?php echo e($alattulis->nama); ?>">
    </div>

    <div class="form-group">
        <label>Stok Alat Tulis:</label>
        <input type="number" name="stok" id="" min="1" placeholder="Masukkan harga alat tulis"
            value="<?php echo e($alattulis->stok); ?>">
    </div>

    <div class="form-group">
        <label>Harga Alat Tulis:</label>
        <input type="number" name="harga" id="" min="1" placeholder="Masukkan harga alat tulis"
            value="<?php echo e($alattulis->harga); ?>">
    </div>

    <button type="submit" class="tombol">Submit</button>
</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-laravel\resources\views/alattulis/edit.blade.php ENDPATH**/ ?>