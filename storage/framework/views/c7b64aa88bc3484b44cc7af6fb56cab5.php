<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Buat Monitor</h3>

<form action="<?php echo e(route('monitor.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label for="">Seri Monitor:</label>
        <input type="text" name="seri" id="" placeholder="Masukkan seri monitor">
    </div>

    <div class="form-group">
        <label for="">Resolusi:</label>
        <select name="resolusi_id" id="">
            <option value="Pilih resolusi" selected disabled>Pilih resolusi</option>
            <?php $__currentLoopData = $resolusi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($k->id); ?>"><?php echo e($k->nama); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Stock Monitor:</label>
        <input type="number" name="stock" id="" min="0" placeholder="Masukkan stock monitor">
    </div>

    <div class="form-group">
        <label for="">Harga Monitor:</label>
        <input type="number" name="harga" id="" min="1" placeholder="Masukkan harga monitor">
    </div>

    <button type="submit" class="tombol">Submit</button>
</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/monitor/create.blade.php ENDPATH**/ ?>