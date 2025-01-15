<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Ubah Monitor</h3>

<form action="<?php echo e(route('monitor.update', $monitor->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="form-group">
        <label for="">Seri Monitor:</label>
        <input type="text" name="seri" id="" placeholder="Masukkan seri monitor" value="<?php echo e($monitor->seri); ?>">
    </div>

    <div class="form-group">
        <label for="">Resolusi:</label>

        <select name="resolusi_id" id="">
            <?php $__currentLoopData = $resolusi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($d->id); ?>" <?php echo e($d->id == $monitor->resolusi_id ? 'selected' : ''); ?>>
                    <?php echo e($d->nama); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Harga Monitor:</label>
        <input type="number" name="harga" id="" min="1" placeholder="Masukkan harga monitor"
            value="<?php echo e($monitor->harga); ?>">
    </div>

    <button type="submit" class="tombol">Submit</button>

</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/monitor/edit.blade.php ENDPATH**/ ?>