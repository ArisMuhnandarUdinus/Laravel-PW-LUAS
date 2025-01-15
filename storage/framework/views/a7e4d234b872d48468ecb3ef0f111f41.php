<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Buat Transaksi</h3>

<form action="<?php echo e(route('pembelian.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <input type="hidden" value="<?php echo e(Auth::user()->id); ?>" name="user_id">

    <div class="form-group">
        <label>Barang:</label>
        <select name="alattulis_id" id="">
            <option value="" selected disabled>Pilih Barang</option>
            <?php $__currentLoopData = $alattulis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($b->id); ?>"><?php echo e($b->nama); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label>Jumlah:</label>
        <input type="number" value="" min="1" name="jumlah" id=""
            placeholder="Masukkan jumlah barang yang ingin dibeli">
    </div>

    <button type="submit" class="tombol">Submit</button>
</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-laravel\resources\views/pembelian/create.blade.php ENDPATH**/ ?>